<?php 
include("path.php");
include("app/database/db.php");
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
    <link rel="stylesheet" href="source/css/style.css">
</head>
<body>
<!-- header -->
<?php include("app/include/header.php"); ?>

<!-- Блок мейн -->
<div class="container mt-5">
    <div class="row">
        <?php
        $services = selectAll('services');
        foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo BASE_URL . '/assets/images/services/' . $service['image']; ?>" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $service['title']; ?></h5>
                        <p class="card-text"><?php echo $service['description']; ?></p>
                        <p class="card-text">Цена: <?php echo $service['price']; ?> руб.</p>
                        <button class="btn btn-primary" onclick="showOrderForm('<?php echo $service['title']; ?>')">Заказать</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Блок мейн -->

<!-- Форма заказа -->
<div id="orderFormContainer" class="container mt-5" style="display: none;">
    <h2>Оформление заказа</h2>
    <form action="order.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон для связи</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Комментарий</label>
            <textarea class="form-control" id="comment" name="comment"></textarea>
        </div>
        <div class="mb-3">
            <label for="service" class="form-label">Услуга</label>
            <input type="text" class="form-control" id="service" name="service" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

<script>
function showOrderForm(serviceTitle) {
    document.getElementById('service').value = serviceTitle;
    document.getElementById('orderFormContainer').style.display = 'block';
    window.scrollTo(0, document.getElementById('orderFormContainer').offsetTop);
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
