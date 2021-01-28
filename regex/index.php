<?php

$subject = file_get_contents('l5.txt');
$pattern = '/href="(.*)">(.*)<\/a>/u';
$res = [];
preg_match_all($pattern, $subject, $res);
unset($res[0]);
$links = $res[1];
$tree_name = $res[2];
var_dump($tree_name);
die();
$number = 1;
$fd = fopen("Красота и гигиена.txt", 'w') or die("не удалось создать файл");
foreach ($tree_name as $k => $value) {
    echo "loading... \n";
    fwrite($fd, "$value ------------------------------------------------------------------------------------------------------------------------------------------------\n");
    // fwrite($fd, " names , brands , price , img-links\n");
    $cnt = getMaxPage($links[$k]);
    $j = 1;
    for ($i = 0; $i < $cnt; $i++) {
        getData($links[$k], $j);
        $j++;
    }
}

fclose($fd);


function getMaxPage($path) {
    $content = file_get_contents('https://europharma.kz'. $path);
    $pattern = '/<div class="catalog__footer">/u';
    $blocks = preg_split($pattern, $content);
    unset($blocks[0]);
    // var_dump($blocks[1]);
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

// $products = [];
function getData($path, $page) {
    global $fd, $number;

    if ($page == 1) {
        $content = file_get_contents('https://europharma.kz'. $path);
    } else {
        $content = file_get_contents('https://europharma.kz'. $path . '&page=' . $page);
    }
    $pattern = '/<div class="catalog__body">/u';
    $blocks = preg_split($pattern, $content);
    unset($blocks[0]);
    // var_dump($blocks[1]);
    $newblock = str_replace(["\n"], "", $blocks[1]);
    // var_dump($newblock);
    $array = [];
    $pattern = '/<div class="card-product__header">(.*?)>В корзину/u';
    preg_match_all($pattern, $newblock, $array);
    // var_dump($array);
    // die();
    $pattern_img = '/<img class="card-product__img" src="(.*?)" alt/u';
    $pattern_name = '/<a class="card-product__link".*>(.*?)<\/a>/u';
    $pattern_mode = '/<div>Производитель:(.+?)<\/div>/u';
    $pattern_price = '/<span class="card-product__price_discount">(.*?)<\/span>/u';
    $names = $images = $modes = $prices = [];
    // var_dump($array);
    // die();
    foreach ($array[0] as $value) {
        preg_match_all($pattern_img, $value, $images);
        preg_match_all($pattern_name, $value, $names);
        preg_match_all($pattern_mode, $value, $modes);
        preg_match_all($pattern_price, $value, $prices);
        unset($images[0], $names[0], $modes[0], $prices[0]);
        $name = $names[1][0];
        $brand = $modes[1][0];
        $price = $prices[1][0];
        $img = $images[1][0];
        fwrite($fd, " id => $number \n");
        fwrite($fd, "    наименование => $name \n");
        fwrite($fd, "    производитель => $brand \n");
        fwrite($fd, "    цена => $price \n");
        fwrite($fd, "    img-link => $img \n");
        $number++;

        // fwrite($fd, " $name , $brand , $price , $img \n");
    }
    
    
}


