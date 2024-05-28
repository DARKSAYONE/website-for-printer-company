<?php 
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");
$services = selectAll('services');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Услуги</title>

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
            <h2 class="page-title">Услуги</h2>
            <a href="create.php" class="btn btn-success mb-3">Добавить услугу</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($services as $service): ?>
                        <tr>
                            <th scope="row"><?php echo $service['id']; ?></th>
                            <td><?php echo $service['title']; ?></td>
                            <td><?php echo $service['description']; ?></td>
                            <td><?php echo $service['price']; ?></td>
                            <td><img src="<?php echo BASE_URL . '/assets/images/services/' . $service['image']; ?>" alt="Service Image" width="100"></td>
                            <td>
                                <a href="edit.php?id=<?php echo $service['id']; ?>" class="btn btn-warning btn-sm">Редактировать</a>
                                <a href="delete.php?id=<?php echo $service['id']; ?>" class="btn btn-danger btn-sm">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
