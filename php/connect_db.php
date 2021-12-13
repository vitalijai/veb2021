<?php

$conect = mysqli_connect('mysql', 'root', 'password', 'database');
mysqli_set_charset($conect,"utf8");
if(!$conect)
{
    die('Error connect to db');
}
?>