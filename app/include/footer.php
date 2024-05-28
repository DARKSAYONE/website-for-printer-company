<footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-left">
                <p>Минеральные Воды</p>
                <p>ул. Пушкина, дом Колотушкина</p>
            </div>
            <div class="footer-center">
                <img src="source/img/logo.png" alt="Цифровая Типография" class="footer-logo">
                <p>Сайт носит информационный характер и не является публичной офертой</p>
                <p>2024 ИП "Name".</p>
            </div>
            <div class="footer-right">
                <p><a href="tel:8005000691">8 (800) 535345</a></p>
                <p><a href="mailto:partner@optpoligraf.ru">partner@optpoligraf.ru</a></p>
            </div>
        </div>
        <?php if(!isset($_SESSION['id'])): ?>
    <div class="footer-adminlogin">
        <a href="login.php">Панель</a>
    </div>
<?php else: ?>
    <div class="footer-adminlogin">
        <a href="logout.php">Выход</a>
    </div>
<?php endif; ?>
    </div>
</footer>
