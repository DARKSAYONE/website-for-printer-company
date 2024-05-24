<?php

require('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}

function selectAll($table){
        global $pdo;
        $sql = "SELECT * FROM $table";

    $query = $pdo->prepare($sql);
    $query->execute();
    $errinfo = $query->errorInfo();

    if($errinfo[0] !== PDO::ERR_NONE){
        echo $errinfo[2];
        exit();
    }

    return $query->fetchAll();
}

tt(selectAll('user'));