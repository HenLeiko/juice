<?php
include("bd.php");
$query = "SELECT * FROM products";
$result = mysqli_query($db,$query);
$myrow = mysqli_fetch_array($result);
foreach ($result as $item):?>

<div class="menu-cards__item">
    <img src="<?=$item['img']?>" alt="АХАХАХ ещё сок" class="menu-cards__img">
    <div class="menu-cards__desc-wrapper">
        <div class="menu-cards__title"><?=$item['name']?></div>
        <div class="menu-cards__subtitle"><?$item['product']?></div>
        <div class="menu-cards__info-wrapper">
            <div class="menu-cards__price"><?=$item['price']?></div>
            <img src="img/Кнопка +.png" alt="Добавить" class="menu-cards__add-button">
        </div>
    </div>
</div>

<?php endforeach; ?>