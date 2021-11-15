<?php
session_start();
if ($_SESSION['user']) {
  header("Location: /".$_SERVER["HTTP_REFERER"]);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Всем Дом</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <link rel="icon" href="vsem_dom.ico" type="image/x-icon">
</head>

<body>
  <?php
  include("php/header.php");
  ?>

  <main>
    <form action="/php/login.php" method="POST">
      <h2>Введите данные для входа</h2>
      <label>Електронная почта</label>
      <input type="text" name="email">
      <label>Пароль</label>
      <input type="password" name="password">
      <?php
      if ($_SESSION['message']) {
        echo '<span class="error">' . $_SESSION['message'] . '</span>';
        unset($_SESSION['message']);
      }
      ?>
      <div>
        <button type="button" onclick="document.location='account_registration.php'">Зарегистрироваться</button>
        <button type="submit">Ввойти</button>
      </div>
    </form>

  </main>

  <footer>
    <div>
      © 2021 Всем Дом
    </div>

    <a class="nav_linq" href="https://t.me/Z_L_O_J">Обратная связь</a>
  </footer>
  <script src="js/cookie.js"></script>
</body>

</html>