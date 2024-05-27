<?php

?>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>ЦТ МВ [Администратор <?php echo $_SESSION['name']; ?>]</h1>
                
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a></li>

                    <?php if(isset($_SESSION['id'])): ?>    
                    <li>
                        <?php if($_SESSION['admin'] == 1): ?>
                        <a href="admin/admin.php">Администрирование</a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>