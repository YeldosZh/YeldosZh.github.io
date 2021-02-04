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
        $sth = $pdo->prepare("SELECT * FROM `products` WHERE `parent_id` IS NULL");
        $sth->execute();
    } else {
        $sth = $pdo->prepare("SELECT * FROM `products` WHERE `parent_id` = :parent_id");
        $sth->execute(array('parent_id' => $parent_id));
    }
    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $array;
}
