<?php
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

// Получение идентификатора услуги из URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Поиск услуги в базе данных
    $service = selectOne('services', ['id' => $id]);

    if ($service) {
        // Удаление записи из базы данных
        DeleteFromDB('services', $id);

        // Путь к изображению
        $image_path = ROOT_PATH . "/assets/images/services/" . $service['image'];

        // Удаление изображения из папки
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Перенаправление на страницу списка услуг
        header('Location: ' . BASE_URL . '/admin/services/index.php');
    } else {
        // Если услуга не найдена, перенаправление на страницу списка услуг с сообщением об ошибке
        header('Location: ' . BASE_URL . '/admin/services/index.php?error=notfound');
    }
} else {
    // Если идентификатор не передан, перенаправление на страницу списка услуг с сообщением об ошибке
    header('Location: ' . BASE_URL . '/admin/services/index.php?error=missingid');
}
?>
