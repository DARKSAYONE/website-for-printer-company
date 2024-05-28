<?php 
include("path.php");
include("app/database/db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);
    $service = trim($_POST['service']);

    if ($name === '' || $phone === '' || $service === '') {
        $errMsg = "Все обязательные поля должны быть заполнены.";
    } else {
        $order = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'comment' => $comment,
            'service' => $service,
            'status' => 'Принят'
        ];

        insert('orders', $order);
        header('Location: ' . BASE_URL . '/index.php?order_success=true');
    }
}
?>
