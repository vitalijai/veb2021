<?php

$conect = mysqli_connect('mysql', 'root', 'password', 'database');
if(!$conect)
{
    die('Error connect to db');
}
?>