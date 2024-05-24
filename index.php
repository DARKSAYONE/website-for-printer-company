<?php include("path.php");?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    
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

<!-- Блок карусели -->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Цифровая Типография предоставляет услуги печати всего чего угодно! Визитки, брошюры, всё это к нам!</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="source/img/gkyckriaccentr.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="source/img/kniga.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="source/img/kalendar.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption carousel-caption-my d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
    <div class="container row">
        <div class="main-content col-md-12">
        <h2>Название</h2>
        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="source/img/kniga.webp" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, doloremque, distinctio sequi repudiandae voluptates magnam illo eos enim perferendis, accusamus nam ullam incidunt vitae magni iure modi animi consequatur? Obcaecati!</h3>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container row">
        <div class="main-content col-md-12">
        <h2>Название</h2>
        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="source/img/kniga.webp" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, doloremque, distinctio sequi repudiandae voluptates magnam illo eos enim perferendis, accusamus nam ullam incidunt vitae magni iure modi animi consequatur? Obcaecati!</h3>
            </div>
        </div>
        </div>
    </div>
</div>



<!-- Блок мейн -->












<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>