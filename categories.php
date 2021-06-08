<?php
session_start();
if (isset($_GET['id'])) {

    if ($_SESSION['goods'] == "") {
         $_SESSION['goods'] = array();
    }
    $id = $_GET['id'];
    $_SESSION['goods'][$id] = '1';
    
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JuiceA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="header__top-bar">
                <div class="logo">
                    <img src="img/logo.png" alt="Juice-logo">
                </div>
                <nav class="menu">
                    <a href="index.php" class="menu__item">Главная</a>
                    <a href="categories.php" class="menu__item">Каталог</a>
                    <a href="cart.php" class="menu__item">Корзина</a>
                </nav>

                <div class="contacts">
                    <div class="phone">+7 (929) 635 43 21</div>
                    <div class="insta-wrapper"><img class="insta" src="img/instagram.png" alt="instagram"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <main class="categories">
        <div class="container">
            <div class="categories__wrapper">
                <div class="categories__menu-wrapper">
                    <h1 class="categories__title">Категории</h1>
                    <ul class="categories__menu">
                        <li class="categories__menu-item">Все</li>
                        <li class="categories__menu-item">Смузи</li>
                        <li class="categories__menu-item">Зелёный смузи</li>
                        <li class="categories__menu-item">Шейки</li>
                        <li class="categories__menu-item">Фреши</li>
                        <li class="categories__menu-item">Нарезка</li>
                        <li class="categories__menu-item">Ягоды</li>
                    </ul>
                </div>
                <div class="categories__list">
                    <input type="search" placeholder="Поиск" name="search" id="search" class="categories__search">
                    <div class="menu-cards">
                        <?php require 'getcards.php'; ?>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div>
                        <div class="menu-cards__item">
                            <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                            <div class="menu-cards__desc-wrapper">
                                <div class="menu-cards__title">Шейк</div>
                                <div class="menu-cards__subtitle">Яблоко</div>
                                <div class="menu-cards__info-wrapper">
                                    <div class="menu-cards__price">250Р</div>
                                    <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <img src="img/logo.png" alt="Juice-logo">
                <div class="footer__wrapper">
                    <nav class="menu">
                        <a href="" class="menu__item">Главная</a>
                        <a href="" class="menu__item">Каталог</a>
                        <a href="" class="menu__item">Корзина</a>
                    </nav>
                    <div class="contacts">
                        <div class="phone">+7 (929) 635 43 21</div>
                        <div class="insta-wrapper"><img class="insta" src="img/instagram.png" alt="instagram">juice.msk
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__under"></div>
    </footer>
</body>

</html>