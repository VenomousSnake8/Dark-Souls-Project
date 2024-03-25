<?php
    session_start();
    $title = "Боссы";

    require("../../../header.php");
?>
    <main>
        <div class="main-page-content">
            <h1>Боссы</h1>
            <p><b>Босс</b> (англ. <i>Boss</i>) &mdash; не возрождающийся, могучий и опасный противник, обладающий большим количеством здоровья и разрушительными атаками.</p>
            <h2>Описание</h2>
            <p>Боссы отличаются от рядовых противников и мини-боссов наличием полоски здоровья и имени, появляющихся, как только игрок войдёт на арену для битвы, также почти каждый из них требует составления особой тактики боя с ним, основанной на особенностях самого босса и вооружения игрока. Как правило, боссы скрываются за <a href="#">туманными вратами</a>, поэтому время для подготовки у вас будет. Но не стоит забывать, что туман обычно появляется только после первого прохода к боссу, поэтому не стоит терять бдительности, чтобы случайно не забрести к нему.</p>
            <p>У каждого босса есть собственная уникальная арена для боя, некоторые из которых устроены так, чтобы специально облегчить или осложнить бой с данным боссом. Иногда обитатель арены не нападает сразу после входа на неё, ожидая вас в центре или появляясь после соответствующей кат-сцены (они предусмотрены не для каждого босса).</p>
            <p>Большинство боссов имеют несколько фаз (до трёх), которые они могут менять по прошествии некоторого времени или при получении определённого урона. При вступлении в следующую фазу босса могут затронуть следующие изменения в произвольных сочетаниях:</p>
            <ul>
                <li>Появляется дополнительное оружие или усиление.</li>
                <li>Изменяется паттерн атак, их скорость и амплитуда.</li>
                <li>На помощь боссу приходят рядовые противники или его соратник.</li>
                <li>Меняется арена битвы.</li>
                <li>Здоровье босса полностью восстанавливается.</li>
            </ul>
            <p>После победы над боссом игрок получает определённое количество <a href="#">душ</a>, а также душу самого босса (<b>исключения</b> &mdash; <a href="Судия Гундир.php">Судия Гундир</a>, <a href="Хранитель могилы и великий волк.php">Хранитель могилы чемпиона и великий волк, хранитель могилы</a> и <a href="Копьё церкви.php">Копьё церкви</a>), из которой можно выковать <a href="#">уникальный предмет</a>, это может быть: заклинание, кольцо, щит или оружие. Убийство большинства боссов в игре является обязательным для продвижения по основной сюжетной линии и получения некоторых квестовых предметов.</p>
            <h2>Обязательные боссы</h2>
            <div class="gallery-of-bosses">
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Судия Гундир/Судия Гундир (мини).png" title="Судия Гундир"></div>
                    <div class="bosses-link"><a href="Судия Гундир.php" title="Судия Гундир">Судия Гундир</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Вордт из Холодной долины/Вордт из Холодной долины (мини).png" title="Вордт из Холодной долины"></div>
                    <div class="bosses-link"><a href="Вордт из Холодной долины.php" title="Вордт из Холодной долины">Вордт из Холодной долины</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Знаток кристальных чар/Знаток кристальных чар (мини).png" title="Знаток кристальных чар"></div>
                    <div class="bosses-link"><a href="Знаток кристальных чар.php" title="Знаток кристальных чар">Знаток кристальных чар</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Дьяконы глубин/Дьяконы глубин (мини).png" title="Дьяконы глубин"></div>
                    <div class="bosses-link"><a href="Дьяконы глубин.php" title="Дьяконы глубин">Дьяконы глубин</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Хранители Бездны/Хранители Бездны (мини).png" title="Хранители Бездны"></div>
                    <div class="bosses-link"><a href="Хранители Бездны.php" title="Хранители Бездны">Хранители Бездны</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Верховный повелитель Вольнир/Верховный повелитель Вольнир (мини).png" title="Верховный повелитель Вольнир"></div>
                    <div class="bosses-link"><a href="Верховный повелитель Вольнир.php" title="Верховный повелитель Вольнир">Верховный повелитель Вольнир</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Понтифик Саливан/Понтифик Саливан (мини).png" title="Понтифик Саливан"></div>
                    <div class="bosses-link"><a href="Понтифик Саливан.php" title="Понтифик Саливан">Понтифик Саливан</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Олдрик, пожиратель богов/Олдрик, пожиратель богов (мини).png" title="Олдрик, пожиратель богов"></div>
                    <div class="bosses-link"><a href="Олдрик, пожиратель богов.php" title="Олдрик, пожиратель богов">Олдрик, пожиратель богов</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Гигант Йорм/Гигант Йорм (мини).png" title="Гигант Йорм"></div>
                    <div class="bosses-link"><a href="Гигант Йорм.php" title="Гигант Йорм">Гигант Йорм</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Танцовщица Холодной долины/Танцовщица Холодной долины (мини).png" title="Танцовщица Холодной долины"></div>
                    <div class="bosses-link"><a href="Танцовщица Холодной долины.php" title="Танцовщица Холодной долины">Танцовщица Холодной долины</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Доспехи драконоборца/Доспехи драконоборца (мини).png" title="Доспехи драконоборца"></div>
                    <div class="bosses-link"><a href="Доспехи драконоборца.php" title="Доспехи драконоборца">Доспехи драконоборца</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Лотрик и Лориан/Лотрик и Лориан (мини).png" title="Лотрик и Лориан"></div>
                    <div class="bosses-link"><a href="Лотрик и Лориан.php" title="Лотрик и Лориан">Лотрик и Лориан</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Душа пепла/Душа пепла (мини).png" title="Душа пепла"></div>
                    <div class="bosses-link"><a href="Душа пепла.php" title="Душа пепла">Душа пепла</a></div>
                </div>
            </div>
            <h2>Опциональные боссы</h2>
            <div class="gallery-of-bosses">
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Проклятое Великое древо/Проклятое Великое древо (мини).png" title="Проклятое Великое древо"></div>
                    <div class="bosses-link"><a href="Проклятое Великое древо.php" title="Проклятое Великое древо">Проклятое Великое древо</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Старый король демонов/Старый король демонов (мини).png" title="Старый король демонов"></div>
                    <div class="bosses-link"><a href="Старый король демонов.php" title="Старый король демонов">Старый король демонов</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Оцейрос, Снедаемый король/Оцейрос, Снедаемый король (мини).png" title="Оцейрос, Снедаемый король"></div>
                    <div class="bosses-link"><a href="Оцейрос.php" title="Оцейрос, Снедаемый король">Оцейрос, Снедаемый король</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Чемпион Гундир/Чемпион Гундир (мини).png" title="Чемпион Гундир"></div>
                    <div class="bosses-link"><a href="Чемпион Гундир.php" title="Чемпион Гундир">Чемпион Гундир</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Древняя виверна/Древняя виверна (мини).png" title="Древняя виверна"></div>
                    <div class="bosses-link"><a href="Древняя виверна.php" title="Древняя виверна">Древняя виверна</a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Безымянный король/Безымянный король (мини).png" title="Безымянный король"></div>
                    <div class="bosses-link"><a href="Безымянный король.php" title="Безымянный король">Безымянный король</a></div>
                </div>
            </div>
            <h2>Боссы из дополнений</h2>
            <div class="gallery-of-bosses">
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Хранитель могилы и великий волк/Хранитель могилы и великий волк (мини).png" title="Хранитель могилы и великий волк"></div>
                    <div class="bosses-link"><a href="Хранитель могилы и великий волк.php" title="Хранитель могилы и великий волк">Хранитель могилы и великий волк</a> <a href="../Ashes of Ariandel.php" title="Ashes of Ariandel" class="dlc-link"><sup>(AoA)</sup></a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Отец Ариандель и сестра Фриде/Отец Ариандель и сестра Фриде (мини).png" title="Отец Ариандель и сестра Фриде"></div>
                    <div class="bosses-link"><a href="Отец Ариандель и сестра Фриде.php" title="Отец Ариандель и сестра Фриде">Отец Ариандель и сестра Фриде</a> <a href="../Ashes of Ariandel.php" title="Ashes of Ariandel" class="dlc-link"><sup>(AoA)</sup></a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Демон-принц/Демон-принц (мини).png" title="Демон-принц"></div>
                    <div class="bosses-link"><a href="Демон-принц.php" title="Демон-принц">Демон-принц</a> <a href="../The Ringed City.php" title="The Ringed City" class="dlc-link"><sup>(TRC)</sup></a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Мидир Пожиратель Тьмы/Мидир Пожиратель Тьмы (мини).png" title="Мидир Пожиратель Тьмы"></div>
                    <div class="bosses-link"><a href="Мидир Пожиратель Тьмы.php" title="Мидир Пожиратель Тьмы">Мидир Пожиратель Тьмы</a> <a href="../The Ringed City.php" title="The Ringed City" class="dlc-link"><sup>(TRC)</sup></a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Копье церкви/Копье церкви (мини).png" title="Копьё церкви"></div>
                    <div class="bosses-link"><a href="Копьё церкви.php" title="Копьё церкви">Копьё церкви</a> <a href="../The Ringed City.php" title="The Ringed City" class="dlc-link"><sup>(TRC)</sup></a></div>
                </div>
                <div>
                    <div class="bosses-image-container"><img src="../../../assets/games/Dark Souls III/bosses/Рыцарь-раб Гаэль/Рыцарь-раб Гаэль (мини).png" title="Рыцарь-раб Гаэль"></div>
                    <div class="bosses-link"><a href="Рыцарь-раб Гаэль.php" title="Рыцарь-раб Гаэль">Рыцарь-раб Гаэль</a> <a href="../The Ringed City.php" title="The Ringed City" class="dlc-link"><sup>(TRC)</sup></a></div>
                </div>
            </div>
            <h2>Примечания</h2>
            <ul>
                <li>Не все боссы обязательны для прохождения, некоторых можно обойти или вовсе избежать встречи с ними.</li>
                <li>Когда босс и игрок одновременно убивают друг друга, то игрок возрождается в угольной форме, однако, души будут находиться там, где вы умерли на арене с боссом.</li>
                <li>Если после <a href="#">смерти</a> хозяина мира союзный фантом добьёт босса, то убийство не засчитают, а босс останется жив. Однако в отличие от предыдущих частей, игра имеет некоторую задержку при подтверждении вашей смерти (медленное анимационное появление надписи на экране <b>Вы погибли</b>), и пока игра не ушла на промежуточный экран загрузки, отправляя вас к <a href="#">костру</a>, есть вероятность, что убийство босса может быть засчитано.</li>
                <li>Благодаря этой же задержке после победы над боссом идёт достаточно длинная пауза до выдачи душ, во время которой неплохим вариантом будет надеть предметы, которые повышают количество получаемых душ. Максимальное повышение от базового количества: 291.6% душ. Достигается экипировкой <a href="#">щита желания</a>, <a href="#">символа алчности</a>, <a href="#">посоха Побирушки</a> и <a href="#">кольца с серебряным змеем</a> +3.</li>
                <li>Если в момент смерти от рук босса нажать комбинацию клавиш Alt+F4, то при следующем заходе в игру потерянные души будут возле туманных врат, а не на месте смерти.</li>
            </ul>
        </div>
    </main>
    <?php
        require("../../../footer.php");
    ?>