<?php
  include("app/database/db.php");

$isSubmit = false;
$errMsg = ' ';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $admin = 0;
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        $passRepeat = trim($_POST['passrepeat']);

        if($username === '' || $email === '' || $pass === '' || $passRepeat === ''){
            $errMsg = " Не все поля заполнены.";

        }elseif(mb_strlen($username, 'UTF-8') < 2){
            $errMsg = "Имя должно быть более двух символов";
        }
        elseif($pass !== $passRepeat){
            $errMsg = "Пароли должны совпадать";
        }
        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'username' => $username,
            'email' => $email,
            'pass' => $pass
    
        ];
    // $id = Insert('user',$post);
        $isSubmit = true;
        tt($post);
        }
    // $last_row = selectOne('user', ['id' => $id]);
    }
    else{
        echo 'GET';
    }

 

    // tt($last_row);
  