<?php include("path.php");?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>О нас</title>
    
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
        <!-- Приветственное сообщение -->
        <div class="col-12 text-center mb-5">
            <h1 class="display-4">Добро пожаловать!</h1>
            <p class="lead">Мы рады приветствовать вас на нашей странице. Узнайте больше о нас и наших работах.</p>
        </div>
    </div>
    
    <!-- Информация о компании -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h2>О компании</h2>
            <p>Наша компания занимается предоставлением высококачественных услуг в области типографии. Мы стремимся к постоянному совершенствованию и внедрению новейших технологий для обеспечения максимального удовлетворения потребностей наших клиентов.</p>
        </div>
        <div class="col-md-6">
            <img src="path/to/your/image.jpg" class="img-fluid" alt="О компании">
        </div>
    </div>
    
    <!-- Примеры работ -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2>Примеры наших работ</h2>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/example_work1.jpg" class="card-img-top" alt="Работа 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Работа 1</h5>
                    <p class="card-text">Описание работы 1.</p>
                    <a href="portfolio.php" class="btn btn-primary">Смотреть больше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/example_work2.jpg" class="card-img-top" alt="Работа 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Работа 2</h5>
                    <p class="card-text">Описание работы 2.</p>
                    <a href="portfolio.php" class="btn btn-primary">Смотреть больше</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="path/to/example_work3.jpg" class="card-img-top" alt="Работа 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Работа 3</h5>
                    <p class="card-text">Описание работы 3.</p>
                    <a href="portfolio.php" class="btn btn-primary">Смотреть больше</a>
                </div>
            </div>
        </div>
    </div>
</div>>
    
   
<!-- Блок мейн -->

<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
