<?php
    session_start();
    $title = "Главная";

    require("header.php");
?>
    <main style="height: 665px; padding-bottom: 0;">
        <p class="welcome-title">Добро пожаловать на базу знаний по игре <span class="ds">Dark Souls III</span> !</p>
        <div class="table-container" id="index-table3">
            <table class="index-content-table">
                <tr>
                    <td>
                        <p class="table-title">Игры и дополнения</p>
                        <ul>
                            <li><a href="pages/games/Dark Souls III.php" class="index-table-link">Dark Souls III</a></li>
                            <li><a href="pages/games/Ashes of Ariandel.php" class="index-table-link">Ashes of Ariandel</a></li>
                            <li><a href="pages/games/The Ringed City.php" class="index-table-link">The Ringed City</a></li>
                        </ul>
                        <p class="table-title needs-margin">Экипировка игрока</p>
                        <ul>
                            <li><a href="#" class="index-table-link">Оружие</a></li>
                            <li><a href="#" class="index-table-link">Броня</a></li>
                            <li><a href="#" class="index-table-link">Кольца</a></li>
                        </ul>
                    </td>
                    <td>
                        <p class="table-title">Предметы</p>
                        <ul>
                            <li><a href="#" class="index-table-link">Титанит</a></li>
                            <li><a href="#" class="index-table-link">Закалка</a></li>
                            <li><a href="#" class="index-table-link">Ключи</a></li>
                            <li><a href="#" class="index-table-link">Расходуемые предметы</a></li>
                            <li><a href="#" class="index-table-link">Души</a></li>
                            <li><a href="#" class="index-table-link">Мультиплеерные предметы</a></li>
                        </ul>
                        <p class="table-title needs-margin">Магия</p>
                        <ul>
                            <li><a href="#" class="index-table-link">Чары</a></li>
                            <li><a href="#" class="index-table-link">Пиромантия</a></li>
                            <li><a href="#" class="index-table-link">Чудеса</a></li>
                        </ul>
                    </td>
                    <td>
                        <p class="table-title">Мир</p>
                        <ul>
                            <li><a href="#" class="index-table-link">Локации</a></li>
                            <li><a href="#" class="index-table-link">Ковенанты</a></li>
                            <li><a href="pages/games/bosses/Боссы.php" class="index-table-link">Боссы</a></li>
                            <li><a href="#" class="index-table-link">Рядовые противники</a></li>
                            <li><a href="#" class="index-table-link">Фантомы</a></li>
                            <li><a href="#" class="index-table-link">Торговцы</a></li>
                        </ul>
                        <p class="table-title needs-margin">Другое</p>
                        <ul>
                            <li><a href="#" class="index-table-link">Сетевая игра</a></li>
                            <li><a href="#" class="index-table-link">Механика игры</a></li>
                            <li><a href="#" class="index-table-link">Вырезанный контент</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </main>
    <?php
        require("footer.php");
    ?>