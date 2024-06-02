<?php 
include("path.php");
include("app/database/db.php");
include("app/controllers/telegram.php");

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

        // Отправка уведомления в Телеграм
        $message = "Новый заказ!\nИмя: $name\nТелефон: $phone\nEmail: $email\nКомментарий: $comment\nУслуга: $service";
        $telegramResponse = sendTelegramMessage($message, $telegramBotToken, $chatId);

        if ($telegramResponse['success']) {
            header('Location: ' . BASE_URL . '/index.php?order_success=true');
        } else {
            // Обработка ошибки при отправке сообщения в Телеграм
            $errMsg = "Заказ был сохранен, но возникла ошибка при отправке уведомления в Телеграм: " . $telegramResponse['error'];
            echo $errMsg; // Вывод сообщения об ошибке (можете настроить отображение по-своему)
        }
    }
}
?>
