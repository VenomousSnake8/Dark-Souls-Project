<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="assets/logo.png">
</head>
<body>
    <header>
        <div class="logo-container"><a href="index.php"><img src="assets/logo.png" class="logo"></a></div>
        <div class="main-title">Dark Souls III</div>
        <div class="header-flex">
            <div class="drop-menu">Противники
                <div class="dropmenu-content">
                    <div><a href="/pages/games/bosses/Боссы.html">Боссы</a></div>
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
    <main style="height: 715px; padding-bottom: 0;">
        <div class="main-page-content">
            <h1 style="text-decoration: none; text-align: center; width: 100%;">Регистрация</h1>
            <div class="form-container">
                <form action="databases/reg_script.php" method="post">
                    <input type="text" name="login" placeholder="Логин" required><br>
                    <input type="password" name="password" placeholder="Пароль" required><br>
                    <input type="submit" value="Зарегистрироваться">
                </form>
            </div>
            <p class="change-for-the-better">Уже зарегистрированы? <a href="authorization.php">Авторизуйтесь</a>!</p>
        </div>
    </main>
    <footer>
        <div>Game production by: <img src="assets/FromSoftwareGrayLogo.png" class="from-logo"></div>
        <div>Web-site by: <span class="snake">Venomous Snake</span></div>
    </footer>
</body>
</html>