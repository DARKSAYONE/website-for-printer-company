<?php 
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $service = selectOne('services', ['id' => $id]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-service'])) {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    $image = $_FILES['image'];

    if ($title === '' || $description === '' || $price === '') {
        $errMsg = "Все поля должны быть заполнены.";
    } else {
        $service = [
            'title' => $title,
            'description' => $description,
            'price' => $price,
        ];

        // Обработка загрузки нового изображения
        if (!empty($image['name'])) {
            $image_name = time() . '_' . $image['name'];
            $destination = ROOT_PATH . "/assets/images/services/" . $image_name;
            $result = move_uploaded_file($image['tmp_name'], $destination);

            if ($result) {
                $service['image'] = $image_name;
            } else {
                $errMsg = "Не удалось загрузить изображение";
            }
        }

        if (!isset($errMsg)) {
            UpdateDB('services', $id, $service);
            header('Location: ' . BASE_URL . '/admin/services/index.php');
        }
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактировать Услугу</title>

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
    <?php include("../admsidebar.php"); ?>
        <!-- Main content -->
        <div class="col-md-9">
            <h2 class="page-title">Редактировать услугу</h2>
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Название услуги</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $service['title']; ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $service['description']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $service['price']; ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Изображение</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary" name="update-service">Обновить</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
