<?php
session_start();

$_SESSION =  array();
$_COOKIE = array();

header('Location: /');
?>