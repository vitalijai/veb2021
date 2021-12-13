<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Всем Дом</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" type="text/css" href="/css/apartment_selection.css" />
  <link rel="icon" href="/vsem_dom2.ico" type="image/x-icon">
</head>

<body>
  <?php
  include("../php/header.php");
  ?>

  <main>
    <div class="search_parameters">
    <h2>Параметри поиска</h2> <br>
      <?php
      echo '<strong>Область: '.$_GET['region'].'</strong><br>';
      echo '<strong>Город: '.$_GET['city'].'</strong><br>';
      echo '<strong>Количество комнат: '.$_GET['min_number_of_rooms'].' - '.$_GET['max_number_of_rooms'].'</strong><br>';
      echo ' <strong>Цена: '.$_GET['min_prace'].' - '.$_GET['max_prace'].'</strong><br>';
      ?>
      <a class="button" href="../index.php">Назад</a>
    </div>
     <!-- <div class="sort">
      Сортировка:
      <span>Новые</span>
      <span>Дорогие</span>
      <span>Дешевые</span>
    </div>
-->

    <a id="button">&#11165;</a>

    <div class="content">
    <?php
      require_once('../php/connect_db.php');
      $request = "SELECT * FROM `object` WHERE";
      if($_GET['region'])
        $request = $request . " `region` = '".$_GET['region'] . "'";
      else
        $request = $request . " 1";
      if($_GET['city'])
        $request = $request . " AND `city` = '".$_GET['city'] . "'";
      else
        $request = $request . " AND 1";
      if(!$_GET['min_number_of_rooms'])
        $_GET['min_number_of_rooms'] = 0;
      if(!$_GET['min_prace'])
        $_GET['min_prace'] = 0;
      if($_GET['max_number_of_rooms'])
       $request = $request . " AND number_of_rooms BETWEEN ".$_GET['min_number_of_rooms']." AND ".$_GET['max_number_of_rooms'];
      else
        $request = $request . " AND `number_of_rooms` > ".$_GET['min_number_of_rooms'];
     if($_GET['max_prace'])
       $request = $request . " AND `price` BETWEEN ".$_GET['min_prace']." AND ".$_GET['max_prace'];
    else
     $request = $request . " AND `price` > ".$_GET['min_prace'];
    
      $obj = mysqli_query($conect, $request);
      $obj = mysqli_fetch_all($obj);
     for($i = 0; $i < 10/*count($obj)*/; $i++)
     {
     
      echo ' <div class="object" data-id="'.$obj[$i][0].'" data-id_object="'.$obj[$i][1].'">';
      echo '  <div class="img1" data-count="'.$obj[$i][9].'" data-current_pic="1" data="url(\/uploaded_pictures\/'.$obj[$i][1].'\/image1.jpg")">';
      echo '<button class="img_prev">&#10094;</button> <button class="img_next">&#10095;</button> </div>';
      $l = strlen($obj[$i][4]);
      
      echo '<h3><a class="ap" href="http://localhost:8080/apartment_selection/apartament/?id='.$obj[$i][1].'">'.$obj[$i][7].'<br>  м '.$obj[$i][3].' вул '.substr($obj[$i][4], 0, -2).' <br> Номер дома: '.substr($obj[$i][4], $l-3, $l-1).'<br> '.$obj[$i][5].' комната <br>Общая площадь: '.$obj[$i][6].'м2</a></h3>';
      echo '<p><a class="ap" href="http://localhost:8080/apartment_selection/apartament/?id='.$obj[$i][1].'">'.$obj[$i][8].'</a></p> </div>';

     }
      ?>
  <!--<div class="object" data-id="11" data-id_object="1">
        <div class="img1" data-count="5" data-current_pic="1" data="url('/image/бц-краснова.jpg')">
           <button class="img_prev">&#10094;</button>
          <button class="img_next">&#10095;</button>
        </div>
      
        <h3> <a class="ap" href=""> 1000grn <br>
          м Харків вул Пушкінська <br>
          Номер дома: 79/5<br>
          1 комната <br>Общая площадь: 24м2 </a></h3>
        <p> <a class="ap" href=""> супер общага, живу 3 года, всем рекоендую супер общага, живу 3 года, всем рекоендую супер общага, живу 3 года, всем рекоендую
          супер общага, живу 3 года, всем рекоендую супер общага, живу 3 года, всем рекоендую супер общага, живу 3 года</a>
        </p>
       
      </div>-->
    </div>
   
  </main>



  <?php
  include("../footer.php");
  ?>
  <script src="/js/img.js"></script>
  <script src="/js/scrol.js"></script>
</body>

</html>