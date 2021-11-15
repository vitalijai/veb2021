<?php
session_start();

require_once('connect_db.php');

$login = $_POST['email'];
$pass = $_POST['password'];

$hech = sha1($pass);


$user = mysqli_query($conect, "SELECT * FROM `users` WHERE `login` = '$login' AND `hech` = '$hech'");
if (mysqli_num_rows($user) != 1) {
    $_SESSION['message'] ="Неверний логин или пароль";
    header("Location: /");
}
else{
   $user =  mysqli_fetch_assoc($user);
    setcookie('user', $user['name'], time(),"/");
    setcookie('login', $login,time(),"/");
    setcookie('hech', $hech,time(),"/");
    setcookie('id', $user['id'], time(),"/");
    $_SESSION['user'] = $user['name'];
    $_SESSION['id'] = $user['id'];
    header("Location: /");
}
