<?php
    session_start();
    $title = "Хранители Бездны";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Хранители Бездны</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Хранители Бездны</th>
                    </tr>
                    <tr>
                        <td style="border: 0;">
                            <div class="table-switch-items" style="width: 90%; margin: 0 auto; margin-bottom: 15px;">
                                <div class="table-switch-items-category selected-cat" id="phase1">Первая фаза</div>
                                <div class="table-switch-items-category unselected-cat" id="phase2">Вторая фаза</div>
                            </div>
                            <img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители Бездны (1 фаза).png" id="phase1img" style="width: 300px;">
                            <img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители Бездны (2 фаза).png" id="phase2img" style="width: 300px; display: none;">
                        </td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Цитадель Фаррона.php">Цитадель Фаррона</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Пепел повелителя</a><br><a href="#">Душа волчьей крови</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Первая фаза:</b><br>NG - 1548<br>NG+ - 3250<br>NG+2 - 3575<br>NG+3 - 3738<br>NG+4 - 3901<br>NG+5 - 4226<br>NG+6 - 4388<br>NG+7 - 4511<br><b>Вторая фаза:</b><br>NG - 1548<br>NG+ - 3250<br>NG+2 - 3575<br>NG+3 - 3738<br>NG+4 - 3901<br>NG+5 - 4226<br>NG+6 - 4388<br>NG+7 - 4511</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 18000<br>NG+ - 72000<br>NG+2 - 79200<br>NG+3 - 81000<br>NG+4 - 86400<br>NG+5 - 88200<br>NG+6 - 90000<br>NG+7 - 91800</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Хранители Бездны</b> (англ. <i>Abyss Watchers</i>) &mdash; <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>. Один из пяти <a href="#">Повелителей Пепла</a>.</p>
            <table class="ingame-desc">
                <tr>
                    <td class="game-info">Игровое описание:</td>
                </tr>
                <tr>
                    <td><i><p>Эти воины нежити поклялись вкусить волчью кровь. Они ищут следы Бездны, постоянно сражаясь с её порождениями.</p></i></td>
                </tr>
            </table>
            <h2>История</h2>
            <p>Эти воители поклялись вкусить волчью кровь и искать следы Бездны везде, постоянно сражаясь с её порождениями. Легион был группой нежити и последователями <b>Арториаса Путника Бездны</b>. С волчьей кровью и наследием несгибаемой воли — они были готовы уничтожать целые королевства, лишь при малейших признаках заражения Бездной.</p>
            <p>Известно также то, что легион заручился поддержкой одного из <a href="Знаток кристальных чар.php">Знатоков кристальных чар</a>. Примкнувший к легиону близнец создал магию, в сущности которой лежала скорость, что полностью отражало тактику легиона, основывающуюся на скорости, а не на силе.</p>
            <p>Присягнув на верность душе Волчьей крови, Хранители Бездны стали Повелителями Пепла, но вместе с тем сила души Волчьей крови иссякла. Неизвестно, по какой причине они заняли трон Повелителей Пепла; возможно, для того, чтобы исполнить свой долг и продлить Эру Огня, дабы не дать Бездне распространиться. В настоящее время Хранители Бездны — лишь жалкое подобие себя былых, и похоже, что они подверглись скверне Бездны, как и остальные обитатели <a href="../locations/Цитадель Фаррона.php">цитадели Фаррона</a>.</p>
            <p>Они будут вечно убивать друг друга, так как когда-то поклялись уничтожать проявления Бездны во чтобы то ни стало в любых её проявлениях.</p>
            <h2>Местонахождение</h2>
            <p>Босс находится в локации <a href="../locations/Цитадель Фаррона.php">Цитадель Фаррона</a>. Для того, чтобы добраться до него, нужно потушить три огня, находящихся на разных концах локации. После этого откроется огромная каменная дверь, находящаяся напротив <a href="#">костра</a> <b>Руины цитадели</b>. Следуйте по дороге вверх. В конце дороги (в боковом проходе справа вы также найдёте костёр <b>Граница Цитадели Фаррона</b>, где можно отдохнуть и удобно начинать) вы найдёте двух <a href="#">тёмных духов</a> и группу <a href="#">мозгляков</a>, за которыми находится арена босса.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Первая фаза (все 3 хранителя)</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Вторая фаза</div>
            </div>
            <table class="resistance" id="cat1-table">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>8%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-12%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>35%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (имеют сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвимы)</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none;">
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
                    <td>8%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-12%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>35%</td>
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
                    <td>Нет</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <h2>Описание</h2>
            <p>Изначально на арене находится один легионер, но затем поочерёдно появятся ещё двое. Все противники имеют равный урон. Боссом является только первый из трёх, остальные два имеют меньший запас здоровья и примерно через минуту воскресают после смерти на том же месте, что нужно учитывать при позиционировании. Третий легионер, отличающийся красными глазами, враждебен как к протагонисту, так и к боссу.</p>
            <p>При убийстве босса в первой фазе, все остальные легионеры мгновенно погибнут, и на арене останется только один из них. Босс получает дополнительный огненный урон и несколько новых атак, включая рывок и серию ударов.</p>
            <h2>Атаки</h2>
            <h3>Первая фаза</h3>
            <ul>
                <li><b>Скольжение</b>. Часто начинает бой с этой атаки. Заносит меч вбок, затем делает рывок к игроку, по завершении которого наносит круговую атаку. После атаки босс разворачивается к игроку спиной и ему можно нанести удар в спину.</li>
                <li><b>Выпад</b>. Как и при <b>скольжении</b>, делает рывок к игроку, но вместо круговой атаки идёт колющая.</li>
                <li><b>Наскок</b>. Прыгает на игрока, вонзая меч в землю.</li>
                <li><b>Комбо</b>. Различные комбинации ударов меча.</li>
                <li><b>Атака кинжалом</b>. Делает два быстрых удара своим кинжалом. Наносят довольно мало урона.</li>
                <li><b>Альтернативное комбо</b>. Делает колющий удар мечом, затем кинжалом. Далее наносит размашистый удар мечом и заканчивает комбо двумя круговыми атаками.</li>
                <li><b>Взмах</b>. Наносит удар мечом снизу вверх.</li>
                <li><b>Вертикальный удар</b>. Обычный удар сверху вниз. Часто используется последним в комбо.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <p>Все атаки первой фазы сохраняются, но с некоторыми изменениями:</p>
            <ul>
                <li>Теперь после <b>скольжения</b> следуют ещё две круговые атаки.</li>
                <li>Также теперь в конце серии босс может подпрыгнуть, прокружиться в воздухе и, ударив по земле, вызвать огненный след в Вашу сторону. Очень легко уклониться перекатом прямо за спину Хранителя.</li>
                <li>Радиус атак босса сильно возрастает.</li>
                <li>Появляется атака, похожая на <b>скольжение</b>, но здесь босс будет вести меч за собой по земле, после чего на этом месте образуется пламя.</li>
                <li>Большинство серий теперь заканчиваются вертикальным ударом с прыжком или без.</li>
                <li>К каждой серии босс теперь добавляет по одной-две атаки.</li>
                <li>После <b>взмаха</b> в сторону игрока теперь идёт длинная полоса огня.</li>
            </ul>
            <h2>Тактика</h2>
            <h3>Общее</h3>
            <ul>
                <li>Босс наносит физический и (во второй фазе) огненный урон. При игре со щитом к этому этапу первого прохождения можно получить два подходящих: <a href="#">щит чёрного рыцаря</a> и <a href="#">драконий гербовый щит</a>.</li>
                <li>Босс имеет крайне низкий <a href="#">баланс</a> и плохие фреймы гиперброни (если применить эти понятия к боссу), что делает его уязвимым к прерыванию атак.</li>
                <li>В целом атаки босса предсказуемы, и, с учётом описанной выше слабости, может иметь смысл переключиться на более длинное, тяжёлое и мощное оружие.</li>
                <li>Босса можно <a href="#">парировать</a>, провести критическую атаку ("рипост") или нанести удар в спину в любой из двух фаз. При парировании лучше отражать первый удар серии, так как каждая атака босса поднимает в воздух внушительный столб пыли, в котором может быть не видно его последующих атак.</li>
                <li>Босс крайне уязвим к урону от молний и огня, имеет иммунитет к <a href="#">яду и токсину</a>, высокую защиту от <a href="#">кровотечения</a> и тьмы и уязвим к <a href="#">обморожению</a>.</li>
            </ul>
            <h3>Первая фаза</h3>
            <p>Учитывая, что на поле боя кроме босса появятся ещё двое легионеров, можно воспользоваться несколькими путями:</p>
            <ul>
                <li>Переждать, пока легионеры перебьют друг друга, но исход их противостояния может быть не в пользу игрока и красноглазого легионера, к тому же они могут и снова переключиться на игрока.</li>
                <li>Уничтожать отбившегося от группы противника, будь то босс или второй легионер, облегчая взаимное уничтожение оставшихся.</li>
                <li>Подобраться к занятому боем боссу сзади и нанести удар в спину, но есть риск попасть под чьи-либо размашистые атаки.</li>
                <li>Напасть на любого противника и даже на всех сразу, не слишком задумываясь о стратегии. Из ситуации, когда Легион дерётся друг с другом, игрок так или иначе выйдет в выигрыше.</li>
                <li>Вне зависимости от стратегии, стоит дождаться, пока легионеры переключатся друг на друга, поскольку это не всегда происходит сразу.</li>
                <li>От всех атак легионеров можно легко уклониться перекатом в сторону от противника.</li>
                <li>До появления второго легионера сделать удар в спину первому и ждать появления красноглазого, элементарно катаясь от противников. Затем нужно отвлечь босса на себя и до смерти красноглазого попытаться нанести максимальное количество ударов. Затем, если третий легионер умер (что наиболее вероятно), опять кататься от противника до его появления. Если же враждебный ко всем воин выжил, просто сражаться с боссом до появления второго легионера.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <ul>
                <li>Во второй фазе босс сохраняет все атаки, используемые в первой, добавляя к ним урон огнём, увеличивая радиус и добавляя один-два удара к каждой серии (и к некоторым одиночным ударам). Гораздо проще стараться уйти от босса на расстояние, выжидая его одиночных атак: выпад и рывок (см. ниже). Если всё же вы решитесь держаться вблизи, перекатываться нужно в сторону, откуда начинается замах, и помнить, что в этой фазе все серии становятся длиннее. Впрочем, тут все они заканчиваются ударом по земле (с прыжком или без), что позволяет не считать удары, а выжидать именно этой атаки.</li>
                <li>Из всех атак стоит выделить рывок, при котором босс тащит за собой меч, оставляя огненный след, после чего след взрывается. Огненный урон может легко поймать игрока после переката, поэтому следует откатываться не в сторону босса, а в сторону от шлейфа, желательно противоположную мечу (босс держит его в правой руке, оптимальный перекат — направо, глядя на босса). Если вы успешно уклонились от этой атаки, босс открыт для вашей серии.</li>
                <li>Будет полезным использовать атаки босса против него: отходить от него как можно дальше, выжидать, пока он сделает выпад или рывок и бить. После чего — перекат и снова отходить. Во избежание прерывания атаки, равно как и урона от огня при выпаде, двигаться следует по левой стороне (т.е. противоположно той руке, в которой он держит меч), изолируясь от зоны поражения меча и огненного шлейфа. Если противник успевает контратаковать, немедленно следует отойти на безопасное расстояние и ждать следующего выпада.</li>
                <li><b>Важно:</b> размашистая атака с разбега в этой фазе продолжается ещё двумя ударами, наносящими приличный урон. Эти удары крайне тяжело сбить, поэтому, если выбрали тактику отхода, лучше атаковать <u>только</u> после двух указанных выше атак, или быть готовым к дальнейшему уклонению.</li>
                <li>Ещё одним вариантом убийства босса является методичное и немного долгое, но безопасное ожидание. От всех атак легионера можно уйти кувырком, как и прыгнуть ему за спину. Надо ждать удобного момента, затем перекатиться немного правее босса и оказаться у него за спиной. Затем нужно выбрать количество ударов, которое вы будете наносить, и столько же раз бить Хранителя. Для сравнения: <a href="#">меч убийцы нежити</a> успевает нанести 2 удара.</li>
            </ul>
            <h2>Фантомы</h2>
            <p>На бой можно вызвать одного из четырёх фантомов (одновременно с Хейзел можно вызвать ещё одного):</p>
            <ul>
                <li><a href="#">Чернорук Готтард</a> — знак на тропе к боссу. При призыве даёт жест <a href="#"><i>Клянусь своим мечом</i></a>.</li>
                <li><a href="#">Сиррис из Бессолнечных земель</a> — знак слева от входа к боссу.</li>
                <li><a href="#">Бледная тень из Лондора</a> — знак появится возле <a href="#">костра</a> <b>Граница Цитадели Фаррона</b>, если в <a href="../locations/Храм огня.php">Храм Огня</a> прибыла <a href="#">Юрия из Лондора</a> и игрок не сбросил <a href="#">Тёмную Метку</a>. Также обучает жесту <a href="#"><i>Дуэльный поклон</i></a>.</li>
                <li><a href="#">Хейзел Жёлтый Палец</a> — знак появится около башни со <a href="#">слизняками</a>, если победить Хейзел дважды и погасить все огни цитадели (при условии нахождения в ковенанте <a href="#">Пальцы Розарии</a>). При призыве даёт жест <a href="#"><i>Низкий поклон</i></a>.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>После победы над боссом у <a href="#">служанки при храме</a> появится в продаже <a href="#">Сет Легиона нежити</a>.</li>
                <li>В кат-сцене босс использует жест <a href="#"><i>Этикет легиона</i></a>.</li>
                <li><a href="#">Хоквуд</a> — один из первых NPC, которых мы встречаем в игре — в прошлом был одним из Хранителей, но после ушёл от них. Если поговорить с ним после победы над Хранителями, даст в награду <a href="#">Кольцо Фаррона</a>.</li>
                <li>На арене боя с боссом лежит ровно сто тел хранителей (исключая восставших).</li>
                <li>Перед битвой с Хранителями Бездны можно услышать звон мечей через двери на арену.</li>
                <li>Раньше против игрока должен был сражаться один Хранитель Бездны, во второй фазе к которому приходил бы волк, который должен был иметь в зубах меч.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_Концепт_Арт.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_3.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_4.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители_Бездны_4.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vv_qryPwmig?si=kOkVMOM4EpZZpN82" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/two-items-char-table-switch.js"></script>
    <script src="../../../script/boss-images-2-phases.js"></script>
    <?php
        require("../../../footer.php");
    ?>