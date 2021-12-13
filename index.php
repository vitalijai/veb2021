<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
            <title>Всем Дом</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/home_page.css">
<link rel="icon" href="vsem_dom2.ico" type="image/x-icon">
</head>
 
<body>
<?php
include("php/header.php");
?>

  <main>
    <div class ="search_box">
      <h1 id = "head_search">Что вам нужно?</h1>
      <form id="search" action="apartment_selection/" method="GET"> 
        <h3>Область</h3>
        <input list="region_list" name="region" id="region"/>
        <datalist id="region_list">
        <?php
          require_once('php/connect_db.php');
          $obj = mysqli_query($conect, "SELECT DISTINCT region FROM `object` ORDER BY region");
          $i = 0;
          while($r = mysqli_fetch_assoc($obj))
          {
            echo '<option value="'.$r['region'].'" id="'.$i.'"></option>';
            $i++;
          }
          ?>
        </datalist>
        <h3>Город</h3>
        <input list="city-list" name="city">
        <datalist id="city-list">
          
        </datalist>
        <h3>Количество комнат</h3>
        <div>
          <input name="min_number_of_rooms" placeholder="от">
         
          <input name="max_number_of_rooms" placeholder="до">
        </div>
       
        <h3>Бюджет</h3>
        <div>
          <input name="min_prace" placeholder="от">
         
          <input name="max_prace" placeholder="до">
        </div>
        
      </form>
     
      <button form="search" type="submit">Поиск</button>
    
    </div>
  </main>

  <?php
  include("footer.php");
  ?>
  
	<script src="js/resize.js"></script>
  <script src="js/5formatted.js"></script>
</body>
</html>