<?php
include("../../path.php");
include("../../app/database/db.php");

// Проверка, является ли пользователь администратором
if (!$_SESSION['admin']) {
    header('location: ' . BASE_URL);
    exit();
}

// Проверка, получен ли ID поста для удаления
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Найти пост в базе данных
    $post = selectOne('posts', ['id' => $id]);

    // Удалить изображение из папки
    if ($post) {
        $imagePath = ROOT_PATH . "/assets/images/" . $post['image'];
        echo "Path to image: " . $imagePath; // Отладочное сообщение
        if (file_exists($imagePath)) {
            if (unlink($imagePath)) {
                echo "Image deleted successfully";
            } else {
                echo "Failed to delete image";
            }
        } else {
            echo "Image file does not exist";
        }
    }

    // Удалить запись из базы данных
    DeleteFromDB('posts', $id);

    // Перенаправить обратно на страницу управления постами
    header('location: ' . BASE_URL . '/admin/portfolio/index.php');
    exit();
} else {
    header('location: ' . BASE_URL . '/admin/portfolio/index.php');
    exit();
}
