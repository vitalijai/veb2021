<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <form action="index.html" method="post">
      <div class="registration_form">
        <h2>Заполните все поля для реестрации обьекта</h2>
        <label for="region">Область</label>
        <input list="region-list" name="region" />
        <datalist id="region-list">
          <option value=""></option>
        </datalist>
        <label>Город</label>
        <input list="city-list" name="city" />
        <datalist id="city-list">
          <option value=""></option>
        </datalist>
        <label >Улица</label>
        <input type="text" id="street">
        <label for="house_number">№ дома</label>
        <input name="number">
        <label >Количество комнат</label>
        <input type="text" id="number_of_rooms">
        <label >Площадь(м2)</label>
        <input type="text" id="area">
        <label >Цена</label>
        <input type="text" id="price">
        <label >Описание обьекта</label>
        <textarea name="specification" id="" cols="30" rows="10"></textarea>
        <label >Фото</label>
        <input type="file" name="file[]" accept="image/jpeg,image/png" id="image" multiple>
        <button type="submit">Отправить данные</button>

      </div>
    </form>
   
  </main>

  <footer>
    <div>
      © 2021 Всем Дом
    </div>
    
    <a class="nav_linq" href="https://t.me/Z_L_O_J">Обратная связь</a>
  </footer>
		 
</body>
</html>