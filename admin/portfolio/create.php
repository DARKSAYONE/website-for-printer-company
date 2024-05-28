<?php 
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

// Проверка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {
    $text = trim($_POST['text']);
    $image = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageFolder = '../../assets/images/' . $image;

    // Проверка, существует ли директория и имеет ли она права на запись
    if (!file_exists('../../assets/images')) {
        mkdir('../../assets/images', 0777, true);
    }

    // Перемещение загруженного файла в директорию
    if (move_uploaded_file($imageTmpName, $imageFolder)) {
        // Если файл успешно загружен, сохраняем информацию в базе данных
        $postData = [
            'text' => $text,
            'image' => $image,
        ];

        $postId = Insert('posts', $postData);

        header('location: ' . BASE_URL . '/admin/portfolio/index.php');
    } else {
        echo "Ошибка загрузки изображения.";
    }
}

?>
 <?php if($_SESSION['admin'] == 1): ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавить пост</title>
    
    <!-- Подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Подключение google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="../../source/css/style.css">
    <link rel="stylesheet" href="../../source/css/admin.css">
</head>
<body>
    <!-- header -->
    <?php include("../../app/include/admheader.php"); ?>
    <!-- Main -->
    <div class="container-fluid editpanel">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>">Главная</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>">Пользователи</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>">Посты</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo BASE_URL . '/admin/portfolio/index.php'; ?>">Портфолио</a>
                    </li>
                </ul>
            </div>
            <!-- Main content -->
            <div class="col-md-9">
                <h2 class="page-title">Добавить пост</h2>
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="text" class="form-label">Текст</label>
                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add_post">Добавить пост</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php endif; ?>