<header>
    <div class="popup">
        <a href="index4.php">Главная</a>
        <?php if ($users_id): ?>
        <a id="show_add_photo" href="#">Фото</a>
        <?php endif; ?>
        <a href="#">Посты</a>
        <a href="user.php">Личный кабинет</a>
                <?php if ($users_id): ?>
            <a href="logout.php">Выход</a>
        <?php endif; ?>
    </div>
    <div class="mobile_icon">
        <img src="./assets/free-icon-bar-12522755.png" alt="Menu Icon">
    </div>
</header>