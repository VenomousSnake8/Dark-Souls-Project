<?php
    session_start();
    $title = "Лотрик, младший принц и Лориан, старший принц";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Лотрик, младший принц и Лориан, старший принц</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Лотрик, младший<br>принц и Лориан,<br>старший принц</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик и Лориан.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Великий архив</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Пепел повелителя</a><br><a href="#">Душа принцев-близнецов</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Лориан</b><br><b>Первая фаза:</b><br>NG - 4294<br>NG+ - 4328<br>NG+2 - 4761<br>NG+3 - 4978<br>NG+4 - 5194<br>NG+5 - 5627<br>NG+6 - 5843<br>NG+7 - 6060<br><b>Вторая фаза:</b><br>NG - 3436<br>NG+ - 3463<br>NG+2 - 3810<br>NG+3 - 3983<br>NG+4 - 4156<br>NG+5 - 4503<br>NG+6 - 4676<br>NG+7 - 4849<br><b>Лотрик</b><br>NG - 5799<br>NG+ - 5845<br>NG+2 - 6430<br>NG+3 - 6722<br>NG+4 - 7014<br>NG+5 - 7599<br>NG+6 - 7891<br>NG+7 - 8183</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 85000<br>NG+ - 170000<br>NG+2 - 187000<br>NG+3 - 191250<br>NG+4 - 204000<br>NG+5 - 208250<br>NG+6 - 212500<br>NG+7 - 216750</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Лотрик, младший принц и Лориан, старший принц</b> (англ. <i>Lothric, Younger Prince, Lorian, Elder Prince</i>) &mdash; <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>. Один из пяти <a href="#">Повелителей Пепла</a>.</p>
            <h2>Местонахождение</h2>
            <p>Находится в самом конце локации <a href="#">Великий архив</a> в отдельно расположенном высоком здании, похожем на храм. Подъём к нему перегорожен деревянными щитами и охраняется <a href="#">полыми солдатами</a> и усиленными <a href="#">рыцарями Лотрика</a>.</p>
            <p>Недалеко от входа в храм находится доступный для активации срез в виде лифта, ведущего в здание рядом с мостом, на котором игрок сражался с <a href="Доспехи драконоборца.php">Доспехами драконоборца</a>.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Лориан</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Лотрик</div>
            </div>
            <table class="resistance" id="cat1-table">
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
                    <td>2%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-20%</td>
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
                    <td>Да</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>47%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>2%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>4%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>73%</td>
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
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да</td>
                </tr>
            </table>
            <h2>Атаки</h2>
            <h3>Первая фаза</h3>
            <ul>
                <li><b>Телепортация</b>. Обычно начинает бой с этой атаки. Лориан телепортируется за спину игрока. После этого босс может использовать следующие атаки. Все они могут быть использованы и без телепортации (кроме последней):
                    <ul type="disc">
                        <li>Два быстрых размашистых удара. После этой атаки может телепортироваться вновь и использовать уже другую атаку. Иногда, если стоять слишком близко, может продолжиться вертикальным ударом.</li>
                        <li>Выпад.</li>
                        <li>Мощный вертикальный удар, во время которого Лориан ненадолго встаёт в полный рост.</li>
                        <li>Падение сверху на игрока.</li>
                        <li>Обычный вертикальный удар. Иногда продолжается взмахом справа-налево (относительно вас).</li>
                        <li><b>Заряд магии</b>. Наиболее опасная атака. Принц телепортируется подальше от игрока и поднимает меч вверх, заряжая его, а затем бьёт по земле, вызывая длинную полосу магии. Атака может убить вас на месте. В отличие от предыдущих, перед этой атакой старший принц абсолютно всегда использует телепортацию.</li>
                        <li>Также учтите, что иногда босс может просто телепортироваться подальше от вас, но никакой атаки после этого не последует и он просто продолжит идти в вашу сторону.</li>
                    </ul>
                </li>
                <li><b>Удар с разбега</b>. Босс быстро ползёт к игроку и наносит вертикальный удар. Часто используется, если вы пытаетесь выпить эстус, находясь недалеко от босса.</li>
                <li><b>Подбрасывание</b>. Босс отводит меч в сторону, а затем резко бьёт снизу вверх, вызывая волну огня и подбрасывая игрока, если тот попал под меч.</li>
                <li><b>Удар с разворота</b>. Бьёт по диагонали, если слишком долго маячить у босса за спиной.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <p>Атаки первой фазы сохраняются, но с некоторыми изменениями, а также добавляется пара новых:</p>
            <ul>
                <li><a href="#"><b>Копьё души</b></a>. Младший принц стреляет в игрока одноимённым заклинанием. Также атака <b>Заряд магии</b> теперь может сопровождаться этой атакой.</li>
                <li><b>Град</b>. Лотрик вызывает огромное количество маленьких магических снарядов. Старший же принц в это время телепортируется к игроку и атакует его. Очень опасная атака, полностью избежать которой сложно.</li>
                <li><b>Воскрешение</b>. Если Лориан был убит, а Лотрик при этом выжил, то маг начнёт воскрешать своего товарища, попутно кастуя против игрока <a href="#">Гнев богов</a>. Сам принц в это время уязвим, поэтому, если у него осталось мало здоровья — смело добивайте его. Да и в целом эта атака — отличная возможность нанести младшему принцу урон. Лориан восстаёт с неполным здоровьем (около 2/3).</li>
            </ul>
            <h2>Тактика</h2>
            <h3>Общая тактика</h3>
            <ul>
                <li>Лориан очень уязвим к молниям, поэтому крайне легко убивается <a href="#">Копьём Солнца</a> на <a href="#">NG+</a>. Получает нормальный урон от огня и магии. Сопротивление к тьме очень высокое — босс получает только 30% урона.</li>
                <li>Лотрик более уязвим к физическому урону.</li>
                <li>Лотрик и Лориан имеют среднюю защиту от <a href="#">кровотечения</a>, но Лориан уязвим к <a href="#">обморожению</a>, в отличие от Лотрика, который имеет среднюю защиту от этого эффекта.</li>
                <li>По положению камеры довольно часто можно определить поведение босса после телепортации: если камера изменила направление, значит он появляется рядом и собирается нанести удар; если же камера потеряла его из фокуса, то скорее всего он переместился куда подальше и собирается провести дальнюю атаку, и в этом случае у вас есть пара секунд, чтобы найти его взглядом и подготовиться к уклонению.</li>
                <li>Нужно следить за направлением размашистых ударов и уклоняться перекатами в ту сторону, откуда начинается замах. Босс значительно поворачивает корпус вслед за своим ударом, открывая при этом спину. После серии взмахов вы окажетесь в выгодной позиции, чтобы сразу же нанести удар-другой по магу на спине (актуально для 2 фазы).</li>
                <li>Лориана можно <a href="#">парировать</a>, но нельзя нанести после этого критический удар ("рипост"), в то же время такой удар можно нанести, если сбить стабильность боссу ("пойз") — он будет находиться в той же анимации, что и после удачного парирования.</li>
            </ul>
            <h3>Первая фаза</h3>
            <p>Бой начинается с быстрой телепортации Лориана к игроку, грозящей достаточно существенным уроном: во избежание этого достаточно подождать, не отходя от тумана, при этом босс появится в центре арены. Далее Лориан будет орудовать своим мечом, постоянно телепортируясь. Для блокировки ударов потребуется много выносливости, поэтому лучше перекатываться. Обычно он делает серию из двух-трёх размашистых ударов. Имейте также в виду, что Лориан довольно часто промахивается со стороны руки с мечом, если стоять в упор/кружиться вокруг него по часовой стрелке. Иногда может телепортироваться и провести заряженную атаку, которая пустит по полу горизонтальный столб огня. Время заряда атаки довольно долгое, поэтому можно успеть подбежать к нему и провести пару ударов. Заряженная атака очень опасна, поскольку может убить главного героя с одного удара. Во время подготовки этой атаки босс поднимает меч вверх и опускает его с задержкой, при этом меч начинает светиться белым светом. Также опасна атака после телепортации, когда Лориан появляется в воздухе и проводит атаку в падении. Может прыгнуть на игрока, урон от такой атаки существенен.</p>
            <h3>Вторая фаза</h3>
            <p>После поражения Лориана ему на выручку придёт его брат Лотрик, владеющий магией.</p>
            <ul>
                <li>Всего Лотрик имеет две атаки: заклинание, напоминающее видоизменённое <a href="#">Кристаллическое копьё души</a> (тип урона неизвестен) и дождь из магических самонаводящихся зарядов. Третья атака же произносится рядом с павшим старшим братом, нанося урон игроку, если он находится близко. Лучше всего в этой фазе атаковать босса со спины, так как при этом будет проходить урон по обоим братьям. Что интересно, технически Лориан с любого ракурса (кроме как со спины) является своеобразным «щитом» для Лотрика, из-за чего оружия, способные частично обходить щиты (например, <a href="#">шотел</a> или его <a href="#">картусская версия</a>, а также <a href="#">меч-полумесяц</a>), при атаке ими Лориана даже в лоб будут также наносить урон и Лотрику (хоть не очень большой). Удобно вести бой в закутках, находящихся по бокам от ложа, места там мало, и преимущество, которое даёт боссу телепортация, сводится на нет. После смерти младшего старший также погибнет.</li>
                <li>Если во второй фазе убить Лориана, то Лотрик его снова воскресит, но у Лориана восстановится 2/3 здоровья. Это удачный момент для нанесения серии ударов по Лотрику. Главное — вовремя отойти. Воскрешение сопровождается кастом <a href="#">Гнева богов</a>.</li>
                <li>В этой фазе Лотрик сразу после проведения вертикальной Магической атаки Лорианом атакует магической атакой, поэтому не стоит лечиться сразу после ухода от атаки Лориана.</li>
                <li>Главная цель — убить Лотрика. Если его убить, то Лориан тоже умрет.</li>
            </ul>
            <h2>Фантомы</h2>
            <p>На битву с боссом можно призвать фантомов:</p>
            <ul>
                <li><a href="#">Сиррис из Бессолнечных земель</a> (после присяги)</li>
                <li><a href="#">Орбек из Винхейма</a> (после того, как он покинет <a href="#">Храм огня</a>, при условии, что вы купили у него все заклинания и прослушали монолог о том, что он — убийца)</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>После победы над боссом <a href="#">сет Лориана</a> можно будет купить у <a href="#">служанки при храме</a>, тогда как <a href="#">сет Лотрика</a> можно найти ранее в <a href="#">Замке Лотрика</a>.</li>
                <li>Меч Лориана стал чёрным и был навсегда зачарован огнём после убийства <a href="Демон-принц.php">Демона-принца</a> с помощью этого меча. Меч Лотрика же никогда не был использован по назначению.</li>
                <li>Единственный из <a href="#">Повелителей Пепла</a>, который не возжёг угасающее Первое Пламя, а наоборот наблюдал за его угасанием.</li>
                <li>Скорее всего, Лориан телепортируется и использует заряженную атаку с белым светом благодаря Лотрику, который помогает своей магией сидя на пьедестале, а потом на плече.</li>
                <li>При любом варианте посещения локации, Лотрик — последний Повелитель Пепла, с которым столкнётся игрок. До победы над остальными ни к Лотрику, ни просто внутрь Архивов честным путём не попасть.</li>
                <li>Раньше принцы не были Повелителями Пепла, что логично с учётом того, что они отказались возжигать пламя и вообще никак не взаимодействовали с другими Повелителями Пепла.</li>
                <li>Возможно, принцы имели ещё и третью фазу, но она упоминается лишь в концепт-артах.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_Концепт_Арт.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_3.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_4.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_4.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_5.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_5.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_6.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик_и_Лориан_6.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rk6mzf240Ew?si=6Nf_6tvcR8-7Kk7z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/two-items-char-table-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>