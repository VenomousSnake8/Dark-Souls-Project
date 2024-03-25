<?php
    session_start();
    $title = "Ashes of Ariandel";

    require("../../header.php");
?>

    <main>
        <div class="main-page-content">
            <h1>Ashes of Ariandel</h1>
            <div class="main-page-info">
                <table>
                    <tr>
                        <th colspan="2">Ashes of Ariandel</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: 0;"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel.png" style="width: 300px;"></td>
                    </tr>
                    <tr>
                        <td>Разработчик:</td>
                        <td>FromSoftware</td>
                    </tr>
                    <tr>
                        <td>Директор:</td>
                        <td>Хидетака Миядзаки<br>Исаму Окано<br>Юи Танимура</td>
                    </tr>
                    <tr>
                        <td>Издатель:</td>
                        <td><img src="../../assets/Japanese flag.png" title="Япония" class="flag">FromSoftware<br><img src="../../assets/World flag.png" title="Мир" class="flag">Namco Bandai Games<br><img src="../../assets/Russian flag.png" title="Россия" class="flag">1С-СофтКлаб</td>
                    </tr>
                    <tr>
                        <td>Композитор:</td>
                        <td>Мотои Сакураба<br>Юка Китамура</td>
                    </tr>
                    <tr>
                        <td>Режим игры:</td>
                        <td>Однопользовательский<br>Многопользовательский</td>
                    </tr>
                    <tr>
                        <td>Жанр:</td>
                        <td>action/RPG</td>
                    </tr>
                    <tr>
                        <td colspan="2">Дата выхода</td>
                    </tr>
                    <tr>
                        <td>PlayStation 4:</td>
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">25 октября 2016</td>
                    </tr>
                    <tr>
                        <td>Xbox One:</td>
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">25 октября 2016</td>
                    </tr>
                    <tr>
                        <td>PC:</td>
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">25 октября 2016</td>
                    </tr>
                </table>
            </div>
            <p><b>Ashes of Ariandel</b> (рус. <i>Прах Арианделя</i>) &mdash; первое дополнение к игре <a href="Dark Souls III.php">Dark Souls III</a>. Официальной датой релиза является 25 октября 2016 на <b>PC</b>, <b>PS4</b> и <b>Xbox One</b>, однако, из-за логистической ошибки, некоторые пользователи Xbox One смогли получить DLC ещё 21 октября.</p>
            <h2>Сюжет</h2>
            <p>Есть легенда, что когда <a href="locations/Нарисованный мир Арианделя.php">Нарисованный мир</a> начнёт гнить, должны явиться двое пепельных и сжечь его дотла. В поисках второго пепельного в <a href="locations/Храм глубин.php">Храм Глубин</a> забредает <a href="bosses/Рыцарь-раб Гаэль.php">рыцарь Гаэль</a>. Он хочет, чтобы вы выжгли гниль и показали пламя <a href="#">его госпоже</a>; только познав огонь, она сможет нарисовать новый мир. Но осторожнее, <a href="bosses/Отец Ариандель и сестра Фриде.php">не все предпочли</a> огонь гниению.</p>
            <h2>Вход в DLC</h2>
            <p>Поговорите с <a href="bosses/Рыцарь-раб Гаэль.php">Гаэлем</a> в <a href="locations/Храм глубин.php">Храме глубин</a> у <a href="#">костра</a> <b>Часовня очищения</b>, и вас перенесёт в DLC. Если вы уже побывали в <a href="locations/Город за стеной.php">Городе за стеной</a>, то в Храме Глубин его не окажется, но на алтаре будет лежать кусок холста, через который можно попасть в Нарисованный мир Арианделя.</p>
            <h2>Предметы</h2>
            <div class="table-switch-items">
                <div class="table-switch-items-category selected-cat" id="weapons-btn">Оружие</div>
                <div class="table-switch-items-category unselected-cat" id="armor-btn">Броня</div>
                <div class="table-switch-items-category unselected-cat" id="rings-btn">Кольца</div>
                <div class="table-switch-items-category unselected-cat" id="souls-btn">Души</div>
                <div class="table-switch-items-category unselected-cat" id="spells-btn">Заклинания</div>
                <div class="table-switch-items-category unselected-cat" id="keys-btn">Ключевые</div>
            </div>
            <table class="table-switch" id="weapons-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greatswords/Ониксовый клинок.png" title="Ониксовый клинок"><br><a href="#">Ониксовый клинок</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/claws/Когти ворона.png" title="Когти ворона"><br><a href="#">Когти ворона</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/thrusting swords/Перья ворона.png" title="Перья ворона"><br><a href="#">Перья ворона</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/straight swords/Храброе сердце.png" title="Храброе сердце"><br><a href="#">Храброе сердце</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/spears/Копье преследователя.png" title="Копьё преследователя"><br><a href="#">Копьё преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/curved swords/Сабля преследователя.png" title="Сабля преследователя"><br><a href="#">Сабля преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/torches/Факел преследователя.png" title="Факел преследователя"><br><a href="#">Факел преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/medium shields/Щит преследователя.png" title="Щит преследователя"><br><a href="#">Щит преследователя</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/axes/Милвудская секира.png" title="Милвудская секира"><br><a href="#">Милвудская секира</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greataxes/Ненасытная Земля.png" title="Ненасытная Земля"><br><a href="#">Ненасытная Земля</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/great hammers/Сотрясатель камней.png" title="Сотрясатель камней"><br><a href="#">Сотрясатель камней</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/medium shields/Щит Божественного дуба.png" title="Щит Божественного дуба"><br><a href="#">Щит Божественного дуба</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greatbows/Милвудский большой лук.png" title="Милвудский большой лук"><br><a href="#">Милвудский большой лук</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/arrows/Милвудская большая стрела.png" title="Милвудская большая стрела"><br><a href="#">Милвудская большая стрела</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/whips/Роза Арианделя.png" title="Роза Арианделя"><br><a href="#">Роза Арианделя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/reapers/Большая коса Фриде.png" title="Большая коса Фриде"><br><a href="#">Большая коса Фриде</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/pyromancy flames/Прощальное пламя пироманта.png" title="Прощальное пламя пироманта"><br><a href="#">Прощальное пламя пироманта</a></td>
                </tr>
            </table>
            <table class="table-switch" id="armor-cat">
                <tr>
                    <td><a href="#" title="Сет преследователя">Сет преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет преследователя/Шлем преследователя.png" title="Шлем преследователя"><br><a href="#">Шлем преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет преследователя/Доспех преследователя.png" title="Доспех преследователя"><br><a href="#">Доспех преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет преследователя/Перчатки преследователя.png" title="Перчатки преследователя"><br><a href="#">Перчатки преследователя</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет преследователя/Сапоги преследователя.png" title="Сапоги преследователя"><br><a href="#">Сапоги преследователя</a></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет Вильгельма">Сет Вильгельма</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Вильгельма/Шлем Вильгельма.png" title="Шлем Вильгельма"><br><a href="#">Шлем Вильгельма</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Вильгельма/Доспех Вильгельма.png" title="Доспех Вильгельма"><br><a href="#">Доспех Вильгельма</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Вильгельма/Наручи Вильгельма.png" title="Наручи Вильгельма"><br><a href="#">Наручи Вильгельма</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Вильгельма/Поножи Вильгельма.png" title="Поножи Вильгельма"><br><a href="#">Поножи Вильгельма</a></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет рыцаря-раба">Сет рыцаря-раба</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря-раба/Капюшон рыцаря-раба.png" title="Капюшон рыцаря-раба"><br><a href="#">Капюшон рыцаря-раба</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря-раба/Доспех рыцаря-раба.png" title="Доспех рыцаря-раба"><br><a href="#">Доспех рыцаря-раба</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря-раба/Наручи рыцаря-раба.png" title="Наручи рыцаря-раба"><br><a href="#">Наручи рыцаря-раба</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря-раба/Поножи рыцаря-раба.png" title="Поножи рыцаря-раба"><br><a href="#">Поножи рыцаря-раба</a></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет посвящённой">Сет посвящённой</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет посвященной/Капюшон посвященной.png" title="Капюшон посвящённой"><br><a href="#">Капюшон посвящённой</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет посвященной/Платье посвященной.png" title="Платье посвящённой"><br><a href="#">Платье посвящённой</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет посвященной/Штаны посвященной.png" title="Штаны посвящённой"><br><a href="#">Штаны посвящённой</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет милвудского рыцаря">Сет милвудского рыцаря</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет милвудского рыцаря/Шлем милвудского рыцаря.png" title="Шлем милвудского рыцаря"><br><a href="#">Шлем милвудского рыцаря</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет милвудского рыцаря/Доспех милвудского рыцаря.png" title="Доспех милвудского рыцаря"><br><a href="#">Доспех милвудского рыцаря</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет милвудского рыцаря/Наручи милвудского рыцаря.png" title="Наручи милвудского рыцаря"><br><a href="#">Наручи милвудского рыцаря</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет милвудского рыцаря/Поножи милвудского рыцаря.png" title="Поножи милвудского рыцаря"><br><a href="#">Поножи милвудского рыцаря</a></td>
                </tr>
            </table>
            <table class="table-switch" id="rings-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо холодящего укуса.png" title="Кольцо холодящего укуса"><br><a href="#">Кольцо холодящего укуса</a></td>
                </tr>
            </table>
            <table class="table-switch" id="souls-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/souls/Душа сестры Фриде.png" title="Душа сестры Фриде"><br><a href="#">Душа сестры Фриде</a></td>
                </tr>
            </table>
            <table class="table-switch" id="spells-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/spells/sorceries/Ледяное оружие.png" title="Ледяное оружие"><br><a href="#">Ледяное оружие</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/sorceries/Леденящая хватка.png" title="Леденящая хватка"><br><a href="#">Леденящая хватка</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/pyromancy/Плывущий хаос.png" title="Плывущий хаос"><br><a href="#">Плывущий хаос</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/miracles/Нимб Белого пути.png" title="Нимб Белого пути"><br><a href="#">Нимб Белого пути</a></td>
                </tr>
            </table>
            <table class="table-switch" id="keys-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/keys/Ключ от устройства.png" title="Ключ от устройства"><br><a href="#">Ключ от устройства</a></td>
                    <td><img src="../../assets/games/Dark Souls III/keys/Пепел капитана.png" title="Пепел капитана"><br><a href="#">Пепел капитана</a></td>
                    <td><img src="../../assets/games/Dark Souls III/keys/Кости чемпиона.png" title="Кости чемпиона"><br><a href="#">Кости чемпиона</a></td>
                </tr>
            </table>
            <h2>Локации</h2>
            <ul>
                <li><a href="locations/Нарисованный мир Арианделя.php">Нарисованный мир Арианделя</a></li>
                <li><a href="locations/Поединок нежити.php">Поединок нежити</a></li>
            </ul>
            <h2>NPC</h2>
            <ul>
                <li><a href="#">Дремлющий отверженный</a></li>
                <li><a href="#">Отверженный ворон-поселенец</a></li>
                <li><a href="#">Художница</a></li>
                <li><a href="#">Сир Вильгельм</a></li>
                <li><a href="#">Сестра Фриде</a></li>
                <li><a href="#">Рыцарь-раб Гаэль</a></li>
                <li><a href="#">Меченый пиромант Даннел</a> (фантом)</li>
            </ul>
            <h2>Противники</h2>
            <h3>Рядовые противники</h3>
            <ul>
                <li><a href="#">Преследователь Фаррона</a></li>
                <li><a href="#">Волк</a></li>
                <li><a href="#">Рыцарь-ворон</a></li>
                <li><a href="#">Демон-ворон</a></li>
                <li><a href="#">Берёзовая леди</a></li>
                <li><a href="#">Милвудский рыцарь</a></li>
                <li><a href="#">Гигантская муха</a></li>
                <li><a href="#">Гниющий ворон</a></li>
                <li><a href="#">Канализационная многоножка</a></li>
                <li><a href="#">Гигантский краб</a></li>
                <li><a href="#">Кристальная ящерка</a></li>
            </ul>
            <h3>Мини-боссы</h3>
            <ul>
                <li><b>Великий волк, хранитель могилы</b></li>
            </ul>
            <h3>Боссы</h3>
            <ul>
                <li><a href="bosses/Хранитель могилы и великий волк.php">Хранитель могилы чемпиона и великий волк, хранитель могилы</a></li>
                <li><a href="bosses/Отец Ариандель и сестра Фриде.php">Отец Ариандель и сестра Фриде</a></li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_1.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_1.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_2.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_2.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_3.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_3.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_4.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_4.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_5.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_5.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_6.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_6.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_7.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_7.png"></a>
                <a href="../../assets/games/Dark Souls III/Ashes_of_Ariandel_8.png" target="_blank"><img src="../../assets/games/Dark Souls III/Ashes_of_Ariandel_8.png"></a>
            </div>
        </div>
    </main>
    <script src="../../script/location-items-table-switch.js"></script>
    <?php
        require("../../footer.php");
    ?>