<?php
session_start();

include("bd.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$adres = $_POST['adres'];
echo '<pre>';
print_r($_POST);
echo '</pre>';
$sql = "INSERT INTO orders (name, phone, adres) VALUES ('$name', '$phone', '$adres')";

if(mysqli_query($db, $sql)){
    echo "Записи успешно добавлены.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($db);
}
header('')