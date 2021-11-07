<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Всем Дом</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/home_page.css">
<link rel="icon" href="vsem_dom.ico" type="image/x-icon">
</head>
 
<body>
<header>
  <a  href="index.html">
     Всем дом </a>
    <nav class = "nav">
        <a  href="adding_object.html">Зарегистрировать свой обьект</a>
        <a  href="login.html">Вход</a>
        <a  href="account_registration.html">Регистрация</a>
        <a  href="statistics.html">Цены на недвижимость</a>
    </nav>
</header>

  <main>
    <div class ="search_box">
      <h1 id = "head_search">Что вам нужно?</h1>
      <form class="c" id="search" action="apartment_selection.html"> 
        <h3>Город</h3>
        <input list="city-list" name="city">
        <datalist id="city-list">
          <option value=""></option>
        </datalist>
        <section></section>
        <h3>Количество комнат</h3>
        <input list="number" name="number_of_rooms">
        <datalist id="number">
          <option value=""></option>
        </datalist>
        <h3>Минимальная цена поиска</h3>
        <input type="text" name="price">
      </form>
    <button form="search" type="submit">Поиск</button>
    
    </div>
  </main>

  <footer>
      © 2021 Всем Дом
    <a class="nav_linq" href="https://t.me/Z_L_O_J">Обратная связь</a>
  </footer>
	<script src="js/resize.js"></script>
</body>
</html>