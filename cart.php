<?php
session_start();
include("bd.php");
$_SESSION['sum'] = 0;
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
        </div>
    </header>

    <main class="cart">
        <div class="container">
            <div class="cart__inner">
                <div class="cart-order">
                    <h1 class="cart-order__title">Корзина</h1>
                    <div class="cart-order__inner">
                        <div class="cart-order__cards">
                            <?php 
                            if (isset($_SESSION['goods'])) {
                                foreach($_SESSION['goods'] as $id => $val) {
                                    $result = mysqli_query($db,"SELECT * FROM products WHERE id='$id'");
                                    $row = mysqli_fetch_array($result);
                                    $_SESSION['sum'] += $row['price'];
                                    echo '<div class="cart-order__item">';
                                    echo '<img src="img/sokkkkkk.png" alt="" class="cart-order__img">';
                                    echo '<div class="cart-order__desc">';
                                    echo '<div class="cart-order__item-title">'.$row['name'].'</div>';
                                    echo '<div class="cart-order__price">'.$row['price'].'</div>';
                                    echo '<div class="cart-order__add">Количество < <span>'.$val.'</span> ></div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div class="cart-order__sum">
                        <div class="cart-order__sum-name">
                            <div class="cart-order__sum-item">Стоимость</div>
                            <div class="cart-order__sum-item">Скидка</div>
                            <div class="cart-order__sum-item">Итого</div>
                        </div>
                        <div class="cart-order__sum-artic">
                            <div class="cart-order__artic-item"><?=$_SESSION['sum']?>₽</div>
                            <div class="cart-order__artic-item">0%</div>
                            <div class="cart-order__artic-item"><?=$_SESSION['sum']?>₽</div>
                        </div>
                    </div>
                </div>

                <form action="makeorder.php" method="post" class="payment">
                    <h2 class="payment__title">Оплата</h2>
                    <input type="text" placeholder="Имя" name="name" id="name" class="payment__input">
                    <input type="phone" placeholder="Номер телефона" name="phone" id="phone" class="payment__input">
                    <input type="text" placeholder="Адрес доставки" name="adres" id="adres" class="payment__input">
                    <input type="submit" value="Перейти к оплате" class="order-button">
                </form> 
            </div>
        </div>
    </main>
    <footer class="footer footer_gray-bg">
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