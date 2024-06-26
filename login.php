<?php 
include("path.php");
include("app/controllers/userAuth.php");
 ?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    
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

<!-- LOG FORM -->
<div class="container reg_form">
<form class="row justify-content-center" method="post" action="login.php">
    <h2>Заполните поля</h2>
    <div class="err">
      <p><?= $errMsg ?></p>
    </div>
    <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input value ="" name="email" type="text" class="form-control" id="formGroupExampleInput">
      </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input value ="" type="password" name="pass" class="form-control" id="exampleInputPassword1">
    </div>
      <div class="w-100"></div>
      <div class="col-12 col-md-4">
      <button type="submit" name="button-log" class="btn btn-success">Отправить</button>
      <div class="col-12 col-md-4"></div>
      <h4>Нет доступа? <a href="register.php">Зарегистрируйтесь</a></h4>
       </div>
  </form>
</div>
<!-- LOG FORM -->


<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>