<?php
session_start();


require_once('connect_db.php');

$region = $_POST['region'];
$city = $_POST['city'];
$street = $_POST['street'] . ' ' . $_POST['number'];
$number_of_rooms = $_POST['number_of_rooms'];
$area = $_POST['area'];
$price = $_POST['price'];
$specification = $_POST['specification'];
$id = $_SESSION['id'];

$obj = mysqli_query($conect, "SELECT COUNT(*) FROM `object`");
$obj = mysqli_fetch_assoc($obj);

$id_object = 1 + $obj['COUNT(*)'];
$count = count($_FILES['image']['name']);
$rez = mysqli_query($conect, "INSERT INTO `object` (`id`, `id_object`, `region`, `city`, `street`, `number_of_rooms`, `area`, `price`, `specification`, `count_img`) 
VALUES ('$id', $id_object, '$region', '$city', '$street', '$number_of_rooms', '$area', '$price', '$specification', '$count')");

if (!$rez) {
    die("Add object error");
} else {

    $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploaded_pictures/' . $id_object . '/';

    /* if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    $dir = $dir .'/'. $id_object . '/';*/
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

   // $fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
   // $fileCount = iterator_count($fi);


    for ($i = 0; $i < $count; $i++) {
        $c = $i + 1;
        $path = $dir . 'image' . $c . '.jpg';
          move_uploaded_file($_FILES['image']['tmp_name'][$i], $path);
       
    }
}
header('Location: /');
