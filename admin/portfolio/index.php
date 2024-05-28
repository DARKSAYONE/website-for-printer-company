<?php 
include("../../path.php");
include("../../app/database/db.php");

?>
 <?php if($_SESSION['admin'] == 1): ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная Администратор</title>
    
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
 <div class="col-14">
 <div class="container-fluid editpanel">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="<?php echo BASE_URL . '/admin/portfolio/index.php'; ?>">Редактирование портфолио.</a>
                </li>
                <li class="list-group-item">
                <a href="<?php echo BASE_URL . '/admin/portfolio/index.php'; ?>">Редактирование услуг.</a>
                </li>
            </ul>
        </div>
        <!-- Main content -->
        <div class="col-md-9">
            <div class="button-group">
                <a href="create.php" class="btn btn-success">Добавить работу</a>
            </div>
            <h2 class="page-title">Управление портфолио</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Текст</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col" colspan="2">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $posts = selectAll('posts');
                    foreach ($posts as $key => $post): ?>
                        <tr>
                            <th scope="row"><?php echo $key + 1; ?></th>
                            <td><?php echo substr($post['text'], 0, 50) . '...'; ?></td>
                            <td><img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" width="100"></td>
                            <td><?php echo date('d-m-Y', strtotime($post['created_at'])); ?></td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Редактировать</a></td>
                            <td><a href="delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Удалить</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php endif; ?>