<?php
    session_start();
    $title = "Древняя виверна";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Древняя виверна</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Древняя виверна</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя виверна.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Пик Древних Драконов.php">Пик Древних Драконов</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><b>Босс:</b><br><a href="#">Камень Драконьей Головы</a><br><b>Мини-босс:</b><br><a href="#">Обломок титанита</a> (x6)<br><a href="#">Мерцающий титанит</a> (x3)<br><a href="#">Титанитовая чешуя</a> (x3)</td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 7873<br>NG+ - 7881<br>NG+2 - 8669<br>NG+3 - 9063<br>NG+4 - 9457<br>NG+5 - 10245<br>NG+6 - 10639<br>NG+7 - 11034</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Босс:</b><br>NG - 70000<br>NG+ - 140000<br>NG+2 - 154000<br>NG+3 - 157500<br>NG+4 - 168000<br>NG+5 - 171500<br>NG+6 - 175000<br>NG+7 - 178500<br><b>Мини-босс:</b><br>NG - 36000</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Древняя виверна</b> (англ. <i>Ancient Wyvern</i>) &mdash; <a href="Боссы.php">босс</a> и мини-босс в игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <h2>Местонахождение</h2>
            <ul>
                <li><a href="../locations/Пик Древних Драконов.php">Пик Древних Драконов</a>, после использования механизма открытия решётки. Босс появляется не сразу, изначально находится в воздухе и прилетает после того, как игрок пройдёт определённое расстояние до лестницы.</li>
                <li>Продвигаясь дальше по локации, встретится виверна мини-босс, которая попытается преградить ваш путь к <a href="#">костру</a> <b>Большая Колокольня</b>.</li>
            </ul>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Ноги</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Тело и голова</div>
                <div class="table-switch-items-category unselected-cat" id="cat3">Мини-босс</div>
            </div>
            <table class="resistance" id="cat1-table">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>90.8%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>96%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>81%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>89.6%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвима)</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>54%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>80%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>48%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвима)</td>
                </tr>
            </table>
            <table class="resistance" id="cat3-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>6%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-33%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>3%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвима)</td>
                </tr>
            </table>
            <h2>Атаки</h2>
            <ul>
                <li><b>Дыхание</b> — дышит огнём прямо на игрока.</li>
                <li><b>Дыхание сбоку</b> — дышит огнём справа-налево (относительно вас).</li>
                <li><b>Дыхание под себя</b> — дышит огнём под себя, если стоять под ней.</li>
                <li><b>Удар хвостом</b> — если стоять сзади, бьёт своим огромным хвостом.</li>
                <li><b>Топот</b> — топает лапой, если стоять под ней.</li>
                <li><b>Укус</b> — пытается укусить игрока сбоку.</li>
            </ul>
            <h2>Тактика</h2>
            <p>Убить виверну можно несколькими способами:</p>
            <ul>
                <li>Долго и упорно бить боссу в шею, по хвосту или лапам, находясь под ним, уворачиваясь от удара задних лап и огненных шаров (когда босс взлетает), посадка <a href="#">парируется</a>. Для этого заманите босса вниз по лестнице, спрятавшись за статуей, что рядом со входом на арену.</li>
                <li>Убить с одного удара. Сразу после входа на арену бегите в левое ответвление. На пути встречаются рядовые <a href="#">змеелюди</a>, а также крупные ящеры, которых нужно просто пробежать или использовать заклинание <a href="#">Невидимое тело</a>. В конце пути игрока ожидает выступ, с которого отчётливо видно голову босса. Выждав момент и прицелившись (нужный момент — когда виверна ничего не предпринимает), следует выполнить удар в падении. При этом виверна становится статична, когда вы уже на уступе и готовы прыгать — не дышит и не дёргается. При этом даже с зажатой клавишей движения вперёд вы с очень высокой вероятностью просто плюхнетесь рядом с её шеей оземь.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>Мини-босс исчезнет, если пробить в колокол перед королём.</li>
                <li>После её убийства не появляется названный в честь босса <a href="#">костёр</a>.</li>
                <li>Схожа с <a href="#">вивернами</a> в <a href="../locations/Замок Лотрика.php">замке Лотрика</a>, но в отличие от них является живым созданием, а не големом.</li>
                <li>Как босс, виверна устойчива к урону, в то время как мини-босс пробивается большинством видов урона.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_мини_босс.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_мини_босс.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя_виверна_Концепт_Арт.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GlOjMntc7kI?si=jnOHgYBoxvZV8TvN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/three-items-char-table-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>