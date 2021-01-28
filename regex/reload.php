<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'function.php';
include 'db.php';


$rests = getTnvedFromPage();
if ($rests == false) {
    var_dump(1);
} else {
    // print_r($rests);
    $smtp = $pdo->prepare("TRUNCATE TABLE `tnved`"); //Очистить таблицу (TRUNCATE)
    $smtp->execute();

    #"Этап# 2. Подгатовка.

    $stmt = $pdo->prepare("
     INSERT INTO
        `tnved` (
         `code`,
         `description`,
         `parent_id`
        ) VALUES (
             :code,
             :description,
             :parent_id
        )
    ");

    #Этап#3. Выполнение.
    foreach ($rests as $rest) {
        $stmt->execute([
            ':code'        => $rest['id'],
            ':description' => str_replace("'", "", str_replace("\'", "", $rest['name'])),
            ':parent_id'   => ($rest['id_parent'] == $rest['id']) ? null : getParentId($rest['id_parent'])
        ]);
    }
}

function getParentId($code)
{
    global $pdo;

    $sth = $pdo->prepare("SELECT * FROM `tnved` WHERE `code` = :code");
    $sth->execute(array('code' => $code));
    $array = $sth->fetch(PDO::FETCH_ASSOC);
    $tnved_id = $array['tnved_id'];

    return $tnved_id;
}
