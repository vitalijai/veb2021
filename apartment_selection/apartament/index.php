<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Всем Дом</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/apartament.css" />
  <link rel="icon" href="/vsem_dom2.ico" type="image/x-icon">
</head>

<body>
  <?php
  include("../../php/header.php");
  include("../../php/connect_db.php");

  ?>

  <main>
  <div class="content">
    <?php
      $obj = mysqli_query($conect, "SELECT * FROM `object` WHERE `id_object` =".$_GET['id']);
      $obj = mysqli_fetch_all($obj);

      echo ' <div class="object" data-id="'.$obj[0][0].'" data-id_object="'.$obj[0][1].'">';
      echo '  <div class="img1" data-count="'.$obj[0][9].'" data-current_pic="1" data="url(\/uploaded_pictures\/'.$obj[0][1].'\/image1.jpg")">';
      echo '<button class="img_prev">&#10094;</button> <button class="img_next">&#10095;</button> </div>';
      $l = strlen($obj[0][4]);
      echo '<h3>'.$obj[0][2].'</h3>';
      echo '<h3>'.$obj[0][7].' гривен<br>  город '.$obj[0][3].' вул '.substr($obj[0][4], 0, -2).' <br> Номер дома: '.substr($obj[0][4], $l-3, $l-1).'<br> Комнат - '.$obj[0][5].' <br>Общая площадь: '.$obj[0][6].'м2</h3>';
      echo '<p>'.$obj[0][8].'</p> ';
      $obj = mysqli_query($conect, "SELECT * FROM `users` WHERE `id` =".$obj[0][0]);
      $obj = mysqli_fetch_all($obj);
      $fio = $obj[0][3]. ' '.$obj[0][4].' '.$obj[0][5];
      echo '  <p><strong><br>ФИО орендодателя : </strong>'.$fio.'</p> ';
      echo '<p><strong><br>Номер телефона : </strong>'.$obj[0][6].'</p>';
      echo '<p><strong><br>Електронная почта : </strong>'.$obj[0][1].'</p></div>';
      ?>  
</div>
  </main>

  
  <?php
  include("../../footer.php");
  ?>
  <script src="/js/img.js"></script>
</body>

</html>