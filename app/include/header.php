<?php
?>
<header class="container-fluid">
    <div class="container header">
        <div class="row">
            <div class="col-4">
                <h1>Цифровая Типография</h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a></li>
                    <li><a href="<?php echo BASE_URL. 'about.php'?>">О нас</a></li>
                    <li><a href="<?php echo BASE_URL. 'services.php'?>">Услуги</a></li>
                    <li><a href="<?php echo BASE_URL. 'portfolio.php'?>">Портфолио</a></li>
                    <!-- <?php if(isset($_SESSION['id'])): ?>
                    <li><p><?php echo $_SESSION['name']; ?></p>
                    <?php endif; ?> -->

                    <?php if(isset($_SESSION['id'])): ?>    
                    <li>
                        <?php if($_SESSION['admin'] == 1): ?>
                        <a href="admin/portfolio/index.php">Администрирование</a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>