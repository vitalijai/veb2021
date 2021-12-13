<?php
session_start();
require_once('connect_db.php');
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$telefon = $_POST['telefon'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$user = mysqli_query($conect, "SELECT * FROM `users` WHERE `login` = '$mail'");

if (mysqli_num_rows($user) >  0) {
    $_SESSION['message'] = "Такой логин уже существует";
    header("Location: /account_registration.php");
} else {
    $hech = sha1($password);
    $rez = mysqli_query($conect, "INSERT INTO `users` (`id`, `login`, `hech`, `surname`, `name`, `patronymic`, `telefon`)
 VALUES (NULL, '$mail', '$hech', '$surname', '$name', '$patronymic', '$telefon')");



    if (!$rez)
        die('User adding error');
    else {
        $user = mysqli_query($conect, "SELECT * FROM `users` WHERE `login` = '$mail'");
        $user =  mysqli_fetch_assoc($user);
        $_SESSION['user'] = $name;
        $_SESSION['id'] = $user['id'];
        setcookie('user', $name);
        setcookie('login', $mail);
        setcookie('password', $hech);
        setcookie('id', $user['id']);
        header('Location: /');
    }
}
