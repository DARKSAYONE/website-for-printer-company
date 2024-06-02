<?php 
include("path.php");
include("app/database/db.php");
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Подключение google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <!-- --------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="source/css/style.css">
  </head>
  <body>
<!-- header -->

<?php include("app/include/header.php"); ?>

<!-- Блок карусели -->
<div class="container">
    <div class="row">
        <h2 class="slider-title maintext">Добро пожаловать в "Цифровую Типографию"!
Мы рады приветствовать вас на нашем сайте. Мы предлагаем полный спектр услуг в области печати, обеспечивая высокое качество и оперативное выполнение заказов. Мы специализируемся на печати визиток, брошюр, открыток и многого другого. Наша цель – удовлетворить все потребности наших клиентов, предоставляя современные и качественные решения.</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="source/img/gkyckriaccentr.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>Брошюра</h5>
            <p>Брошюра для "РРЦ МВ"</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="source/img/kniga.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>Книга "Удивительный мир-насекомых."</h5>
            <p>Целая книга для Данилова Андрея.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="source/img/kalendar.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>Календарь</h5>
            <p>Календарь под заказ для AAAAAAAAAAAA</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Блок карусели -->
<!-- Блок мейн -->
<div class="container">
    <div class="row">
        <div class="main-content col-12">
            <h2>Почему именно мы?</h2>
            <div class="row">
                <div class="img col-12">
                    <img src="source/img/XXXL.webp" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12">
                    <h3>Наша команда состоит из опытных специалистов, которые любят свою работу и всегда готовы предложить креативные и эффективные решения. Мы уверены, что качественная печать – это залог успешного продвижения вашего бизнеса и создания положительного впечатления.

Мы предлагаем широкий спектр услуг, начиная от печати визиток и заканчивая созданием сложных рекламных материалов. Наша типография оснащена современным оборудованием, что позволяет нам выполнять заказы любой сложности в кратчайшие сроки.</h3>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container my-5 worktime">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Часы работы <i class="fas fa-chevron-down icon"></i></h2>
                <p>Понедельник - Пятница: 9:00 - 18:00</p>
                <p>Суббота: 10:00 - 14:00</p>
                <p>Воскресенье: Выходной</p>
                <h3>Звоните в рабочее время</h3>
            </div>
        </div>
    </div>


    <script src="source/js/scripts.js"></script>

<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
