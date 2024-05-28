<?php 
include("path.php");
include("app/database/db.php");
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Портфолио</title>
    
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
    <div class="portfolio-container">
        <?php
        // Получение всех постов из базы данных
        $posts = selectAll('posts');
        foreach ($posts as $post): ?>
            <div class="portfolio-item">
                <div class="card border-0">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="card-img-top" alt="image">
                    <div class="card-body">
                        <p class="card-text"><?php echo $post['text']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Блок мейн -->

<!-- Footer -->
<?php include("app/include/footer.php"); ?>
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
