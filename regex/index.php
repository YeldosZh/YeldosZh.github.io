<?php
$id = 0;
$products = [];
$katalog = [
    ['filename' => 'l1.txt', 'name' => 'Лекарства'],
    ['filename' => 'l2.txt', 'name' => 'Витамины и БАДы'],
    ['filename' => 'l3.txt', 'name' => 'Изделия мед. назначения'],
    ['filename' => 'l4.txt', 'name' => 'Мать и дитя'],
    ['filename' => 'l5.txt', 'name' => 'Красота и гигиена']
];


$id++;
foreach ($katalog as $val) {
    $products[] = ['id' => $id, 'name' => $val['name'], 'brand' => null, 'price' => null, 'link' => null, 'parent_id' => null];
    $p_id = $id;
    $id++;
    $subject = file_get_contents($val['filename']);
    $pattern = '/href="(.*)">(.*)<\/a>/u';
    $res = [];
    preg_match_all($pattern, $subject, $res);
    unset($res[0]);
    $urls = $res[1];
    $pod_katalog = $res[2];
    foreach ($pod_katalog as $k => $name) {
        echo "loading => $name \n";
        $products[] = ['id' => $id, 'name' => $name, 'brand' => null, 'price' => null, 'link' => null, 'parent_id' => $p_id];
        $parent_id = $id;
        $id++;
        $count = getMaxPage($urls[$k]);
        $str = 1;
        for ($i = 0; $i < $count; $i++) {
            getData($urls[$k], $str, $parent_id);
            $str++;
        }
       
    }
   
}

/*
$fp = fopen ('array.txt', "w");
 
foreach ($products as $out)
{
fwrite($fp, $out['id'] . ' | ' . $out['name'] . ' | ' . $out['brand'] . ' | ' . $out['price'] . ' | ' . $out['link'] . ' | ' . $out['parent_id'] . "\n");
}
 
fclose($fp);
*/


function getData($path, $page, $parent_id) {
    global $id, $products;

    if ($page == 1) {
        $content = file_get_contents('https://europharma.kz'. $path);
    } else {
        $content = file_get_contents('https://europharma.kz'. $path . '&page=' . $page);
    }
    $pattern = '/<div class="catalog__body">/u';
    $blocks = preg_split($pattern, $content);
    unset($blocks[0]);
    $newblock = str_replace(["\n"], "", $blocks[1]);
    $array = [];
    $pattern = '/<div class="card-product__header">(.*?)>В корзину/u';
    preg_match_all($pattern, $newblock, $array);
    $pattern_img = '/<img class="card-product__img" src="(.*?)" alt/u';
    $pattern_name = '/<a class="card-product__link".*>(.*?)<\/a>/u';
    $pattern_mode = '/<div>Производитель:(.+?)<\/div>/u';
    $pattern_price = '/<span class="card-product__price_discount">(.*?)<\/span>/u';
    $names = $images = $modes = $prices = [];
    foreach ($array[0] as $value) {
        preg_match_all($pattern_img, $value, $images);
        preg_match_all($pattern_name, $value, $names);
        preg_match_all($pattern_mode, $value, $modes);
        preg_match_all($pattern_price, $value, $prices);
        unset($images[0], $names[0], $modes[0], $prices[0]);
        $products[] = ['id' => $id, 'name' => $names[1][0], 'brand' => isset($modes[1][0]) ? $modes[1][0] : null , 'price' => isset($prices[1][0]) ? $prices[1][0] : null, 'link' => $images[1][0], 'parent_id' => $parent_id];
        $id++;
    }
}


function getMaxPage($path) {
    $content = file_get_contents('https://europharma.kz'. $path);
    $pattern = '/<div class="catalog__footer">/u';
    $blocks = preg_split($pattern, $content);
    unset($blocks[0]);
    $pattern = '/<li class="pagination__item"><a class="pagination__link".*>(.*)<\/a><\/li>/u';
    $pages = [];
    preg_match_all($pattern, $blocks[1], $pages);
    $max = 1;
    if (sizeof($pages[1])) {
        $cnt = sizeof($pages[1]);
        $max = (int)$pages[1][$cnt-1];
    }
    return $max;
}

