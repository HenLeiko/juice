<?php
session_start();
include("bd.php");
if (isset($_GET['id'])) {

    if ($_SESSION['goods'] == "") {
         $_SESSION['goods'] = array();
    }
    $id = $_GET['id'];
    $result = mysqli_query($db,"SELECT * FROM products WHERE id='$id'");
    $myrow = mysqli_fetch_array($result);
    $_SESSION['goods'][$id] = $id;
    
}
echo '<pre>';
    print_r($_SESSION['goods']);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuiceA</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header class="header">
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
            <div class="header__wrapper">
                <div class="promo-slogan">
                    <h1 class="promo-slogan__title">Попробуй смузи!</h1>
                    <p class="promo-slogan__subtitle">Мы заботимся о вас, отбирая только лучшие фруты и овощи</p>
                    <input type="submit" value="Заказать" class="order-button">
                </div>
                <div class="promo-product">
                    <div class="promo-product__basement"></div>
                    <h2 class="promo-product__title">Апельсиновый сок</h2>
                    <img class="promo-product__discount" src="img/price.png" alt="discount">
                    <input type="submit" value="Попробовать" class="promo-product__button">
                </div>
                <img class="promo-product__img" src="img/sok.png" alt="promo-stakan">
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- mixer -->
    <section class="mixer">
        <div class="container">
            <h3 class="mixer__title">Собери свой лучший микс!</h3>
            <div class="mixer__subtitle">Добавь любимые фрукты в свой смузи</div>
            <div class="mixer__wrapper">
                <div class="mixer-card">
                    <div class="mixer-card__wrapper">
                        <img src="img/sok.png" alt="shaker" class="mixer-card__img">
                        <div class="mixer-card__desc">Апельсин (0.25л)</div>
                    </div>
                    <p class="mixer-card__price">Итого: 400Руб</p>
                    <input type="submit" value="Заказать" class="order-button">
                </div>

                <div class="mixer-selected">
                    <div class="mixer-selected__row-title">Выбрать объём стакана</div>
                    <div class="mixer-selected__row">
                        <input type="button" value="0,25л" class="mixer-selected__volume">
                        <input type="button" value="0,5л" class="mixer-selected__volume">
                        <input type="button" value="1л" class="mixer-selected__volume">
                    </div>

                    <div class="mixer-selected__row-title">Выбрать фрукт или овощь в свой микс</div>
                    <div class="mixer-selected__row">
                        <img src="img/left-arrow.png" alt="Левая стрелка" class="mixer-selected__arrow">

                        <div class="mixer-selected__card">
                            <div class="mixer-selected__card-inner">
                                <img src="img/banana.png" alt="Банан" class="mixer-selected__card-img">
                                <div class="mixer-selected__card-wrapper">
                                    <div class="mixer-selected__card-title">Банан</div>
                                    <div class="mixer-selected__card-price">75Р</div>
                                </div>
                            </div>
                        </div>

                        <div class="mixer-selected__card">
                            <div class="mixer-selected__card-inner">
                                <img src="img/pear.png" alt="Груша" class="mixer-selected__card-img">
                                <div class="mixer-selected__card-wrapper">
                                    <div class="mixer-selected__card-title">Груша</div>
                                    <div class="mixer-selected__card-price">75Р</div>
                                </div>
                            </div>
                        </div>


                        <div class="mixer-selected__card ">
                            <div class="mixer-selected__card-inner">
                                <img src="img/apple.png" alt="Яблоко" class="mixer-selected__card-img">
                            </div>
                            <div class="mixer-selected__wrapper">
                                <div class="mixer-selected__volume-option">-</div>
                                <div class="mixer-selected__volume-status">25мл</div>
                                <div class="mixer-selected__volume-option">+</div>
                            </div>
                            <input type="submit" value="Добавить" class="order-button">
                        </div>

                        <img src="img/right-arrow.png" alt="Левая стрелка" class="mixer-selected__arrow">
                    </div>

                </div>

            </div>
            <div class="next-catalog">
                <div class="next-catalog__text">Каталог</div>
                <img src="img/down-arrow.png" alt="АХАХАХАХ стрелка" class="next-catalog__arrow">
            </div>
        </div>
        </div>
    </section>
    <!-- /mixer -->

    <!-- catalog -->
    <section class="catalog">
        <div class="catalog__inner">
            <img src="img/Reklamny_blok.png" alt="" class="catalog__img">
        </div>
    </section>
    <!-- /catalog -->

    <!-- menu -->
    <section class="block-menu">
        <div class="container">
            <h3 class="block-title">Меню</h3>
            <div class="block-subtitle">Ассортимент</div>
            <p class="block-desc">Вы можете выбрать готовый продукт или создать свой</p>

            <div class="menu-cards">

                <?php require 'getcards.php'; ?>
                
                <div class="menu-cards__item">
                    <img src="img/Green_Juice_Bottle_I16_2k 1.png" alt="АХАХАХ ещё сок" class="menu-cards__img">
                    <div class="menu-cards__desc-wrapper">
                        <div class="menu-cards__title">Шейк</div>
                        <div class="menu-cards__subtitle">Яблоко</div>
                        <div class="menu-cards__info-wrapper">
                            <div class="menu-cards__price">250Р</div>
                            <a href="?id=1"><img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button"></a>
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
            </div>
            <input type="submit" value="Больше" class="order-button">
        </div>
    </section>
    <!-- /menu -->

    <!-- contacts -->
    <section class="contact-us">
        <div class="container">
            <div class="contact-us__wrapper">
                <div class="contact-us__contacts">
                    <h3 class="contact-us__title">С нами можно<br>связаться</h3>
                    <div class="contact-us__adress">м.Коньково
                        ул.профсоюзная 126к2</div>
                    <div class="contact-us__phone">+7 (929) 635 43 21</div>
                    <div class="contact-us__inst">juice.msk</div>
                </div>
                <form action="" method="post" class="contact-form">
                    <h3 class="contact-form__title">Оставь заявку<br>
                        на прямую доставку</h3>
                    <input type="text" name="name" id="" placeholder="Ваше имя" class="contact-form__input">
                    <input type="email" name="email" id="" placeholder="Ваш E-mail" class="contact-form__input">
                    <input type="phone" name="phone" id="" placeholder="Ваш телефон" class="contact-form__input">
                    <input type="submit" value="Заказать" class="order-button">
                </form>
            </div>
        </div>
    </section>
    <!-- /contacts -->

    <!-- about -->
    <section class="about">
        <div class="container">
            <h3 class="block-title">Работа</h3>
            <div class="block-subtitle">Как мы работаем</div>
            <p class="block-desc">Мы хотим чтоб работать с нами было удобно и приятно</p>
            <div class="about__wrapper">
                <div class="about__item">
                    <div class="about__number">1</div>
                    <div class="about__info">
                        <img src="img/buy.png" alt="" class="about__img">
                        <div class="about__title">Закупаем</div>
                        <div class="about__text">Собственноручно выбираем лучшие овощи и фрукты</div>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__number">2</div>

                    <div class="about__info">
                        <img src="img/box.png" alt="" class="about__img">
                        <div class="about__title">Храним</div>
                        <div class="about__text">Cобственный микроклимат для каждых продуктов</div>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__number">3</div>
                    <div class="about__info">
                        <img src="img/cook.png" alt="" class="about__img">
                        <div class="about__title">Готовим</div>
                        <div class="about__text">По вашему желанию заказ будет приготовлен при вас</div>
                    </div>
                </div>
                <div class="about__item">
                    <div class="about__number">4</div>
                    <div class="about__info">
                        <img src="img/deveil.png" alt="" class="about__img">
                        <div class="about__title">Доставляем</div>
                        <div class="about__text">Наши курьеры доставят заказ в любую точку города</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /about -->

    <section class="faq">
        <div class="container">
            <h3 class="block-title">FAQ</h3>
            <div class="block-subtitle">Часто задаваемые вопросы</div>
            <p class="block-desc">Улыбка клиента лучшая награда для нас</p>
            <div class="faq__menu">
                <div class="faq__item">Общее</div>
                <div class="faq__item">Сервис</div>
                <div class="faq__item">Оплата</div>
                <div class="faq__item">Доставка</div>
                <div class="faq__item">Возврат</div>
            </div>
            <!-- <div class="faq__wrapper-open">
                <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
            </div> -->
            <div class="faq__wrapper">
                <div class="faq__cont">
                    <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                    <img src="img/open-block.png" alt="" class="faq__arrow">
                </div>
                <div class="faq__info">
                    <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
                </div>
            </div>
            <div class="faq__wrapper">
                <div class="faq__cont">
                    <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                    <img src="img/open-block.png" alt="" class="faq__arrow">
                </div>
                <div class="faq__info">
                    <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
                </div>
            </div><div class="faq__wrapper">
                <div class="faq__cont">
                    <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                    <img src="img/open-block.png" alt="" class="faq__arrow">
                </div>
                <div class="faq__info">
                    <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
                </div>
            </div><div class="faq__wrapper">
                <div class="faq__cont">
                    <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                    <img src="img/open-block.png" alt="" class="faq__arrow">
                </div>
                <div class="faq__info">
                    <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
                </div>
            </div><div class="faq__wrapper">
                <div class="faq__cont">
                    <h4 class="faq__title">Lorem ipsum dolor sit amet</h4>
                    <img src="img/open-block.png" alt="" class="faq__arrow">
                </div>
                <div class="faq__info">
                    <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat fringilla velit vestibulum euismod justo magna amet.</p>
                </div>
            </div>
        </div>
    </section>

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
                        <div class="insta-wrapper"><img class="insta" src="img/instagram.png" alt="instagram">juice.msk</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__under"></div>
    </footer>
    <script src="/js/script.js"></script>
</body>

</html>