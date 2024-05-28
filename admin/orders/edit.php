<?php 
include("../../path.php");
include("../../app/database/db.php");
include("../../app/database/checkadminstat.php");

if (isset($_GET['id'])) {
    $order = selectOne('orders', ['id' => $_GET['id']]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = $_POST['status'];
    $id = $_POST['id'];

    UpdateDB('orders', $id, ['status' => $status]);

    header('Location: ' . BASE_URL . '/admin/orders/index.php');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Изменить статус заказа</title>
    
    <!-- Подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../source/css/style.css">
</head>
<body>
<!-- header -->
<?php include("../../app/include/admheader.php"); ?>

<!-- Main content -->
<div class="container mt-5">
    <h2>Изменить статус заказа</h2>
    <form action="edit.php" method="post">
        <div class="mb-3">
            <label for="status" class="form-label">Статус</label>
            <select class="form-control" id="status" name="status">
                <option value="Принят" <?php if ($order['status'] == 'Принят') echo 'selected'; ?>>Принят</option>
                <option value="В обработке" <?php if ($order['status'] == 'В обработке') echo 'selected'; ?>>В обработке</option>
                <option value="Отменено" <?php if ($order['status'] == 'Отменено') echo 'selected'; ?>>Отменено</option>
                <option value="Выполнен" <?php if ($order['status'] == 'Выполнен') echo 'selected'; ?>>Выполнен</option>
            </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
