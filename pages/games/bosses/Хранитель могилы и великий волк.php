<?php
    session_start();
    $title = "Хранитель могилы чемпиона и великий волк, хранитель могилы";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Хранитель могилы чемпиона и великий волк, хранитель могилы</h1>
            <div class="boss-page-info">
                <table>
                    <tr>
                        <th>Хранитель могилы<br>чемпиона и великий<br>волк, хранитель<br>могилы</th>
                    </tr>
                    <tr>
                        <td style="border: 0;">
                            <div class="table-switch-items" style="width: 90%; margin: 0 auto; margin-bottom: 15px;">
                                <div class="table-switch-items-category selected-cat" id="phase1">Страж</div>
                                <div class="table-switch-items-category unselected-cat" id="phase2">Великий волк</div>
                            </div>
                            <img src="../../../assets/games/Dark Souls III/bosses/Хранитель могилы и великий волк/Хранитель могилы (страж).png" id="phase1img" style="width: 300px;">
                            <img src="../../../assets/games/Dark Souls III/bosses/Хранитель могилы и великий волк/Хранитель могилы (великий волк).png" id="phase2img" style="width: 300px; display: none;">
                        </td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Локация:</td>
                    </tr>
                    <tr>
                        <td><a href="../locations/Нарисованный мир Арианделя.php">Нарисованный мир Арианделя</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Предметы:</td>
                    </tr>
                    <tr>
                        <td><a href="#">Храброе сердце</a><br><a href="#">Кости чемпиона</a></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Здоровье:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Хранитель:</b><br>NG - 2791<br>NG+ - 2794<br>NG+2 - 3074<br>NG+3 - 3213<br>NG+4 - 3353<br>NG+5 - 3632<br>NG+6 - 3772<br>NG+7 - 3912<br><b>Великий волк:</b><br>NG - 4193<br>NG+ - 4197<br>NG+2 - 4617<br>NG+3 - 4827<br>NG+4 - 5037<br>NG+5 - 5457<br>NG+6 - 5666<br>NG+7 - 5976</div></td>
                    </tr>
                    <tr>
                        <td class="characteristic-title">Души:</td>
                    </tr>
                    <tr>
                        <td><div class="needs-scrolling"><b>Босс:</b><br>NG - 60000<br>NG+ - 120000<br>NG+2 - 132000<br>NG+3 - 135000<br>NG+4 - 144000<br>NG+5 - 147000<br>NG+6 - 150000<br>NG+7 - 153000</div></td>
                    </tr>
                </table>
            </div>
            <p><b>Хранитель могилы чемпиона и великий волк, хранитель могилы</b> (англ. <i>Champion's Gravetender and Gravetender Greatwolf</i>) &mdash; опциональный <a href="Боссы.php">босс</a> в <a href="../Ashes of Ariandel.php">DLC</a> к игре <a href="../Dark Souls III.php">Dark Souls III</a>.</p>
            <h2>Местонахождение</h2>
            <p>Первая встреча с волком произойдёт практически в самом начале дополнения, в локации <a href="../locations/Нарисованный мир Арианделя.php">Нарисованный мир Арианделя</a>. После того, как <a href="#">Негорящий</a> впервые провалится под лёд и расправится со стаей <a href="#">волков</a>, Великий волк будет сидеть на уступе по левую руку. Затем он завоет и нападёт. После потери примерно половины здоровья волк исчезнет в морозной дымке.</p>
            <p>Вторая встреча произойдёт по пути к <a href="#">костру</a> <b>Часовня Арианделя</b>.</p>
            <p>Чтобы попасть к самому боссу, необходимо дойти до костра <b>Недра картины</b>. Для этого нужно ударами обрушить мост, ведущий в Часовню, и спуститься по нему со стороны Часовни как по лестнице (должна появиться кнопка, как возле обычной лестницы или как в <a href="../locations/Катакомбы Картуса.php">Катакомбах Картуса</a>), после чего по корням дойти до костра.</p>
            <p>От костра нужно повернуть направо, а затем спрыгнуть с уступа — это и будет арена для боя с боссом.</p>
            <p>После победы над данным опциональным боссом появится одноимённый костёр — <b>Хранитель могилы чемпиона</b>.</p>
            <h2>Сопротивления</h2>
            <div class="table-switch-items" style="width: 50%; margin-bottom: 15px;">
                <div class="table-switch-items-category selected-cat" id="cat1">Хранитель</div>
                <div class="table-switch-items-category unselected-cat" id="cat2">Волки</div>
                <div class="table-switch-items-category unselected-cat" id="cat3">Великий волк</div>
            </div>
            <table class="resistance" id="cat1-table" style="width: 50%;">
                <tr>
                    <th>Стихия</th>
                    <th>Показатель защиты</th>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от магии.png" title="Защита от магии"></td>
                    <td>42.52%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от огня.png" title="Защита от огня"></td>
                    <td>40.65%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>38.83%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>42.96%</td>
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
                    <td>Да</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да</td>
                </tr>
            </table>
            <table class="resistance" id="cat2-table" style="display: none; width: 50%;">
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
                    <td>-22%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>2%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (уязвимы)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (уязвимы)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да</td>
                </tr>
            </table>
            <table class="resistance" id="cat3-table" style="display: none; width: 50%;">
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
                    <td>-16%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от молний.png" title="Защита от молний"></td>
                    <td>7%</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/resistance/Защита от тьмы.png" title="Защита от тьмы"></td>
                    <td>7%</td>
                </tr>
                <tr>
                    <td colspan="2">Накладываемые эффекты:</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Кровотечение.png" title="Кровотечение"></td>
                    <td>Да (уязвим)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Отравление.png" title="Отравление"></td>
                    <td>Да (уязвим)</td>
                </tr>
                <tr>
                    <td><img src="../../../assets/games/Dark Souls III/status effects/Обморожение.png" title="Обморожение"></td>
                    <td>Да</td>
                </tr>
            </table>
            <h2>Описание</h2>
            <p>Хранитель, вооружённый гладиусом и щитом с изображением льва, одетый в <a href="#">кольчугу</a> и <a href="#">маску тьмы</a>. Будучи раненым, призывает себе на помощь огромного серого Великого волка.</p>
            <h2>Бой</h2>
            <p>Бой происходит на обширной ледяной арене, покрытой белыми цветами и ледяными кристаллами. Изначально перед взором предстаёт воин, сидящий у могилы в окружении трёх верных ему волков. Если подойти ближе, можно увидеть длинный меч, воткнутый в замёрзшую землю у основания надгробия.</p>
            <p>Бой можно разделить на три стадии:</p>
            <h3>Первая фаза</h3>
            <p>Воин и три волка нападают на нас. Атаки довольно стремительные: воин быстро сокращает дистанцию, часто бьёт в прыжке и применяет оружейный навык меча и щита. Также весьма проворно уклоняется от атак и заклинаний и имеет неплохую <a href="#">устойчивость</a>.</p>
            <h3>Вторая фаза</h3>
            <p>Когда здоровье воина опустится до половины или ниже (если не давать ему призывать волка на половине здоровья), он отойдёт назад и поднимет свой меч. После этого на арене появляется великий волк. Волк стремительно перемещается по арене, пытаясь укусить игрока или сбить его своим телом. Его атаки похожи на атаки <a href="#">Саливанского Чудища</a>. Воин начинает атаковать магией и, при необходимости, мечом.</p>
            <h3>Третья фаза</h3>
            <p>Когда у волка остаётся меньше половины жизни, его глаза загораются красным; у Хранителя же меч загорается огнём. После этого волк может применять морозное дыхание: предварительно завыв, выпускает перед собой ледяной туман. Наносит огромный урон и быстро заполняет шкалу обморожения. Затем кидается на игрока, не давая времени передохнуть и сориентироваться в морозной дымке.</p>
            <h2>Тактика</h2>
            <ul>
                <li>Обязательно убиваем всех мелких волков. Затем отводим воина за башню, как можно дальше к стенам. Там сражаемся с ним до середины здоровья (он пока не призывает большого волка). После, ловим момент и наносим как можно больше урона, будь то <a href="#">критические атаки</a> или <a href="#">заклинания</a>, нужно убить его до прихода волка. Если вы сделали всё правильно, то волк будет только подходить к Колизею, когда Чемпион будет уже мёртв. Затем сражаемся с волком один на один, вовремя уворачиваясь от его прыжков.</li>
                <li>Волк крайне подвижен и имеет опасные атаки на огромное расстояние, поэтому лучше всего стараться обойти, чтобы нанести пару ударов сбоку или сзади. Все его атаки начинаются довольно быстро, поэтому не стоит опускать щит, если он находится на расстоянии от вас. От дыхания можно спрятаться за колонной, но это порой ещё опаснее, чем блокировать эту атаку, так как часто он сразу делает два рывка, первый из которых мгновенно переместит волка к вам, а второй убьёт (если у вас нет огромного запаса здоровья).</li>
                <li>Лучше вести весь бой против волка неподалёку от колонн, чтобы было время на лечение и передышку. Если он ускоряется на вас (позади волка появляется небольшой вихрь), спасёт перекат в любом направлении, перпендикулярном его рывку (очень часто при получении урона отскакивает на большое расстояние и делает несколько рывков). Если он делает подбрасывающую атаку, лучше всего как можно быстрее увеличить расстояние от него, если понимаете, что зайти за спину не успеете. От тумана можно уклониться, сделав пару перекатов по касательной в ту сторону, откуда волк начал его пускать, так как много урона всё же туман не наносит и это хороший шанс приблизиться к волку. Легче всего сблизиться с ним, когда он проводит атаку укусами, которых всего две. Рекомендуется как можно чаще идти на сближение, так как на большом и среднем расстоянии волк использует рывки, паузы после которых недостаточно для атаки.</li>
                <li>Удар непосредственно по голове наносит волку критический урон.</li>
                <li>Волка можно оглушить, после чего провести "рипост".</li>
            </ul>
            <h2>Примечания</h2>
            <ul>
                <li>Уязвим для <a href="#">отравления</a> и <a href="#">кровотечения</a>. Достаточно всего одного каста <a href="#">Саранчи Доррис</a>, чтобы вызвать кровотечение у волка.</li>
                <li>Убийство босса открывает доступ к <a href="../locations/Поединок нежити.php">PvP-арене</a>. Для этого необходимо сжечь <a href="#">Кости чемпиона</a> на <a href="#">костре</a> в <a href="../locations/Храм огня.php">Храме огня</a>.</li>
                <li>Если вы убили волка до входа на арену (2 встречи у башни), то его здоровье во время основного сражения будет уменьшено.</li>
                <li>Во время перехода во вторую фазу хранитель использует <a href="#">жест</a> "Клянусь своим мечом".</li>
                <li>У Хранителя могилы, как и у обычного игрока, есть счётчик побед на арене, заполняющийся по мере того, как он снова и снова убивает игрока. После определённого количества побед босс получает ранг и особый значок арены, который находится слева от полоски здоровья Хранителя могилы.</li>
                <li>Поскольку Хранитель является человеком, он может быть схвачен <a href="#">Тёмной рукой</a> и пиромантией <a href="#">Священное пламя</a>.</li>
            </ul>
            <h2>Видео</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OBpNLp5-jt0?si=0X21N5-z_EBJeZ8p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </main>
    <script src="../../../script/boss-images-2-phases.js"></script>
    <script src="../../../script/three-items-char-table-switch.js"></script>
    <?php
        require("../../../footer.php");
    ?>