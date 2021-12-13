<?php
session_start();
?>
	
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
            <title>Всем Дом</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/adding_object.css" />
<link rel="icon" href="vsem_dom2.ico" type="image/x-icon">
</head>
 
<body>
<?php
include("php/header.php");
?>

  <main>
    <form action="/php/add_object.php" method="post" enctype="multipart/form-data">
      <div class="registration_form">
        <h2>Заполните все поля для реестрации обьекта</h2>
        <label for="region">Область</label>
        <input list="region-list" name="region" id="region"/>
        <datalist id="region-list">
        </datalist>
        <label>Город</label>
        <input list="city-list" name="city" id="city" />
        <datalist id="city-list">
        
        </datalist>
        <label >Улица</label>
        <input  name="street">
        <label for="house_number">№ дома</label>
        <input name="number">
        <label >Количество комнат</label>
        <input  name="number_of_rooms">
        <label >Площадь(м2)</label>
        <input  name="area">
        <label >Цена</label>
        <input  name="price">
        <label >Описание обьекта</label>
        <textarea name="specification" id="" cols="30" rows="10"></textarea>
        <label >Фото</label>
        <input type="file" name="image[]" accept="image/jpeg,image/png" id="image" multiple>
        <button type="submit">Отправить данные</button>

      </div>
    </form>
   
  </main>

  <?php
  include("footer.php");
  ?>
  <script src="/js/5formatted.js"></script>
</body>
</html>