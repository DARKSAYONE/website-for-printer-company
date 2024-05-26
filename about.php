<?php include("path.php");
include("app/database/db.php");?>
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
<div class="container">
    <div class="container row">
        <div class="main-content col-md-12">
        <h2>Название</h2>
        <div class="about_post row">
            <div class="img col-12">
                <img src="source/img/kniga.webp" alt="" class="img-thumbnail">
            </div>
            <div class="aobut_post_text col-12 col-md-8">
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