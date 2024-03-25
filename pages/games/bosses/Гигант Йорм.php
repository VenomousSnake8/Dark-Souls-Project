<?php
    session_start();
    $title = "Гигант Йорм";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Гигант Йорм</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Гигант Йорм</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант Йорм.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Осквернённая столица.php">Осквернённая столица</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Душа гиганта Йорма</a><br><a href="#">Пепел повелителя</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 27822<br>NG+ - 41149<br>NG+2 - 45264<br>NG+3 - 47322<br>NG+4 - 49379<br>NG+5 - 53494<br>NG+6 - 55552<br>NG+7 - 57609</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 36000<br>NG+ - 108000<br>NG+2 - 118800<br>NG+3 - 121500<br>NG+4 - 129600<br>NG+5 - 132300<br>NG+6 - 135000<br>NG+7 - 137700</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Гигант Йорм</b> (англ. <i>Yhorm the Giant</i>) &mdash; <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>. Один из пяти <a href="#">Повелителей Пепла</a>.</p>
            <table class="ingame-desc">
                <tr>
                    <td class="game-info">Игровое описание:</td>
                </tr>
                <tr>
                    <td style="padding-right: 10px;"><i><p>Правитель осквернённой столицы и один из Повелителей пепла, гигант, когда-то принесший себя в жертву ради продления жизни Первого пламени и снова занявший свой трон после этого. Йорм — восставший из пепла, чудовищный противник, ожидающий вас в своём чертоге, восседая на каменном троне.</p></i></td>
                </tr>
            </table>
            <h2>История</h2>
            <p>Йорм — потомок древнего завоевателя, который воевал с государством людей давным-давно, и потомки этих людей попросили Йорма стать их лидером, их тяжёлым мечом и прочным щитом. Будучи повелителем, Йорм рисковал всем и бесстрашно сражался в авангарде. Но, потеряв того, кого он очень сильно хотел защитить, он отказался пользоваться <a href="#">своим щитом</a>, при этом изменив рукоять <a href="#">своего мачете</a> для двуручного хвата — это сделало его атаки поистине сокрушительными и яростными.</p>
            <p><a href="../locations/Осквернённая столица.php">Родина</a> Йорма оказалась под вопросом существования, когда появилось Осквернённое пламя, и, чтобы спасти свой дом, он стал <a href="#">Повелителем Пепла</a>. Он не питал иллюзий и знал, что те, кто зовут его повелителем, лицемерят.</p>
            <p>У Йорма было два <a href="#">могучих клинка</a>, один он отдал своим людям, которые сомневались в нём, а другой — <a href="#">дорогому другу</a>. Этот друг дал клятву убить Йорма, если Йорм откажется от своего долга, будучи Повелителем Пепла.</p>
            <h2>Местонахождение</h2>
            <p>Находится в локации <a href="../locations/Осквернённая столица.php">Осквернённая столица</a>, в большом тронном зале, расположенном между двумя комнатами сокровищницы.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Ноги</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Туловище</div>
                <div class="table-switch-items-category unselected-cat" id="cat3">Руки</div>
                <div class="table-switch-items-category unselected-cat" id="cat4">Голова</div>
            </div>
            <table class="resistance" id="cat1-table">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>62%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>55.2%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>60%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Нет</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>43%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>32.8%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>40%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Нет</td>
                </tr>
            </table>
            <table class="resistance" id="cat3-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-12%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Нет</td>
                </tr>
            </table>
            <table class="resistance" id="cat4-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>-52%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-79.2%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>-60%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Нет</td>
                </tr>
            </table>
            <h2>Атаки</h2>
            <h3>Первая фаза</h3>
            <ul>
                <li><b>Комбо</b>. Делает от 1 до 3 размашистых ударов перед собой.</li>
                <li><b>Топот</b>. Топает ногой, опрокидывая игрока, если стоять прямо под ним.</li>
                <li><b>Удар с разворота</b>. Если стоять сзади, бьёт по диагонали, разворачиваясь к игроку.</li>
                <li><b>Вертикальный удар</b>. Обычный удар сверху вниз.</li>
                <li><b>Удар с двух рук</b>. Хватает мачете двумя руками и бьёт под себя. Самый удачный момент, чтобы атаковать его голову.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <p>Атаки первой фазы сохраняются, добавляется одна новая.</p>
            <ul>
                <li>Все атаки теперь наносят наносят огненный урон. Сам босс тоже загорается.</li>
                <li>Скорость атак сильно возрастает.</li>
                <li><b>Рывок</b>. Делает быстрый рывок к игроку и обрушивается на того ударом кулака.</li>
                <li><b>Комбо</b> теперь может дополниться двумя ударами мачете, во время которых босс хватает оружие двумя руками и немного продвигается вперёд.</li>
            </ul>
            <h2>Тактика</h2>
            <ul>
                <li>У босса очень большая сопротивляемость к любым эффектам. А также очень большая защита от всех типов магии и особенно от физического урона; больше всего у ног, но голова и руки имеют заметно меньшую защиту.</li>
                <li>Самый простой способ убийства — с помощью <a href="#">Повелителя бурь</a>, который находится там же, около трона. После некоторого удержания навыка оружия можно выпустить волну, которая наносит огромный урон Йорму и сбивает его с ног. Но навык заряжается очень долго, а игрок в это время уязвим, так что можно не успеть зарядить навык в перерывах между атаками. Однако, зарядив навык, можно будет отпустить клавиши, заряд останется и можно будет сразу использовать его в любой удобный момент. Самая удобная тактика - заряжать атаку у босса под ногами, а затем использовать навык, находясь у него за спиной.</li>
                <li>Если выполнять сюжетную линию <a href="#">Сигварда</a>, то он появится во время боя с гигантом. У Сигварда есть свой повелитель бурь, из-за чего он может самостоятельно убить гиганта, вам нужно будет только отвлекать внимание.</li>
                <li>При достижении примерно 50% здоровья начинается вторая фаза. Теперь атаки босса имеют дополнительный огненный урон, а также у него появляется несколько новых приёмов. Замечен любопытный баг (или же задумка разработчиков?): если убивать босса при помощи Повелителя бурь, то есть вероятность его перехода во вторую стадию сразу же после первого попадания навыком меча, а не после потери примерно половины здоровья, как это обычно бывает.</li>
                <li>Несколько <a href="#">Больших громовых копий</a> или 2-3 <a href="#">Копья души</a>, пущенных в голову Йорма, свалят его с ног и откроют для проведения рипоста.</li>
                <li>Несколько стрел из любого большого лука, пущенных в голову босса, также свалят его с ног, открыв для проведения рипоста. Лучше всего подойдёт <a href="#">большой лук драконоборца</a> или <a href="#">милвудский лук</a>.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>Если выполнять линейку квестов <a href="#">Сигварда</a>, то в конце он сможет прийти на помощь к вам, чтобы одолеть гиганта. Знак призыва искать не нужно, после кат-сцены рыцарь присоединится сам. Тем не менее, если Сигвард погибнет, не победив гиганта, то он больше не придёт на битву — <a href="#">Повелитель Бурь</a> и его <a href="#">щит</a> будут лежать на входе на арену, а после перезагрузки локации — там же будет лежать его <a href="#">сет</a>.</li>
                <li>Описание Повелителя Бурь, реплика Сигварда и наличие у него второго такого же меча говорит о том, что они были друзьями.</li>
                <li>Йорм имеет самое большое количество единиц здоровья и является самым живучим боссом в игре.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_Концепт_Арт.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант_Йорм_3.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Go8MnJZulFw?si=GNeHIeK4BEdrrTl6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/four-items-char-table-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>