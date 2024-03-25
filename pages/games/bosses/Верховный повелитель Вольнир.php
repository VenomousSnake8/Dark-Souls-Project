<?php
    session_start();
    $title = "Верховный повелитель Вольнир";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Верховный повелитель Вольнир</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Верховный<br>повелитель Вольнир</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный повелитель Вольнир.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Катакомбы Картуса.php">Катакомбы Картуса</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Душа верховного повелителя Вольнира</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 7052<br>NG+ - 13010<br>NG+2 - 14312<br>NG+3 - 14962<br>NG+4 - 15613<br>NG+5 - 16914<br>NG+6 - 17564<br>NG+7 - 18215</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 22000<br>NG+ - 88000<br>NG+2 - 96800<br>NG+3 - 99000<br>NG+4 - 105600<br>NG+5 - 107800<br>NG+6 - 110000<br>NG+7 - 112200</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Верховный повелитель Вольнир</b> (англ. <i>High Lord Wolnir</i>) &mdash; <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <table class="ingame-desc">
                <tr>
                    <td class="game-info">Игровое описание:</td>
                </tr>
                <tr>
                    <td><i>
                        <p>Когда Вольнир пал в Бездну, его охватил страх перед истинной тьмой, и он впервые обратился к богам с мольбой.</p>
                        <p>Со своим священным мечом и тремя браслетами, снятыми с тел клириков, он почувствовал себя спокойнее.</p>
                    </i></td>
                </tr>
            </table>
            <h2>Местонахождение</h2>
            <p><a href="../locations/Катакомбы Картуса.php">Катакомбы Картуса</a>. Когда вы прикоснётесь к чаше, находящейся в большом зале в конце катакомб, вас перенесёт на арену с боссом, которая представляет из себя тёмный травянистый склон посреди Бездны.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Вольнир</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Призываемые скелеты</div>
            </div>
            <table class="resistance" id="cat1-table">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>24%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>28%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>40%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>70%</td>
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
                    <td>Да (имеет сопротивление)</td>
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
                    <td>0%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>40%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>42%</td>
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
            <h2>Описание</h2>
            <p>Босс — огромный скелет, лежащий в самом низу и постепенно поднимающийся вверх за вами. Сразу стоит отметить — путей влево или вправо нет, а у склона есть предел, доведёте туда босса слишком рано и сильно усложните себе бой. Поднимается он посредством длинных медленных рывков, которые он делает только тогда, когда вы отойдёте от него слишком далеко (один раз сделает это в самом начале боя, но оставит вам ещё достаточно места для исключительно вынужденных тактических отступлений).</p>
            <h2>Атаки</h2>
            <p>Один из немногих боссов, не имеющих чёткого деления на фазы.</p>
            <ul>
                <li><b>Горизонтальные и вертикальные атаки руками</b>. Чрезвычайно медленные. Слепая зона — под мышкой левее босса, но увернуться от них перекатом тоже достаточно просто.</li>
                <li><b>Дыхание тёмным туманом</b>. Босс поднимает голову и начинает изрыгать облако тёмного тумана, распространяющееся от него. Наносит огромный урон тьмой за тик на неочевидном расстоянии (может немного помочь увеличение сопротивления данной стихии). Следует при первых признаках атаки понимать, на каком расстоянии вы находитесь, потому что под руками (обеими) туман не достанет, благодаря чему во время этой атаки можно нанести серьёзный урон боссу. Если видите, что добежать до руки не успеете, нужно набрать дистанцию, в противном случае туман убьёт игрока за несколько тиков. На экстренный случай, когда подниматься уже некуда, в правом углу есть выступающий камень, за который туман достаёт не всегда.</li>
                <li>Может на некоторое время взять в правую руку <a href="#">меч</a>, при этом изменятся обычные атаки этой рукой, а также добавятся новые:
                    <ul type="disc">
                        <li><b>Гнев богов</b> (аналог навыка меча). Подготовка — вонзает меч в землю. Наносит значительный урон, но радиус поражения не слишком большой.</li>
                        <li><b>Бросок меча вперед</b> с последующим притяжением. Крайне редкая атака.</li>
                    </ul>
                </li>
                <li>Босс может призвать различные связки скелетов. Все скелеты получают урон от атак босса:
                    <ul type="disc">
                        <li>Двое обычных скелетов. Могут воскресать, что можно предотвратить освящённым оружием.</li>
                        <li>Двое <a href="#">скелетов-колёс</a>. Призываются вместе с обычными.</li>
                        <li><a href="#">Картусский мечник</a> с <a href="#">двуручным мечом</a>. Более серьёзный противник.</li>
                        <li>Два картусских мечника. Наиболее опасная ситуация.</li>
                    </ul>
                </li>
            </ul>
            <h2>Тактика</h2>
            <h3>Общее</h3>
            <ul>
                <li>Сам босс получает очень мало урона (хотя и достаточно, чтобы в редких случаях завершить этим бой), поэтому следует сосредоточить атаку на слабом месте босса — золотых браслетах на запястьях. По ним проходит нормальный урон, к тому же при уничтожении браслета наносится дополнительный единовременный урон. Урон по браслетам проходит даже при попадании по кисти или предплечью (следует проверять по объёму наносимого урона).</li>
                <li>При первой встрече босс таится в темноте, пока игрок не подойдёт достаточно близко (до трупа с <a href="#">Книгой о пиромантии хранителя могил</a>). В дальнейшем бой будет начинаться сразу, что делает первую попытку несколько проще.</li>
                <li>Босс время от времени начинает подниматься по склону, в частности если отдалиться от него слишком далеко или долго стоять под рукой (впрочем, этого можно не бояться, так как делает он так довольно редко и к концу боя продвигается едва ли до середины арены). Арена боя ограничена с боков и особенно сверху, поэтому босс может прижать игрока к верхнему краю достаточно быстро.
                    <ul type="disc">
                        <li>Уничтожение браслетов сбрасывает босса вниз по склону, что позволит продлить бой.</li>
                        <li>Уничтожение браслетов также прерывает каст тумана, как и любой другой атаки.</li>
                    </ul>
                </li>
                <li>Имеет иммунитет к кровотечению, холоду, большое сопротивление к тьме. Также имеет некоторое сопротивление к молниям. Получает нормальный урон от огня, магии и яда. Уязвим к <a href="#">святому</a> оружию.</li>
                <li>Получает увеличенный урон от оружия Легиона нежити — <a href="#">меча Фаррона</a> и <a href="#">меча волчьего рыцаря</a>, так как поглощён Бездной.</li>
            </ul>
            <h3>Стратегия</h3>
            <ul>
                <li>Ни в коем случае не следует затягивать бой:
                    <ul type="disc">
                        <li>Можно оказаться прижатым к верхнему краю.</li>
                        <li>Возрастает риск призыва сложных групп скелетов или разных групп одновременно. Стоит пробовать убить босса ещё до первого призыва.</li>
                    </ul>
                </li>
                <li>Если скелеты всё же призваны, имеет смысл сначала разобраться с ними, поскольку они столь же опасны, как и в самом Картусе. При этом:
                    <ul type="disc">
                        <li>Нельзя слишком разрывать дистанцию с боссом во избежание лишнего подъёма.</li>
                        <li>Можно использовать атаки босса против самих скелетов.</li>
                    </ul>
                </li>
                <li>Браслеты на разных руках не одинаково просто атаковать, но сложность в большой степени зависит от воли случая в каждом конкретном бою.
                    <ul type="disc">
                        <li>Браслет на правой руке легко сломать в момент распыления боссом тумана, когда он прижимает эту руку к рёбрам, не прикрывая её сразу туманом от тела. Даже в момент начала атаки можно нанести несколько полных комбинаций ударов, тем самым сломав браслет и прервав атаку туманом, что делает риск оправданным.</li>
                        <li>Не стоит ломать в этой ситуации браслет на левой руке, поскольку босс при этом может резко сместиться вперёд вместе с туманом, что может оказаться фатальным.</li>
                        <li>В остальное время браслеты левой руки очень легко доступны для атаки.</li>
                    </ul>
                </li>
                <li>Игрок с большим количеством ОЗ (&approx;900) может убить Вольнира, не покидая зону за его руками. Ходите от одной руки к другой и бейте по браслетам. Вольнир не сможет вас ударить, не сможет достать туманом и не призовёт скелетов, но есть опасность погибнуть во тьме, когда он поползёт вперёд.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>Перед боссом лежит <a href="#">Книга о пиромантии хранителя могил</a>, которую следует отдать <a href="#">Карле</a>. Можно подобрать во время битвы, в противном случае после битвы труп с этой книгой окажется возле чаши.</li>
                <li>От этой книги чуть правее его рука в темноте. На нее можно кастануть миазмы и убить босса без драки как таковой.</li>
                <li>После победы над боссом <a href="#">Служанка при храме</a> будет продавать его <a href="#">корону</a> за 15000 душ.</li>
                <li>Изначально босс должен был появиться в <a href="../locations/Осквернённая столица.php">Осквернённой столице</a>, но был заменён на <a href="Гигант Йорм.php">Йорма</a>.</li>
                <li>Если игрок умрёт на боссе, души появятся рядом с чашей.</li>
                <li>Если убить, не сбивая кольца, у босса будет другая анимация смерти.</li>
                <li>Браслеты были единственным, что удерживало Вольнира от окончательного поглощения Бездной, поэтому их уничтожение сразу заканчивает бой.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_Концепт_Арт.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный_повелитель_Вольнир_2.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/pCvbs3Xj8Ko?si=aicqcw5mEd9VBHlw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/two-items-char-table-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>