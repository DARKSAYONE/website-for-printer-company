<?php
// Настройки для Телеграм-бота
$telegramBotToken = '#';
$chatId = '#';

// Функция для отправки сообщения в Телеграм
function sendTelegramMessage($message, $telegramBotToken, $chatId) {
    $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);

    if ($result === FALSE) {
        // Получение ошибки из последнего вызова
        $error = error_get_last();
        return ['success' => false, 'error' => $error['message']];
    }

    $responseData = json_decode($result, true);

    if (isset($responseData['ok']) && $responseData['ok'] == true) {
        // Успешная отправка сообщения
        return ['success' => true];
    } else {
        // Ошибка со стороны API Телеграм
        return ['success' => false, 'error' => $responseData['description'] ?? 'Unknown error'];
    }
}
?>