<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Цифровая Типография</h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a></li>
                    <li><a href="<?php echo BASE_URL. 'about.php'?>">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Портфолио</a></li>


                    <li>
                        <?php if($_SESSION['admin']): ?>
                        <a href="#">Администрирование</a>
                    </li>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>