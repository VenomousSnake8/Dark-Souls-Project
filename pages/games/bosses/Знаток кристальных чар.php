<?php
    session_start();
    $title = "Знаток кристальных чар";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Знаток кристальных чар</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Знаток кристальных<br>чар</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток кристальных чар.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Путь жертв.php">Путь жертв</a><br><a href="../locations/Великий архив.php">Великий архив</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td>Босс:<br><a href="#">Душа знатока кристальных чар</a><br>Мини-босс:<br><a href="#">Кристальный свиток</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Путь жертв:</b><br>NG - 2723<br>NG+ - 6413<br>NG+2 - 7054<br>NG+3 - 7375<br>NG+4 - 7696<br>NG+5 - 8337<br>NG+6 - 8658<br>NG+7 - 8978<br><b>Великий архив:</b><br>NG - 4000</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Путь жертв:</b><br>NG - 8000<br>NG+ - 40000<br>NG+2 - 44000<br>NG+3 - 45000<br>NG+4 - 48000<br>NG+5 - 49000<br>NG+6 - 50000<br>NG+7 - 51000<br><b>Великий архив:</b><br>NG - 20000</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Знаток кристальных чар</b> (англ. <i>Crystal Sage</i>) &mdash; <a href="Боссы.php">босс</a> и мини-босс в игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <table class="ingame-desc">
                <tr>
                    <td class="game-info">Игровое описание:</td>
                </tr>
                <tr>
                    <td><i><p>Давным-давно один из знатоков заключил договор с Легионами нежити и стал обучать чародеев Фаррона.</p></i></td>
                </tr>
            </table>
            <h2>Местонахождение</h2>
            <ul>
                <li><a href="../locations/Путь жертв.php">Путь жертв</a>. От второго <a href="#">костра</a> локации нужно пробежать через руины здания.</li>
                <li><a href="../locations/Великий архив.php">Великий архив</a>. В качестве мини-босса встречается в самом начале локации. После получения урона перемещается на этаж выше, а затем на мост. После убийства больше не появляется.</li>
            </ul>
            <h2>Сопротивления</h2>
            <table class="resistance">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>40%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>2%</td>
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
                    <td>Да</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (уязвим)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <h2>Атаки</h2>
            <h3>Первая фаза</h3>
            <ul>
                <li><b><a href="#">Дыхание белого дракона</a></b>. Использует магию, очень похожую на названные чары, однако она имеет намного больший радиус.</li>
                <li><b>Магический шар</b>. Знаток вызывает большой шар магии, медленно преследующий игрока. Замечен случай, когда босс вызвал сразу 3 таких шара.</li>
                <li><b><a href="#">Кристаллическое копьё души</a></b>. Использует одноимённое заклинание.</li>
                <li><b><a href="#">Град кристаллов</a></b>. Использует одноимённые чары. Маг вызывает небольшой шар высоко вверх, который затем раскалывается на несколько сгустков, летящих в игрока.</li>
                <li><b><a href="#">Кристаллические наводящиеся сгустки души</a></b>. Использует одноимённые чары. Пока сгустки активны и остался хотя бы один, босс не будет уходить от вас телепортом.</li>
                <li><b>Атака рапирой</b>. Бьёт игрока <a href="#">рапирой</a>, если тот стоит слишком близко. Может продолжиться ещё двумя взмахами рапирой. Можно <a href="#">парировать</a>, после чего нанести <a href="#">рипост</a>. Первый удар имеет довольно долгую подготовку.</li>
                <li><b>Захват</b>. Рапира мага покрывается кристаллами, после чего босс пытается пронзить игрока. Игнорирует блок, как и любой захват.</li>
                <li><b>Телепортация</b>. Телепортируется подальше от игрока.</li>
                <li><b><a href="#">Быстрый меч Фаррона</a></b>. Использует одноимённые чары, если стоять слишком близко.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <p>Атаки самого босса не меняются вообще, однако на арене появляются его копии. Также мини-босс в <a href="../locations/Великий архив.php">Великом архиве</a> не имеет этой фазы.</p>
            <p>Ключевые особенности:</p>
            <ul>
                <li>Копии имеют другой цвет атакующих заклинаний.</li>
                <li>Очень мало здоровья. Убиваются одним ударом, любым оружием.</li>
                <li>Имеют очень ограниченный, в сравнении с боссом, мувсет. Используют всего три атаки: <b>кристаллическое копьё души</b>, <b>дыхание белого дракона</b>, а также одну уникальную (о ней ниже).</li>
                <li>Атака похожа на <a href="#">Град Фаррона</a>, однако гораздо быстрее, дольше, и на большее расстояние (достают с другого конца арены).</li>
                <li>Если вы сразу найдёте босса и нанесёте ему урон, то после его отступления копии пропадут сами. Также пропадают после смерти босса.</li>
            </ul>
            <h2>Тактика</h2>
            <h3>Общее</h3>
            <ul>
                <li>Уязвим к тьме, огню, обморожению, меньше к молниям, кровотечению и яду. Имеет большую сопротивляемость к магическим атакам.</li>
                <li>Почти весь урон босса магический, и сбор сопротивления магии (<a href="#">сет Клирика</a>, <a href="#">Кольцо с магическим камнем</a>, <a href="#">Синий деревянный щит</a>) может дополнительно упростить бой.</li>
            </ul>
            <h3>Первая фаза</h3>
            <ul>
                <li>Босс — классический маг. Арсенал заклинаний стандартный для этого типа: <a href="#">копье души</a>, <a href="#">сгустки души</a>, <a href="#">град кристаллов</a>, <a href="#">дыхание белого дракона</a>, <a href="#">быстрый меч Фаррона</a> (только вблизи, но чаще использует <a href="#">рапиру</a>), а также заклинание, не имеющее аналогов: медленно летящий наводящийся кристаллический снаряд. Цвет всех заклинаний пурпурный. От всех заклинаний по отдельности несложно уклониться или спрятаться за стеной или колонной, кроме града и луча, имеющих ограниченную дистанцию.</li>
                <li>В ближнем бою босс пользуется рапирой. Её атаки можно <a href="#">парировать</a> и нанести ударом рипостом.</li>
                <li>Против босса можно применить <a href="#">ядовитые миазмы</a>. Знаток почти не двигается и не обращает внимания на облако заклинания, из-за чего оно будет наносить много урона. Однако, он всё равно перейдёт во вторую фазу, когда его здоровье опустится до определённого уровня.</li>
                <li>При получении урона босс исчезает. После небольшой паузы на арене происходит несколько кристаллических взрывов (нанесут урон игроку только если искать этого специально), после чего босс появится вновь. Босс не появится в тех местах, где были кристаллы, к тому же выберет позицию подальше от игрока, что позволяет предсказать место его выхода.</li>
                <li>При поиске места появления можно дополнительно ориентироваться на стерео-звук.</li>
                <li>Босс не исчезает, пока на нем висят сгустки души, что позволяет наносить ему намного больше урона до исчезновения, если бежать к нему после использования этого заклинания.</li>
                <li>Есть способы удержать босса от исчезновения:
                    <ul type="disc">
                        <li>Непрерывное произнесение очень быстрого заклинания (<a href="#">Священное пламя</a> — наилучший вариант, альтернатива — <a href="#">Мощный поджог</a> и другие аналоги), но требуется увеличить скорость произнесения заклинаний, например, с помощью <a href="#">Кольца мудреца</a>.</li>
                        <li>Долгая комбинация ударов очень быстрым оружием, например, с помощью <a href="#">Ножа бандита</a> или <a href="#">Ветхого клинка</a>.</li>
                    </ul>
                </li>
            </ul>
            <h3>Вторая фаза</h3>
            <ul>
                <li>После снятия примерно 50% здоровья босс временно исчезает (это может произойти сразу после предыдущего исчезновения). На арене меняется музыкальное сопровождение.</li>
                <li>Справедливо всё сказанное для первой фазы.</li>
                <li>Босс появляется с тремя копиями:
                    <ul type="disc">
                        <li>Цвет магии копий голубой, но у босса по-прежнему пурпурный.</li>
                        <li>Только босс применяет кристаллические сгустки души.</li>
                        <li>Копии исчезают вместе с боссом.</li>
                    </ul>
                </li>
                <li>Копии имеют 1 единицу здоровья, поэтому их можно легко убивать абсолютно любым уроном:
                    <ul type="disc">
                        <li>Быстрое оружие, начиная с обычного кулака.</li>
                        <li><a href="#">Метательные ножи</a>.</li>
                        <li>Хотя бы одна часть <a href="#">шипастого сета</a>.</li>
                    </ul>
                </li>
                <li>Возможно несколько стратегий:
                    <ul type="disc">
                        <li>Как можно быстрее сокращать дистанцию с боссом, заставляя копии исчезать. Риск — может понадобиться уклоняться одновременно от большого количества заклинаний, особенно если первая цель выбрана неверно.</li>
                        <li>Методично убивать копии босса в дальнем бою. Оптимальная стартовая позиция — стенка справа от входа на арену, которую стоит занимать после каждого исчезновения. Риск — пробой градом или лучом.</li>
                        <li>Подняться на пригорок в дальней части арены, откуда относительно безопасно расстреливать босса из лука. Риск минимален, но скорость убийства так же может уступать другим стратегиям.</li>
                        <li>Произвольная комбинация описанных выше техник.</li>
                    </ul>
                </li>
            </ul>
            <h3>Мини-босс</h3>
            <ul>
                <li>Находится в <a href="../locations/Великий архив.php">Великом архиве</a>, имеет те же способности, но не создаёт двойников. После получения прямого, даже незначительного, урона перемещается на верхние ярусы архива и пользуется чрезвычайно дальнобойной магией, сильно усложняя прохождение локации.</li>
                <li>Простейший способ победить — <a href="#">навозный пирог</a>/<a href="#">навозный пирог на веревке</a>, <a href="#">Отравляющий туман</a>/<a href="#">Ядовитый туман</a>, <a href="#">Леденящая хватка</a>. Следует встать за одной из стен и использовать <a href="#">пиромантию</a> сквозь неё. Всего двух пирогов хватит для отравления токсином, от которого мини-босс получит 1500 урона и не задействует перемещение, что по окончании действия позволит отравить его снова. Другие упомянутые заклинания работают схоже, но слабее.</li>
            </ul>
            <h2>Фантомы</h2>
            <ul>
                <li><a href="#">Эйгон из Карима</a> — знак призыва находится перед выходом из здания, ведущего к боссу. За третьей колонной слева. Знак призыва станет доступен после освобождения <a href="#">Ирины</a> и разговора с Эйгоном в <a href="../locations/Поселение нежити.php">Поселении нежити</a>.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>После победы над боссом можно купить его <a href="#">большую шляпу</a>.</li>
                <li>Существует баг: если воспользоваться помощью союзников-фантомов, есть вероятность, что босс при низком уровне здоровья может уйти под землю и не вернуться.</li>
                <li>Если заглянуть под шляпу знатокам, можно увидеть маску с клювом, которая напоминает аналогичные маски реально существовавших <a href="https://ru.wikipedia.org/wiki/Чумной_доктор">чумных докторов</a> (англ. <i>Plague doctor</i>).</li>
                <li>Босс вооружён <a href="#">рапирой знатока кристальных чар</a>, а мини-босс в <a href="../locations/Великий архив.php">Великом архиве</a> — <a href="#">эстоком</a>.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток_кристальных_чар_3.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/txLf7R33JF8?si=ZSNfwriKKpjwk1FS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <?php
        require("../../../footer.php");
    ?>