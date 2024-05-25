<?php

require('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}

function dbCheckErr($query)
{
    $errinfo = $query->errorInfo();

    if($errinfo[0] !== PDO::ERR_NONE){
        echo $errinfo[2];
        exit();
    }
    return true;
}
// Запрос на получение данных одной таблицей.
function selectAll($table,$params = []){

    global $pdo;
    $sql = "SELECT * FROM $table";
    
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    // tt($sql);
    // exit
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckErr($query);

    return $query->fetchAll();
}
//Запрос на получение одной строки с таблицы.
function selectOne($table,$params = []){

    global $pdo;
    $sql = "SELECT * FROM $table";
    
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'".$value."'";
            }
            if($i === 0){
                $sql = $sql . " WHERE $key=$value";
            }else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";


    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckErr($query);

    return $query->fetch();
}
$params = [
    'admin' => 1,
    'username' => 'Operator'
];

//tt(selectAll('user',$params));
tt(selectOne('user'));

//Запись в таблицу.
function Insert($table, $parameters){
    global $pdo;
    $i = 0;
    $col = '';
    $mask ='';
    foreach($parameters as $key => $value){
        if($i === 0){
            $col = $col . $key;
            $mask = $mask ."'". $value."'";
        }
        else{
        $col = $col . ", $key";
        $mask = $mask . ", '"."$value" . "'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($col) VALUES ($mask)";
    tt($sql);

    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckErr($query);
}


$arrData = [ 
    'admin' => 1,
    'username' => 'test00004',
    'email' => 'test20004@test.ru',
    'pass' => '111111114'
];
Insert('user', $arrData);