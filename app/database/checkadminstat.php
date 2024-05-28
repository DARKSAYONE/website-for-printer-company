<?php
require('connect.php');

// Функция для проверки статуса администратора пользователя
function checkAdminStatus($userId, $pdo) {
    $user = selectOne('user', ['id' => $userId], $pdo);
    if ($user && $user['admin'] == 1) {
        return true;
    } else {
        return false;
    }
}

if(isset($_SESSION['id'])) {
    $userId = $_SESSION['id']; 
    if (!checkAdminStatus($userId, $pdo)) {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
