<?php
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

$orders = selectAll('orders');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Заказы</title>
    
     <!-- Подключение google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- Подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <?php include("../admsidebar.php"); ?>

        <!-- Main content -->
        <div class="col-md-9">
            <h2 class="page-title">Заказы</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Комментарий</th>
                        <th>Услуга</th>
                        <th>Статус</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['id']; ?></td>
                            <td><?php echo $order['name']; ?></td>
                            <td><?php echo $order['phone']; ?></td>
                            <td><?php echo $order['email']; ?></td>
                            <td><?php echo $order['comment']; ?></td>
                            <td><?php echo $order['service']; ?></td>
                            <td><?php echo $order['status']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $order['id']; ?>" class="btn btn-primary btn-sm">Изменить</a>
                                <!-- <a href="delete.php?id=<?php echo $order['id']; ?>" class="btn btn-danger btn-sm">Удалить</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin
