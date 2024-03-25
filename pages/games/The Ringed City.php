<?php
    session_start();
    $title = "The Ringed City";

    require("../../header.php");
?>

    <main>
        <div class="main-page-content">
            <h1>The Ringed City</h1>
            <div class="main-page-info">
                <table>
                    <tr>
                        <th colspan="2">The Ringed City</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="border: 0;"><img src="../../assets/games/Dark Souls III/The_Ringed_City.png" style="width: 300px;"></td>
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
                        <td>Юка Китамура</td>
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
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">28 марта 2017</td>
                    </tr>
                    <tr>
                        <td>Xbox One:</td>
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">28 марта 2017</td>
                    </tr>
                    <tr>
                        <td>PC:</td>
                        <td><img src="../../assets/World flag.png" title="Мир" class="flag">28 марта 2017</td>
                    </tr>
                </table>
            </div>
            <p><b>The Ringed City</b> (рус. <i>Город за стеной</i>) &mdash; второе и заключительное дополнение к игре <a href="Dark Souls III.php">Dark Souls III</a>. Дата выхода &mdash; 28 марта 2017 года на <b>PC</b>, <b>PS4</b> и <b>Xbox One</b>.</p>
            <h2>Сюжет</h2>
            <p>Данная часть является непосредственным продолжением и событий <a href="Ashes of Ariandel.php">первого дополнения</a>, и сюжета основной игры.</p>
            <p>Вы окажетесь в конце Эры Огня, когда пламя почти погасло, а все королевства превратились в безликую <a href="#">массу отбросов</a>. Преследуя <a href="#">рыцаря-раба Гаэля</a>, вы попадёте в <a href="#">Город за стеной</a>, родину пигмеев. Здесь Гаэль ищет <a href="#">Кровь тёмной души</a> &mdash; пигмент для новой картины его <a href="#">госпожи</a> в Арианделе.</p>
            <h2>Вход в DLC</h2>
            <p>Вход располагается либо в <a href="#">финальной локации</a> оригинальной игры: от костра <b>Печь Первого пламени</b> повернитесь назад &mdash; там будет располагаться ещё один костёр, который перенесёт игрока в <a href="#">Груду отбросов</a>; либо на арене битвы с <a href="bosses/Отец Ариандель и сестра Фриде.php">Отцом Арианделем и сестрой Фриде</a> после победы над ними.</p>
            <h2>Предметы</h2>
            <div class="table-switch-items">
                <div class="table-switch-items-category selected-cat" id="weapons-btn">Оружие</div>
                <div class="table-switch-items-category unselected-cat" id="armor-btn">Броня</div>
                <div class="table-switch-items-category unselected-cat" id="rings-btn">Кольца</div>
                <div class="table-switch-items-category unselected-cat" id="souls-btn">Души</div>
                <div class="table-switch-items-category unselected-cat" id="spells-btn">Заклинания</div>
                <div class="table-switch-items-category unselected-cat" id="keys-btn">Ключевые</div>
                <div class="table-switch-items-category unselected-cat" id="items-btn">Прочие предметы</div>
            </div>
            <table class="table-switch" id="weapons-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/halberds/Перистый двуручный меч.png" title="Перистый двуручный меч"><br><a href="#">Перистый двуручный меч</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/daggers/Аквамариновый кинжал.png" title="Аквамариновый кинжал"><br><a href="#">Аквамариновый кинжал</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/daggers/Мрачный серп.png" title="Мрачный серп"><br><a href="#">Мрачный серп</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/staves/Сумрачный посох.png" title="Сумрачный посох"><br><a href="#">Сумрачный посох</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/pikes/Боевое знамя Лотрика.png" title="Боевое знамя Лотрика"><br><a href="#">Боевое знамя Лотрика</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greatshields/Гигантский щит-дверь.png" title="Гигантский щит-дверь"><br><a href="#">Гигантский щит-дверь</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/curved greatswords/Изогнутый двуручный меч Харальда.png" title="Изогнутый двуручный меч Харальда"><br><a href="#">Изогнутый двуручный меч Харальда</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/curved swords/Метка демона.png" title="Метка демона"><br><a href="#">Метка демона</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/sacred chimes/Священный колокольчик Филианоры.png" title="Священный колокольчик Филианоры"><br><a href="#">Священный колокольчик Филианоры</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/straight swords/Меч рыцаря из города за стеной.png" title="Меч рыцаря из города за стеной"><br><a href="#">Меч рыцаря из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/pikes/Копье рыцарей из города за стеной.png" title="Копьё рыцарей из города за стеной"><br><a href="#">Копьё рыцарей из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/ultra greatswords/Мечи рыцарей из города за стеной.png" title="Мечи рыцарей из города за стеной"><br><a href="#">Мечи рыцарей из города за стеной</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/great hammers/Молот Ледо.png" title="Молот Ледо"><br><a href="#">Молот Ледо</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/bows/Березовый лук.png" title="Берёзовый лук"><br><a href="#">Берёзовый лук</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/small shields/Щит с драконьей головой.png" title="Щит с драконьей головой"><br><a href="#">Щит с драконьей головой</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greatshields/Большой щит с драконьей головой.png" title="Большой щит с драконьей головой"><br><a href="#">Большой щит с драконьей головой</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/halberds/Распятый Безумный король.png" title="Распятый Безумный король"><br><a href="#">Распятый Безумный король</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/katanas/Ветхий клинок.png" title="Ветхий клинок"><br><a href="#">Ветхий клинок</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/greatswords/Двуручный меч Гаэля.png" title="Двуручный меч Гаэля"><br><a href="#">Двуручный меч Гаэля</a></td>
                    <td><img src="../../assets/games/Dark Souls III/weapons/crossbows/Скорострельный арбалет.png" title="Скорострельный арбалет"><br><a href="#">Скорострельный арбалет</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/weapons/staves/Правая рука проповедника.png" title="Правая рука проповедника"><br><a href="#">Правая рука проповедника</a></td>
                </tr>
            </table>
            <table class="table-switch" id="armor-cat-5-elem">
                <tr>
                    <td><a href="#" title="Сет пустынной ведьмы">Сет пустынной ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет пустынной ведьмы/Капюшон пустынной ведьмы.png" title="Капюшон пустынной ведьмы"><br><a href="#">Капюшон пустынной ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет пустынной ведьмы/Одеяние пустынной ведьмы.png" title="Одеяние пустынной ведьмы"><br><a href="#">Одеяние пустынной ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет пустынной ведьмы/Перчатки пустынной ведьмы.png" title="Перчатки пустынной ведьмы"><br><a href="#">Перчатки пустынной ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет пустынной ведьмы/Юбка пустынной ведьмы.png" title="Юбка пустынной ведьмы"><br><a href="#">Юбка пустынной ведьмы</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Обычный старинный сет">Обычный старинный сет</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Обычный старинный сет/Обычная старинная куртка.png" title="Обычная старинная куртка"><br><a href="#">Обычная старинная куртка</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Обычный старинный сет/Фиолетовые обмотки.png" title="Фиолетовые обмотки"><br><a href="#">Фиолетовые обмотки</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Обычный старинный сет/Набедренная повязка.png" title="Набедренная повязка"><br><a href="#">Набедренная повязка</a></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет Черной Ведьмы">Сет Черной Ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Черной Ведьмы/Шляпа Черной Ведьмы.png" title="Шляпа Чёрной Ведьмы"><br><a href="#">Шляпа Чёрной Ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Черной Ведьмы/Вуаль Черной Ведьмы.png" title="Вуаль Чёрной Ведьмы"><br><a href="#">Вуаль Чёрной Ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Черной Ведьмы/Одеяние Черной Ведьмы.png" title="Одеяние Чёрной Ведьмы"><br><a href="#">Одеяние Чёрной Ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Черной Ведьмы/Ленты Черной Ведьмы.png" title="Ленты Чёрной Ведьмы"><br><a href="#">Ленты Чёрной Ведьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Черной Ведьмы/Штаны Черной Ведьмы.png" title="Штаны Чёрной Ведьмы"><br><a href="#">Штаны Чёрной Ведьмы</a></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет Ширы">Сет Ширы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Ширы/Корона Ширы.png" title="Корона Ширы"><br><a href="#">Корона Ширы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Ширы/Доспех Ширы.png" title="Доспех Ширы"><br><a href="#">Доспех Ширы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Ширы/Перчатки Ширы.png" title="Перчатки Ширы"><br><a href="#">Перчатки Ширы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/light sets/Сет Ширы/Сапоги Ширы.png" title="Сапоги Ширы"><br><a href="#">Сапоги Ширы</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет Лаппа">Сет Лаппа</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Лаппа/Шлем Лаппа.png" title="Шлем Лаппа"><br><a href="#">Шлем Лаппа</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Лаппа/Доспех Лаппа.png" title="Доспех Лаппа"><br><a href="#">Доспех Лаппа</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Лаппа/Наручи Лаппа.png" title="Наручи Лаппа"><br><a href="#">Наручи Лаппа</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Лаппа/Поножи Лаппа.png" title="Поножи Лаппа"><br><a href="#">Поножи Лаппа</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет рыцаря из города за стеной">Сет рыцаря из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря из города за стеной/Капюшон рыцаря из города за стеной.png" title="Капюшон рыцаря из города за стеной"><br><a href="#">Капюшон рыцаря из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря из города за стеной/Доспех рыцаря из города за стеной.png" title="Доспех рыцаря из города за стеной"><br><a href="#">Доспех рыцаря из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря из города за стеной/Наручи рыцаря из города за стеной.png" title="Наручи рыцаря из города за стеной"><br><a href="#">Наручи рыцаря из города за стеной</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет рыцаря из города за стеной/Поножи рыцаря из города за стеной.png" title="Поножи рыцаря из города за стеной"><br><a href="#">Поножи рыцаря из города за стеной</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Железный сет драконоборца">Железный сет драконоборца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Железный сет драконоборца/Железный шлем драконоборца.png" title="Железный шлем драконоборца"><br><a href="#">Железный шлем драконоборца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Железный сет драконоборца/Железный нагрудник драконоборца.png" title="Железный нагрудник драконоборца"><br><a href="#">Железный нагрудник драконоборца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Железный сет драконоборца/Железные наручи драконоборца.png" title="Железные наручи драконоборца"><br><a href="#">Железные наручи драконоборца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Железный сет драконоборца/Железные поножи драконоборца.png" title="Железные поножи драконоборца"><br><a href="#">Железные поножи драконоборца</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет руин">Сет руин</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет руин/Шлем руин.png" title="Шлем руин"><br><a href="#">Шлем руин</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет руин/Доспех руин.png" title="Доспех руин"><br><a href="#">Доспех руин</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет руин/Наручи руин.png" title="Наручи руин"><br><a href="#">Наручи руин</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет руин/Поножи руин.png" title="Поножи руин"><br><a href="#">Поножи руин</a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href="#" title="Сет Легиона Харальда">Сет Легиона Харальда</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Легиона Харальда/Доспех Легиона Харальда.png" title="Доспех Легиона Харальда"><br><a href="#">Доспех Легиона Харальда</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Легиона Харальда/Наручи Легиона Харальда.png" title="Наручи Легиона Харальда"><br><a href="#">Наручи Легиона Харальда</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/medium sets/Сет Легиона Харальда/Поножи Легиона Харальда.png" title="Поножи Легиона Харальда"><br><a href="#">Поножи Легиона Харальда</a></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Остальные вещи</td>
                    <td><img src="../../assets/games/Dark Souls III/armor/unique/Маска слепца.png" title="Маска слепца"><br><a href="#">Маска слепца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/armor/unique/Голова белого проповедника.png" title="Голова белого проповедника"><br><a href="#">Голова белого проповедника</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table-switch" id="rings-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо благосклонности.png" title="Кольцо благосклонности +3"><br><a href="#">Кольцо благосклонности +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо стальной защиты.png" title="Кольцо стальной защиты +3"><br><a href="#">Кольцо стальной защиты +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Серебряное кольцо жадного змея.png" title="Серебряное кольцо жадного змея +3"><br><a href="#">Серебряное кольцо жадного змея +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Золотое кольцо жадного змея.png" title="Золотое кольцо жадного змея +3"><br><a href="#">Золотое кольцо жадного змея +3</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо Хавела.png" title="Кольцо Хавела +3"><br><a href="#">Кольцо Хавела +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо с волком.png" title="Кольцо с волком +3"><br><a href="#">Кольцо с волком +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо злого глаза.png" title="Кольцо злого глаза +3"><br><a href="#">Кольцо злого глаза +3</a></td>
                    <td><img src="../../assets/games/Dark Souls III/rings/Кольцо с зеленоцветом.png" title="Кольцо с зеленоцветом +3"><br><a href="#">Кольцо с зеленоцветом +3</a></td>
                </tr>
            </table>
            <table class="table-switch" id="souls-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/souls/Душа Демона-принца.png" title="Душа Демона-принца"><br><a href="#">Душа Демона-принца</a></td>
                    <td><img src="../../assets/games/Dark Souls III/souls/Душа Мидира Пожирателя Тьмы.png" title="Душа Мидира Пожирателя Тьмы"><br><a href="#">Душа Мидира Пожирателя Тьмы</a></td>
                    <td><img src="../../assets/games/Dark Souls III/souls/Душа рыцаря-раба Гаэля.png" title="Душа рыцаря-раба Гаэля"><br><a href="#">Душа рыцаря-раба Гаэля</a></td>
                </tr>
            </table>
            <table class="table-switch" id="spells-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/spells/miracles/Направленное исцеление.png" title="Направленное исцеление"><br><a href="#">Направленное исцеление</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/pyromancy/Веер пламени.png" title="Веер пламени"><br><a href="#">Веер пламени</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/sorceries/Отбросы великой души.png" title="Отбросы великой души"><br><a href="#">Отбросы великой души</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/spells/miracles/Громовая стрела.png" title="Громовая стрела"><br><a href="#">Громовая стрела</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/pyromancy/Бурлящий хаос.png" title="Бурлящий хаос"><br><a href="#">Бурлящий хаос</a></td>
                    <td><img src="../../assets/games/Dark Souls III/spells/sorceries/Древний Лунный свет.png" title="Древний Лунный свет"><br><a href="#">Древний Лунный свет</a></td>
                </tr>
            </table>
            <table class="table-switch" id="keys-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/keys/Флажок посланника.png" title="Флажок посланника"><br><a href="#">Флажок посланника</a></td>
                    <td><img src="../../assets/games/Dark Souls III/keys/Пепел старухи.png" title="Пепел старухи"><br><a href="#">Пепел старухи</a></td>
                    <td><img src="../../assets/games/Dark Souls III/keys/Весенняя Роса.png" title="Весенняя Роса"><br><a href="#">Весенняя Роса</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/keys/Кровь темной души.png" title="Кровь тёмной души"><br><a href="#">Кровь тёмной души</a></td>
                    <td><img src="../../assets/games/Dark Souls III/keys/Кости чемпиона.png" title="Кости чемпиона"><br><a href="#">Кости чемпиона</a></td>
                    <td></td>
                </tr>
            </table>
            <table class="table-switch" id="items-cat">
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/items/covenants/Копья церкви/Украшение копья Филианоры.png" title="Украшение копья Филианоры"><br><a href="#">Украшение копья Филианоры</a></td>
                    <td><img src="../../assets/games/Dark Souls III/items/covenants/Копья церкви/Фрагмент ритуального копья.png" title="Фрагмент ритуального копья"><br><a href="#">Фрагмент ритуального копья</a></td>
                    <td><img src="../../assets/games/Dark Souls III/items/covenants/Копья церкви/Фрагмент божественного копья.png" title="Фрагмент божественного копья"><br><a href="#">Фрагмент божественного копья</a></td>
                </tr>
                <tr>
                    <td><img src="../../assets/games/Dark Souls III/items/covenants/Копья церкви/Копья церкви.png" title="Копья церкви"><br><a href="#">Копья церкви</a></td>
                    <td><img src="../../assets/games/Dark Souls III/items/Лезвия стражей церкви.png" title="Лезвия стражей церкви"><br><a href="#">Лезвия стражей церкви</a></td>
                    <td></td>
                </tr>
            </table>
            <h2>Локации</h2>
            <ul>
                <li><a href="#">Груда отбросов</a></li>
                <li><a href="#">Город за стеной</a></li>
                <li><a href="#">Поединок нежити</a></li>
            </ul>
            <h2>Персонажи</h2>
            <ul>
                <li><a href="#">Карга с каменным горбом</a></li>
                <li><a href="#">Лапп, утративший память</a></li>
                <li><a href="#">Пустынная ведьма Зои</a></li>
                <li><a href="#">Владыка пигмеев</a></li>
                <li><a href="#">Шира, рыцарь Филианоры</a></li>
                <li><a href="#">Принцесса Филианора</a></li>
                <li><a href="#">Саранча-проповедник</a></li>
                <li><a href="#">Серебряный рыцарь Ледо</a> (фантом)</li>
                <li><a href="#">Стонущий рыцарь</a> (фантом)</li>
                <li><a href="#">Искатель отверженных</a> (фантом)</li>
            </ul>
            <h2>Противники</h2>
            <h3>Рядовые противники</h3>
            <ul>
                <li><a href="#">Обитатель Глубин</a></li>
                <li><a href="#">Рыцарь Лотрика</a> (заросший корнями)</li>
                <li><a href="#">Рыцарь легиона Харальда</a></li>
                <li><a href="#">Полый раб</a></li>
                <li><a href="#">Ядовитый рогатый жук</a></li>
                <li><a href="#">Гигант-судья</a></li>
                <li><a href="#">Скелет</a> (заросший корнями)</li>
                <li><a href="#">Полый из города за стеной</a></li>
                <li><a href="#">Клирик из города за стеной</a></li>
                <li><a href="#">Рыцарь из города за стеной</a></li>
                <li><a href="#">Белоликая саранча</a></li>
                <li><a href="#">Кристальная ящерка</a></li>
            </ul>
            <h3>Мини-боссы</h3>
            <ul>
                <li><a href="#">Ангел</a></li>
                <li><a href="#">Мимик</a></li>
                <li><a href="#">Доспехи драконоборца</a></li>
                <li><b>Мидир Пожиратель Тьмы</b></li>
            </ul>
            <h3>Боссы</h3>
            <ul>
                <li><a href="bosses/Демон-принц.php">Демон-принц</a></li>
                <li><a href="bosses/Копьё церкви.php">Копьё Церкви</a></li>
                <li><a href="bosses/Мидир Пожиратель Тьмы.php">Мидир Пожиратель Тьмы</a></li>
                <li><a href="bosses/Рыцарь-раб Гаэль.php">Рыцарь-раб Гаэль</a></li>
            </ul>
            <h2>Галерея</h2>
            <div class="gallery1">
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_1.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_1.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_2.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_2.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_3.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_3.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_4.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_4.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_5.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_5.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_6.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_6.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_7.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_7.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_8.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_8.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_9.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_9.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_10.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_10.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_11.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_11.png"></a>
                <a href="../../assets/games/Dark Souls III/The_Ringed_City_12.png" target="_blank"><img src="../../assets/games/Dark Souls III/The_Ringed_City_12.png"></a>
            </div>
        </div>
    </main>
    <script src="../../script/trc-items-table-switch.js"></script>
    <?php
        require("../../footer.php");
    ?>