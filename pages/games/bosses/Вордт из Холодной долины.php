<?php
    session_start();
    $title = "Вордт из Холодной долины";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Вордт из Холодной долины</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Вордт из Холодной<br>долины</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Вордт из Холодной долины.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Высокая стена Лотрика.php">Высокая стена Лотрика</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Душа Вордта из Холодной долины</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 1328<br>NG+ - 4146<br>NG+2 - 4560<br>NG+3 - 4768<br>NG+4 - 4975<br>NG+5 - 5389<br>NG+6 - 5597<br>NG+7 - 5804</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling">NG - 3000<br>NG+ - 15000<br>NG+2 - 16500<br>NG+3 - 16875<br>NG+4 - 18000<br>NG+5 - 18375<br>NG+6 - 18750<br>NG+7 - 19125</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Вордт из Холодной долины</b> (англ. <i>Vordt of the Boreal Valley</i>) &mdash; <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <table class="ingame-desc">
                <tr>
                    <td class="game-info">Игровое описание:</td>
                </tr>
                <tr>
                    <td><i><p>Вордт служил рыцарем-легионером на внешних границах и держался недалеко от стремительной танцовщицы.</p></i></td>
                </tr>
            </table>
            <h2>История</h2>
            <p>Когда-то Вордт наряду с <a href="Танцовщица Холодной долины.php">Танцовщицей Холодной долины</a> был одним из высокопоставленных Иритилльских рыцарей. Однако кольцо <a href="#">Левый глаз понтифика</a> превратило его в озверевшее чудовище, которое встречает любого, кто попытается продолжить своё путешествие в <a href="../locations/Поселение нежити.php">Поселение нежити</a>. Вордт был приставлен <a href="Понтифик Саливан.php">Понтификом Саливаном</a> на <a href="../locations/Высокая стена Лотрика.php">Высокую стену Лотрика</a> для охраны земель <a href="#">Повелителей Пепла</a> от <a href="#">Негорящих</a>, стремящихся вновь возжечь Первое Пламя.</p>
            <h2>Местонахождение</h2>
            <p>Босс находится в локации <a href="../locations/Высокая стена Лотрика.php">Высокая стена Лотрика</a>. После выхода на площадь у собора спуститесь вниз по лестнице и подойдите к огромным гнутым воротам. Вордт охраняет точку перехода на локацию <a href="../locations/Поселение нежити.php">Поселение нежити</a>. Перед боем стоит открыть срез к первому костру локации.</p>
            <h2>Сопротивления</h2>
            <table class="resistance">
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
                    <td>18%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>-27%</td>
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
            <p>Атаки босса наносят физический урон, их можно блокировать, но следует помнить, что <b>все</b> атаки босса накладывают на игрока эффект <a href="#">обморожения</a>.</p>
            <h3>Первая фаза</h3>
            <ul>
                <li><b>Выпад булавой</b>. Часто идёт первой в начале боя, когда вы подходите к боссу.</li>
                <li><b>Взмах</b>. Делает широкий взмах перед собой.</li>
                <li><b>Удар о землю</b>. Бьёт <a href="#">булавой</a> по земле, если стоять перед ним.</li>
                <li><b>Комбо</b>. Делает <b>выпад булавой</b>, а затем следует <b>взмах</b>.</li>
                <li><b>Альтернативный взмах</b>. Кладёт булаву на пол, а затем делает взмах. В отличие от обычного <b>взмаха</b>, этот идёт в противоположную сторону.</li>
                <li><b>Удар кулаком</b>. Делает быстрый удар кулаком.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <p>Переходу в эту фазу босса предшествует его крик, перед которым он слегка встаёт, опираясь на булаву (как во вступительной кат-сцене, перед боем). Глаза босса начинают светиться ярко-голубым цветом.</p>
            <ul>
                <li>У босса появляется аура льда, которая будет заполнять шкалу обморожения при нахождении вблизи босса.</li>
                <li><b>Бешенство</b>. Босс словно «звереет» и начинает носиться по всей арене, пытаясь протаранить игрока. Чрезвычайно опасная атака, состоящая из трёх последовательных атак с разбега. Эту атаку он начинает, как только переходит во вторую фазу. Каждый удар в отдельности можно заблокировать ценой пробитого блока, но вы не успеете восстановить выносливость перед следующей атакой (однако можно уклониться перекатом, если босс остановился не вплотную к вам).</li>
                <li><b>Двойной таран</b>. Перед ним босс слегка оседает.</li>
                <li><b>Ледяное дыхание</b>. От неё просто уйти, а также прервать уроном из-за долгой анимации начала атаки. Практически всегда идёт после <b>бешенства</b>. Также, пока она готовится, можно атаковать голову босса, и если вам повезёт, то он откроется для <a href="#">критической атаки</a> ("рипоста").</li>
                <li><b>Падение</b>. Босс почти встаёт, после чего быстро падает всем телом на землю. Наносит колоссальный урон, если находиться непосредственно под Вордтом. Во время атаки босс продвигается вперед и вытягивает руки, из-за чего от этой атаки можно увернуться только перекатом вбок, либо под босса (пройти между ног за спину). Булава во время этой атаки также наносит урон.</li>
                <li><b>Двойной взмах</b>. Босс некоторое время готовится, а затем, взяв булаву двумя руками, делает два быстрых взмаха, сильно перемещая свое тело. Опасная атака, наносит много урона, снимает много выносливости при попадании в блок. Кроме того, урон наносится не только оружием, но и телом босса, из-за чего зона под боссом не является безопасной, но при должной реакции от обоих взмахов можно увернуться перекатами. По завершении анимации босс открыт для 2-4 ударов, в зависимости от оружия.</li>
            </ul>
            <h2>Тактика</h2>
            <h3>Общее</h3>
            <ul>
                <li>Босс неохотно сокращает дистанцию с игроком, что удобно для атак в дальнем бою, восстановления выносливости и здоровья.</li>
                <li>Уязвим к тьме, имеет иммунитет к яду, токсину, кровотечению и обморожению.</li>
                <li>Получает заметно больше урона от дробящего оружия, чем от колющего и рубящего.</li>
                <li>Поскольку босс накладывает обморожение, рекомендуется надеть вещи с высоким сопротивлением этому эффекту (отлично подойдёт <a href="#">плотный кожаный сет</a>).</li>
                <li>Не стоит тратить всю выносливость на нанесение урона, пусть даже это возможно (скажем, вы за спиной у босса и прямо сейчас он вас не атакует), иначе, развернувшись, он застанет вас врасплох. Безопаснее, хоть и дольше, отойти, не дожидаясь этого, восстановить выносливость, а уже потом снова идти на сближение.</li>
            </ul>
            <h3>Первая фаза</h3>
            <ul>
                <li>Следует соблюдать осторожность при лечении в ближнем бою, поскольку некоторые атаки босса начинаются весьма неожиданно.</li>
                <li>Безопасные зоны находятся под животом и сзади босса. В ближнем бою стоит находиться именно там и совершать кувырки под босса при его атаках.</li>
                <li>Увернувшись от атаки босса и находясь в безопасной зоне, вы можете успеть перехватить оружие двумя руками и нанести один-два удара с повышенным уроном, а затем снова взять его в одну руку и закрыться щитом.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <ul>
                <li>После снятия приблизительно 40% здоровья босс переходит на вторую фазу. Анимация перехода достаточно долгая, и имеет смысл оставить на этот момент побольше выносливости, чтобы нанести значительный урон. Можно не допустить начало трех атак с разбега, для этого нужно нанести достаточное количество урона, пока он переходит во вторую фазу.</li>
                <li>Уклоняться от каждого разбега следует перед самым контактом с боссом.</li>
                <li>После оглушения Вордта достаточным уроном по голове во время ледяного дыхания ему можно нанести критический удар ("рипост").</li>
                <li>Справедливо вышесказанное и для первой фазы, за исключением того, что в этой фазе босс может провести атаку всем телом под себя, которая почти наверняка вас убьет. Также у него есть серия из двух атак булавой с разворотом всего тела, которая попадет и нанесет значительный урон справа и слева от босса, даже если персонаж находится возле ног. Зона позади босса по-прежнему безопасна.</li>
                <li>Кроме этого, все таранные атаки (одиночная пробежка, двойной таран и особый усиленный тройной) задевают под боссом в начале анимации. Учитывая это и сказанное выше, нахождение под боссом в этой фазе потребует от вас хорошего навыка уклонения, в противном случае лучше стараться зайти за спину (этому способствует возможность пройти у босса между ног) или даже стараться набрать расстояние, выжидая момент для атаки.</li>
                <li>Во второй фазе у босса появляется атака булавой с разворота. Атака не очень опасна, но неожиданно сделанная может быть неприятным сюрпризом. После неё босс оказывается к вам лицом, что при новых движениях и скорости — не очень выгодная для вас позиция.</li>
                <li>Брать оружие двумя руками во второй фазе опаснее, потому что босс становится более нервным и подвижным, а зона под ним перестала быть безопасной, однако в целом эта тактика работает и тогда. Отличный момент для этого — сам переход во вторую фазу, однако не увлекайтесь: оставаться без запаса выносливости как раз к её началу очень опасно.</li>
            </ul>
            <h2>Фантомы</h2>
            <p>Можно призвать двух фантомов:</p>
            <ul>
                <li><a href="#">Мастер меча</a>, знак призыва находится прямо перед ареной. Доступен, если был убит у <a href="#">Храма огня</a>.</li>
                <li><a href="#">Львиный рыцарь Альберт</a>, знак призыва находится на площадке перед выходом на лестницу, по которой надо спуститься к боссу.</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>Вордт — левша.</li>
                <li>Из-за специфических условий появления <a href="Танцовщица Холодной долины.php">Танцовщицы</a> несколько теряется из виду факт, что эти два очень связанных по сюжету персонажа находятся буквально в ста метрах друг от друга.</li>
                <li>Также возможно увидеть очень похожих фантомов Вордта и Танцовщицы до преображения, идущих вместе от церкви Йоршки в сторону моста, соединяющего <a href="../locations/Иритилл Холодной долины.php">город</a> и <a href="../locations/Катакомбы Картуса.php">Катакомбы Картуса</a>.</li>
                <li>Примечателен тот факт, что и Вордт, и Танцовщица, являются единственными <a href="Боссы.php">боссами</a> основного сюжета, которые появляются за спиной у игрока, впервые зашедшего на арену.</li>
                <li>Начиная со второго прохождения, босс может стать самым простым боссом в игре. Дело в том, что Вордт невероятно уязвим к тёмной магии, и если у вас <a href="#">есть</a> <a href="#">соответствующие</a> <a href="#">кольца</a> и <a href="#">маска</a>, а также прокачанный <a href="#">изалитский посох</a> и 40 <a href="#">интеллекта</a> и <a href="#">веры</a>, то чудовище даже на НГ+8 будет умирать с пяти попаданий <a href="#">Отбросов великой души</a>. Персонажам, полагающимся на ближний бой, будет легче оглушить Вордта и сделать ему рипост во время его дыхания за счет прокачанного оружия. Также после НГ у игрока наверняка будут доспехи и <a href="#">кольцо</a>, дающие хорошие сопротивления к холоду.</li>
                <li>В качестве <a href="https://www.youtube.com/watch?v=k9xdWG8HSD0&t=698s">мини-босса</a> должен был располагаться в <a href="../locations/Цитадель Фаррона.php">Цитадели Фаррона</a>.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_3.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_4.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_4.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_5.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_5.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_Concept_Art.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Vordt_of_the_Boreal_Valley_Concept_Art.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7H3PR_iF5yU?si=Uczz8bM2F7LiHHQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <?php
        require("../../../footer.php");
    ?>