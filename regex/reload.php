<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'index.php';
include 'db.php';


if (!isset($products) || !sizeof($products)) {
    var_dump(1);
} else {
    // print_r($rests);
    $smtp = $pdo->prepare("TRUNCATE TABLE `products3`"); //Очистить таблицу (TRUNCATE)
    $smtp->execute();

    #"Этап# 2. Подгатовка.

    $stmt = $pdo->prepare("
     INSERT INTO
        `products3` (
         `id`,
         `name`,
         `brand`,
         `price`,
         `link`,
         `parent_id`
        ) VALUES (
             :id,
             :name,
             :brand,
             :price,
             :link,
             :parent_id
        )
    ");

    #Этап#3. Выполнение.
    foreach ($products as $value) {
        $stmt->execute([
            ':id'        => $value['id'],
            ':name' => $value['name'],
            ':brand'   => $value['brand'],
            ':price'   => $value['price'],
            ':link'   => $value['link'],
            ':parent_id'   => $value['parent_id']
        ]);
    }
}


