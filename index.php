<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
      <form id="search" action="apartment_selection/"> 
        <h3>Город</h3>
        <input list="city-list" name="city">
        <datalist id="city-list">
          <?php
          require_once('php/connect_db.php');
          $obj = mysqli_query($conect, "SELECT DISTINCT city FROM `object`");
          while($r = mysqli_fetch_assoc($obj))
          {
            echo '<option value="'.$r['city'].'"></option>';
          }
          ?>
          <option value=""></option>
        </datalist>
        <h3>Количество комнат</h3>
        <input list="number" name="number_of_rooms">
        <datalist id="number">
          <option value=""></option>
        </datalist>
        <h3>Бюджет</h3>
        <input type="text" name="price">
        
      </form>
      <button form="search" type="submit">Поиск</button>
    
    </div>
  </main>

  <?php
  include("footer.html");
  ?>
  
	<script src="js/resize.js"></script>
</body>
</html>