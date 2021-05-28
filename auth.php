<?php

$login = $_POST['login'];
include("bd.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password'])) {
    return ("Логин или пароль неверный.");
} else {

    if ($myrow['password'] == $_POST['password']) {
    $_SESSION['login'] = $login; 

    $_SESSION['id']=$myrow['id']; 
    header ('Location: index.php');
}
else {

return ("Извините, введённый вами login или пароль неверный.");
}
}