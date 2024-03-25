<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="icon" href="/assets/logo.png">
</head>
<body>
    <header>
        <div class="logo-container"><a href="/index.php"><img src="/assets/logo.png" class="logo"></a></div>
        <div class="main-title">Dark Souls III</div>
        <div class="header-flex">
            <div class="drop-menu">Противники
                <div class="dropmenu-content">
                    <div><a href="/pages/games/bosses/Боссы.php">Боссы</a></div>
                    <div><a href="#">Мини-боссы</a></div>
                    <div><a href="#">Рядовые противники</a></div>
                </div>
            </div>
            <div class="drop-menu">Оружие
                <div class="dropmenu-content">
                    <div><a href="#">Катализаторы</a></div>
                    <div><a href="#">Щиты</a></div>
                    <div><a href="#">Оружие из душ</a></div>
                    <div><a href="#">Пути улучшений</a></div>
                </div>
            </div>
            <div class="drop-menu">Персонажи
                <div class="dropmenu-content">
                    <div><a href="#">Торговцы</a></div>
                    <div><a href="#">Кузнец</a></div>
                    <div><a href="#">Фантомы</a></div>
                </div>
            </div>
            <div class="drop-menu" id="loc"><a href="#">Локации</a></div>
            <div class="drop-menu">Магия
                <div class="dropmenu-content">
                    <div><a href="#">Чары</a></div>
                    <div><a href="#">Пиромантия</a></div>
                    <div><a href="#">Чудеса</a></div>
                    <div><a href="#">Заклинания из душ</a></div>
                </div>
            </div>
            <div class="drop-menu">Предметы
                <div class="dropmenu-content">
                    <div><a href="#">Броня</a></div>
                    <div><a href="#">Улучшения</a></div>
                    <div><a href="#">Ключи</a></div>
                    <div><a href="#">Кольца</a></div>
                    <div><a href="#">Расходуемые предметы</a></div>
                    <div><a href="#">Души</a></div>
                    <div><a href="#">Мультиплеер</a></div>
                </div>
            </div>
            <div class="drop-menu">Ещё...
                <div class="dropmenu-content">
                    <div><a href="#">Сетевая игра</a></div>
                    <div><a href="#">Механика игры</a></div>
                    <div><a href="#">Доп. контент</a></div>
                    <div><a href="#">Вырезанный контент</a></div>
                </div>
            </div>
        </div>
    </header>
    <div class="user">
        <?php
            if ($_GET["successful_reg"] == "1") {
                echo '<p class="success">Вы успешно зарегистрировались! Теперь <a href="authorization.php">авторизуйтесь</a> под указанными данными.</p>';
            }
            else {
                if (isset($_SESSION["login"])) {
                    echo '<p class="hello-user">Здравствуйте, ' . $_SESSION["login"] . '!</p>
                    <hr class="vertical-line">
                    <a class="log-out" href="/logout.php">Выйти из аккаунта</a>';
                }
                else {
                    echo '<p class="hello-user">Станьте полым! Пройдите <a href="/authorization.php" class="auth-link">авторизацию</a>!</p>';
                }
            }
        ?>
    </div>