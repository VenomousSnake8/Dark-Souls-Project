<?php
    session_start();
    $title = "Безымянный король";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Безымянный король</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Безымянный король</th>
                    </tr>
                    <tr>
                        <td style="border: 0;"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный король.png" style="width: 300px;"></td>
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
                        <td><a href="#">Душа Безымянного Короля</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Повелитель Шторма:</b><br>NG - 4577<br>NG+ - 4582<br>NG+2 - 5040<br>NG+3 - 5269<br>NG+4 - 5498<br>NG+5 - 5956<br>NG+6 - 6186<br>NG+7 - 6415<br><b>Безымянный король:</b><br>NG - 7100<br>NG+ - 7108<br>NG+2 - 7818<br>NG+3 - 8174<br>NG+4 - 8529<br>NG+5 - 9240<br>NG+6 - 9595<br>NG+7 - 9951</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Босс:</b><br>NG - 80000<br>NG+ - 160000<br>NG+2 - 176000<br>NG+3 - 180000<br>NG+4 - 192000<br>NG+5 - 196000<br>NG+6 - 200000<br>NG+7 - 204000</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Безымянный король</b> (англ. <i>The Nameless King</i>) &mdash; опциональный <a href="Боссы.php">босс</a> в игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <h2>Местонахождение</h2>
            <p>Для того, чтобы найти <a href="../locations/Пик Древних Драконов.php">секретную локацию</a>, в которой находится босс, вам необходимо убить <a href="Оцейрос.php">Оцейроса, Снедаемого Короля</a>. После этого открыть дверь в комнату, расположенную на арене, где происходил бой с боссом. Там вы должны получить <a href="#">жест</a> "Путь Дракона", крайне важный для следующего шага. Затем отправьтесь в <a href="../locations/Подземелье Иритилла.php">Подземелья Иритилла</a> и используйте жест на коврике перед обрывом, где "сидит" окаменевший дракон в такой же позе. Эту статую можно найти, пробежав от <a href="#">гиганта</a> по мостику в тоннель с <a href="#">крысами</a> (там же где сундук, <a href="#">мимик</a> и <a href="#">василиски</a>), спустившись в помещение с камерами, где ходит толпа <a href="#">тюремщиков</a> (там же камера <a href="#">Карлы</a>). На выходе нужно сразу повернуть налево и подняться на подъёмнике (вход туда прямо напротив выхода из локации), помимо прочего там можно открыть первый короткий путь к костру, после подъёма пройдя дальше и открыв решётку.</p>
            <p>Практически в конце Пика Древних Драконов есть огромная колокольня, а перед нею рычаг. Если потянуть за него, то колокол зазвонит, и начнётся буря. После этого можно спрыгнуть прямо на тучи, которые появились перед рычагом, и впереди вас будет ждать босс.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 50%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Король</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Когти повелителя шторма (ПШ)</div>
                <div class="table-switch-items-category unselected-cat" id="cat3">Тело ПШ</div>
                <div class="table-switch-items-category unselected-cat" id="cat4">Шея ПШ</div>
                <div class="table-switch-items-category unselected-cat" id="cat5">Голова ПШ</div>
            </div>
            <table class="resistance" id="cat1-table" style="width: 50%;">
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
                    <td>23%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>83%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>-8%</td>
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
                    <td>Да (имеет сопротивление)</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none; width: 50%;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>82%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>87%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>73.8%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>80%</td>
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
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <table class="resistance" id="cat3-table" style="display: none; width: 50%;">
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
                    <td>35%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-31%</td>
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
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (имеет сопротивление)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <table class="resistance" id="cat4-table" style="display: none; width: 50%;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>1%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>28.5%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-44.1%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>-10%</td>
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
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <table class="resistance" id="cat5-table" style="display: none; width: 50%;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>-17%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>15.5%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>-70.3%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>-30%</td>
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
                    <td>Да (уязвим)</td>
                </tr>
            </table>
            <h2>Атаки</h2>
            <p><b>Абсолютное большинство атак босса наносят ощутимый урон либо молнией, либо (в первой фазе) огнём. Поэтому, если у вас нет <a href="#">определённого щита</a>, блокировать их не имеет смысла!</b></p>
            <h3>Первая фаза</h3>
            <ul>
                <li><b>Дыхание</b> — <a href="#">дракон</a> отводит голову в сторону, затем начинает изрыгать из пасти пламя, медленно поворачивая голову в сторону игрока. Сам Король в это время прижимается к голове своего питомца. Если успеть подбежать, то можно нанести довольно много урона.</li>
                <li><b>Дыхание под себя</b> — Повелитель Шторма внезапно взлетает и дышит огнём под себя, нанося урон по площади. Использует, если находиться под драконом.</li>
                <li><b>Атака копьём</b> — Король заносит <a href="#">оружие</a> в сторону и наносит горизонтальный удар. Затем следует ещё один удар, но уже в обратную сторону.</li>
                <li><b>Заряд</b> — Король поднимает копьё высоко вверх, заряжая его молнией, а затем резко бьёт по земле, нанося урон по площади. Часто следует после <b>атаки копьём</b>.</li>
                <li><b>Атака с воздуха</b> — дракон взлетает и начинает кружить над игроком. Король же в этот момент бросает в игрока молнию. Затем дракон разворачивается и летит прямо на игрока, а король в это время наносит размашистый удар в его сторону.</li>
                <li><b>Выпад</b> &mdash; начало атаки похоже на <b>заряд</b>, но здесь Король не будет заряжать копьё, а нанесет мощный выпад. Коварство в том, что обе атаки чаще всего следуют после атаки копьём, поэтому их можно легко спутать. К тому же эта атака очень резкая и внезапная, поэтому нужно внимательно следить за боссом.</li>
                <li><b>Взмах крыльями</b> &mdash; дракон встаёт на задние лапы, а затем делает мощный взмах крыльями, после чего в игрока летит поток сильного ветра, сбивающий с ног и наносящий урон. Крайне редкая атака, которую босс может вовсе не использовать.</li>
                <li><b><a href="#">Копьё солнца</a></b> &mdash; в очень редких случаях может использовать одноимённое чудо. Как и предыдущая атака, используется крайне редко. Атака была замечена, когда игрок стоял под шеей дракона.</li>
                <li><b>Вертикальный удар</b> &mdash; начало атаки похоже на <b>заряд</b> с тем лишь отличием, что босс не будет заряжать молниями своё копьё. Часто идёт после <b>атаки копьём</b>.</li>
                <li><b>Выпад с воздуха</b> &mdash; дракон взлетает и пикирует прямо на игрока, а король наносит выпад.</li>
            </ul>
            <h3>Вторая фаза</h3>
            <ul>
                <li><b>Поток</b> — Король заносит копьё за спину, а затем наносит мощный вертикальный удар, после которого в сторону игрока следует мощный поток ветра. Часто используется первой в начале второй фазы.</li>
                <li><b>Широкий поток</b> — атака схожа с предыдущей с тем лишь отличием, что летящая в игрока волна будет в несколько раз шире. Как и прошлая атака, при попадании сбивает с ног.</li>
                <li><b>Мощный выпад</b> — Король взлетает высоко над землёй, заряжая свое копьё, а затем обрушивается на игрока выпадом.</li>
                <li><b>Комбо</b> — разноплановые комбинации ударов копья. Часто после них идёт <b>выпад</b>.</li>
                <li><b>Выпад</b> — Король поднимает копьё над собой и наносит выпад. Может повторяться неоднократно. Может использовать, как завершающую атаку в комбо. Иногда сопровождается быстрым рывком на игрока. Часто следует сразу после <b>мощного выпада</b>. Также может идти после <b>комбо</b>.</li>
                <li><b>Резкий вертикальный удар</b> &mdash; заносит копьё за спину и наносит быстрый вертикальный удар. Как и выпад, может повторяться неоднократно.</li>
                <li><b>Пронзание</b> &mdash; заряжает копьё молниями, а затем делает быстрый рывок в сторону игрока, пытаясь насадить его на копьё. Довольно опасная атака, наносящая <b>очень много</b> урона. Из-за специфики арены правильно оценить расстояние сложно, поэтому, даже если вам кажется, что атака вас не достанет — <b>уклоняйтесь</b>.</li>
                <li><b>Заряженный горизонтальный удар</b> &mdash; босс хватает копьё обеими руками и наносит горизонтальный удар. Может продолжиться таким же ударом, но в обратную сторону.</li>
                <li><b>Отход</b> &mdash; заносит копьё вбок, затем делает рывок в сторону от игрока, попутно нанося удар копьём. Чаще всего используется, если стоять вплотную и пытаться обойти его сбоку. Также от атаки исходит поток ветра, сбивающий вас с ног при попадании (идёт по направлению атаки). Перекатываться лучше в сторону, куда король заносит своё оружие. После атаки босс может развернуться и ударить вас с разбега.</li>
                <li><b>Взлёт</b> &mdash; Король летит в сторону от игрока, а затем резко наносит удар. После этого может последовать <b>выпад</b>.</li>
                <li><b>Круговая атака</b> &mdash; босс делает рывок на игрока, попутно нанося удар по окружности.</li>
                <li><b><a href="#">Буря молний</a></b> &mdash; схожа с одноимённым чудом, однако молнии исходят не от короля, а от его копья. В это время король хватает своё оружие обеими руками и высоко поднимает, а затем бьёт по земле.</li>
                <li><b>Топот</b> &mdash; топает ногой, если стоять слишком близко, после чего происходит мощный взрыв молний.</li>
                <li><b><a href="#">Громовой кол</a></b> &mdash; использует одноимённое чудо. Часто следует после <b>комбо</b>.</li>
                <li><b><a href="#">Громовой удар</a></b> &mdash; использует одноимённый навык своего копья. В это время король немного наклоняется и заряжает копьё, а затем поднимает его вверх, после чего по игроку прямо с неба бьёт молния. Если у босса осталось мало здоровья — можно успеть добить его, т.к. подготовка у атаки довольно долгая.</li>
            </ul>
            <h2>Тактика</h2>
            <p>Бой с боссом состоит из 2-х фаз:</p>
            <ul>
                <li>Необходимо убить виверну по имени <a href="#">Повелитель Шторма</a>, на которой восседает Безымянный король.</li>
                <li>Бой с самим Безымянным королём.</li>
            </ul>
            <p>Этот босс является довольно сложным для большинства игроков, поэтому <b>не приходите</b> к нему неподготовленными. Вам может понадобиться для защиты <a href="#">кольцо с громовым камнем</a>, которое можно найти в ходе прохождения этой локации. Виверна уязвима к урону молнией и <a href="#">обморожению</a>, а сам босс уязвим ко тьме (к магии и огню хуже), поэтому также пригодятся кольца, которые увеличивают соответствующий вид урона (например, <a href="#">кольцо власти над тьмой</a>; однако стоит помнить, что оно также делает вас более уязвимыми, так как повышает получаемый физический урон).</p>
            <div class="table-switch-items" style="width: 40%; margin-bottom: 15px; border-bottom: 1px rgb(105, 98, 87) solid; height: 30px;">
                <div class="table-switch-items-category selected-cat" id="cat1-m">Первая фаза</div>
                <div class="table-switch-items-category unselected-cat" id="cat2-m">Вторая фаза</div>
            </div>
            <div id="cat1-div">
                <ul>
                    <li>Виверна уязвима к урону от магии и молний, а также всем статусным эффектам, кроме <a href="#">кровотечения</a>. Очень уязвима к <a href="#">обморожению</a>, поэтому хорошим решением будет использовать <a href="#">Иритилльский меч</a>.</li>
                    <li>Эта фаза проходится практически одинаково для всех билдов. Даже магам стоит взять оружие, или пользоваться быстрыми заклинаниями ближнего боя.</li>
                    <li>Из-за огромной уязвимости виверны к молниям, первая фаза легко дастся боевым клирикам. Питомца Короля можно фактически ваншотнуть, если использовать всевозможные баффы на усиление урона от заклинаний и <a href="#">Копьё Солнца</a>. В таком случае всего одно заклинание, направленное в голову виверне, снесёт ей порядка 70-80% здоровья и собьёт <a href="#">баланс</a>, а игроку останется лишь добить её рипостом.</li>
                    <li>В момент, когда виверна дышит огнём слева направо (относительно неё), нужно подбежать к морде сбоку и бить, пока она проводит атаку дыханием.</li>
                    <li>Виверна будет взлетать вверх и извергать пламя только если игрок находится под ногами. Если находиться перед клювом и ждать, пока она опустит голову для нанесения урона, то этой атаки можно избежать вовсе.
                        <ul type="disc">
                            <li>Если виверна всё-таки взлетела, то нужно просто бежать от её клюва в сторону, куда она смотрит, и тогда вероятность того, что она попадёт, минимальна. Не стоит использовать щит — он будет моментально пробит.</li>
                        </ul>
                    </li>
                    <li>Есть большая вероятность сбить виверне баланс частыми ударами в голову и шею (даже обычным прямым мечом), после чего ей можно, подойдя к голове, нанести критический урон.</li>
                    <li>Если вблизи входа на арену есть проблемы с камерой (в связи с тем, что огромное тело дракона закрывает самого короля или вашего персонажа), выходите на центр. Несмотря на то, что дракон будет часто летать, на открытом пространстве от всех атак босса довольно просто уклониться перекатом под него, что позволит также нанести несколько ударов по голове виверны. Важно стоять именно в центре, чтобы статуи и невидимые края арены не мешали уклоняться.</li>
                    <li>Когда босс решит полететь по широкой дуге и бросить в вас копьё молнии, нужно закрепить прицел на морде виверны или на Короле, после чего уходить перекатом вбок от копья (можно и вперед, главное — не назад), а затем перекатом под босса от атаки копьём.</li>
                    <li>От пламени, которое изрыгает Повелитель Шторма при вертикальном взлёте, гораздо проще убежать, чем перекатываться.</li>
                    <li>Если король готовится нанести удар молнией, пока виверна находится на земле, то нужно перекатами уйти под шею Повелителя Шторма. Это позволяет избежать урона и нанести 3-4 удара по шее виверны. При этом лучше всего двигаться в сторону головы.</li>
                </ul>
            </div>
            <div id="cat2-div" style="display: none;">
                <p>Во второй фазе Король поглотит энергию своего павшего товарища, и бой будет проходить с ним 1 на 1. Тут есть две основные тактики:</p>
                <ul>
                    <li>В начале фазы сразу бежать ближе к боссу, а не ждать его дальних атак. Во второй фазе лучше всего подходить с тактикой уклонения, так как атаки у босса частые, и постоянный блок, даже со стабильным щитом, будет лишать выносливости. Перекаты дадут шанс наносить ответные удары после серии атак босса и возможность быстро отбежать от него для лечения при получении урона. Лучше всего держаться вплотную к боссу, прямо перед ним, это место — своеобразная мёртвая зона, где при горизонтальных ударах время нахождения оружия короля минимально, и не достают его вертикальные удары. Перекатываться при этом лучше вперёд, "в короля", а не вбок. Также может помочь <a href="#">Кровавое кольцо Картуса</a>.
                        <ul type="disc">
                            <li>Получив определённое количество урона, босс несколько раз за бой упадёт на колени, в этот момент ему можно нанести критический удар (рипост). Важно не пропустить этот момент и находиться напротив него.</li>
                            <li>Часто делает паузы между ударами комбо, из-за чего его атаки могут быть сложно предсказуемы.</li>
                            <li>Для ловкачей в этой фазе неплохим выбором будет <a href="#">Ветхий клинок</a>. Его навык (с сильной атакой) наносит ощутимый урон боссу и быстро заполняет шкалу кровотечения. Кроме того, навык применяется достаточно быстро, чтобы использовать его между комбо Короля. Если не сбавлять темп, босс погибнет достаточно быстро.</li>
                        </ul>
                    </li>
                    <li>Можно держаться на расстоянии, чтобы он атаковал ударом в прыжке. Перекатами уходить под него, либо просто спринтом бежать чуть влево от босса, когда он в полёте и наносить пару ударов по спине. Иногда после промаха босс открывается не сразу, а проводит ещё один колющий удар, открываясь только после него. Следите за его движениями. После контратаки вновь держать дистанцию (но не стоит ждать, что босс будет повторять одну и ту же атаку постоянно).
                        <ul type="disc">
                            <li>Довольно легко убивается из лука или магией. Нужно постоянно отбегать от босса, периодически выпуская в него стрелу/заклинание. При выпаде откатываемся назад, от молний перекат вбок, от ударной волны перекатываемся вперёд (прямо в волну: несмотря на обширную анимацию, область поражения у этой атаки невелика) или закрываемся щитом.</li>
                        </ul>
                    </li>
                    <li>Также, вне зависимости от выбранной тактики, полезно помнить несколько пунктов:
                        <ul type="disc">
                            <li>Когда у босса останется примерно половина здоровья, он перейдёт в условную 2 фазу: у Короля появится 4 новые атаки. Переход в эту фазу начинается с <b>заряженного удара</b>, после чего король сразу проводит атаку молнией с неба.
                                <ul type="disc">
                                    <li>Заряженный удар копьём оземь (аналогично заклинанию <a href="#">Буря молний</a>). Имеет невероятно большой радиус поражения, а центр смещён вперёд относительно Короля. По этой причине, не пытайтесь убежать от атаки и не обманывайтесь тем, что находитесь далеко от босса.</li>
                                    <li><a href="#">Громовой кол</a>.</li>
                                    <li>Удар ногой, от которого исходит взрыв молний в приличном радиусе. Производится быстрее прочих молниевых атак, но и урон при этом немного ниже. Спасает вовремя сделанный перекат.</li>
                                    <li>Долго подготавливаемая атака с бьющей с неба молнией. Высокий урон, нельзя уйти шагом. Нужно перекатываться сразу после того, как копьё Короля окажется в верхней точке. Можно ориентироваться на звук: как только слышите первый разряд, жмите кнопку переката.</li>
                                </ul>
                            </li>
                            <li>Не перекатывайтесь назад. Это не очень критично для большинства атак, однако от самых опасных – рывков (с захватом или с ударом) и выпадов – таким образом уклониться очень <i>тяжело</i>.</li>
                            <li>Если Король атакует, <b>перекатывайтесь</b>, даже если вам кажется, что вы находитесь вне зоны поражения. У атак босса огромный радиус (который часто превышает радиус анимаций) и высокий урон, так что лучше лишний раз перекатиться, чем получить урон по ошибке.</li>
                            <li>Если после удара молнии с неба, но до того, как она ударит по вам, оглушить босса, молния вас не ударит.</li>
                            <li>Также, если вы не видите, как Безымянный король завершает эту атаку, молния по вам не ударит. Когда босс поднимает копьё, но не бьёт им оземь, просто отбегаем и отворачиваемся.</li>
                            <li>Его атаки молнией, несмотря на наличие взрывов, имеют не очень много активных кадров, поэтому от них можно уклониться одним перекатом. Главное – не паниковать и чётко идентифицировать готовящуюся атаку, потому что задержка у всех них разная, и перекатываться, соответственно, тоже нужно по-разному.</li>
                            <li>Безымянного короля невозможно парировать.</li>
                            <li>Имеет колоссальное сопротивление к урону молниями, несмотря на то, что доспех из драконьей чешуи, который он носит, обладает уязвимостью к молниям.</li>
                            <li>Имеет иммунитет к отравлению, но уязвим к кровотечению и обморожению.</li>
                            <li>От атак молнией хорошо спасает <a href="#">большой щит драконоборца</a> — имеет высокую стабильность и наивысшее сопротивление молниям. Позволяет без проблем выдерживать 2-3 атаки босса, избегая большей части урона.</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <h2>Примечания</h2>
            <ul>
                <li>На бой с ним нельзя призвать NPC-фантомов.</li>
                <li>Потерянные <a href="#">души</a> после <a href="#">смерти</a> от руки босса будут лежать неподалеку от рычага, с помощью которого можно позвонить в колокол, у края платформы, ведущей к боссу.</li>
                <li>Если быстро нанести много урона, босса можно опрокинуть — он упадёт на спину. Вставать он будет медленно, что даст возможность нанести много дополнительного урона.</li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_Концепт_Арт.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_1.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_1.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_3.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_3.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_4.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_4.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_Концепт_Арт_2.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный_король_Концепт_Арт_2.png"></a>
                <a href="../../../assets/games/Dark Souls III/bosses/Безымянный король/Повелитель_Шторма_Концепт_Арт.png" target="_blank"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Повелитель_Шторма_Концепт_Арт.png"></a>
            </div>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SyFNPZN82kg?si=lGYBwF-CO4U8tN3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/five-items-char-table-switch.js"></script>
    <script src="../../../script/two-items-moveset-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>