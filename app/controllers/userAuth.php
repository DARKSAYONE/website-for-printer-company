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
            $existence = selectOne('user', ['email' => $email]);
            if (!empty($existence['email']) && $existence['email'] === $email){
                $errMsg = "Пользователь с таким email уже существует";
            }
            else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $post = [
            'admin' => $admin,
            'username' => $username,
            'email' => $email,
            'pass' => $pass
            ];
            
       $id = Insert('user',$post);
       $user = selectOne('user', ['id' => $id]);
       
       $_SESSION['id'] = $user['id'];
       $_SESSION['name'] = $user['username'];
       $_SESSION['admin'] = $user['admin'];

       header('location: '. BASE_URL);

    }
}
    }else{
        //echo 'GET';
    }

 

    // tt($last_row);
  