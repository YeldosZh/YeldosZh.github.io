<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'db.php';


function getProducts(int $parent_id = null)
{
     global $pdo;

    $array = [];
    if (!isset($parent_id)) {
        $sth = $pdo->prepare("SELECT * FROM `products3` WHERE `parent_id` IS NULL");
        $sth->execute();
    } else {
        $sth = $pdo->prepare("SELECT * FROM `products3` WHERE `parent_id` = :parent_id");
        $sth->execute(array('parent_id' => $parent_id));
    }
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}

function searchProduct(string $string)
{
     global $pdo;

    $array = [];
    if ($string != '') {
        $sth = $pdo->prepare("SELECT * FROM `products3` WHERE `parent_id` = :string");
        $sth->execute(array('string' => $string));
    }
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}

function searchText(string $string)
{
     global $pdo;
//SELECT * FROM post WHERE text LIKE '%статьи%'
    $array = [];
    if ($string != '') {
        $sth = $pdo->prepare("SELECT * FROM `products3` WHERE `name` LIKE :string");
        $sth->execute(array('string' => "%$string%"));
    }
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}
//var_dump(searchText('ди'));

function AllProduct()
{
     global $pdo;

    $array = [];
 
    $sth = $pdo->prepare("SELECT * FROM `products3`");
    $sth->execute();
    
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}

function updateLink($string, $id)
{
     global $pdo;

    $array = [];
 
    $sth = $pdo->prepare("UPDATE `products3` SET `link` = :string WHERE `id` = :id");
    $sth->execute(array('string' => $string, 'id' => $id));
    
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}


//$list = AllProduct();
//
//foreach ($list as $val) {
//    $url = $val['link'];
//    if (isset($url)) {
//        $path = 'assets/img/products/'.$val['id'].'.png';
//        file_put_contents($path, file_get_contents($url));
//        updateLink($path, $val['id']);
//        var_dump($val['id']);
////        break;
//    }
//}
