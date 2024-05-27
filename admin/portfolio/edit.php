<?php 
include("../../path.php");
include("../../app/database/db.php");

$id = $_GET['id'];
$post = selectOne('posts', ['id' => $id]);

// Проверка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])) {
    $text = trim($_POST['text']);
    $image = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageFolder = '../../assets/images/' . $image;

    if ($image) {
        move_uploaded_file($imageTmpName, $imageFolder);
    } else {
        $image = $post['image'];
    }

    $postData = [
        'text' => $text,
        'image' => $image,
    ];

    UpdateDB('posts', $id, $postData);

    header('location: ' . BASE_URL . '/admin/portfolio/index.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактировать пост</title>
    
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
    <div class="col-8 container-fluid editpanel">
        <div class="row">
            <!-- Sidebar -->
            <!-- Main content -->
            <div class="col-md-9">
                <h2 class="page-title">Редактировать пост</h2>
                <form action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="text" class="form-label">Текст</label>
                        <textarea class="form-control" id="text" name="text" rows="3"><?php echo $post['text']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Изображение</label>
                        <input class="form-control" type="file" id="image" name="image">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="<?php echo $post['text']; ?>" style="width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-primary" name="edit_post">Сохранить изменения</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
