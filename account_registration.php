<?php
session_start();
if ($_SESSION['user']) {
  header("Location: /".$_SERVER["HTTP_REFERER"]);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <title>Всем Дом</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/account_registration.css">
  <link rel="icon" href="vsem_dom.ico" type="image/x-icon">
</head>

<body>
<?php
include("php/header.php");
?>
  <main>
    <form id="form" action="/php/user_registration.php" method="POST">
      <div id="registration_form">
        <h2>Заполните все поля для регистрации аккаунта</h2>
        <label>Фамилия</label>
        <input type="text" name="surname">
        <label>Имя</label>
        <input type="text" name="name">
        <label>Очество</label>
        <input type="text" name="patronymic">
        <label>Номер телефона</label>
        <input type="text" name="telefon">
        <span class="error" aria-live="polite"></span>
        <label>Електронная почта</label>
        <input type="email" name="mail">
        <span class="error" aria-live="polite"></span>
        <label>Пароль</label>
        <input type="text" name="password">
        <label>Повторите пароль</label>
        <input type="text" name="password_repeated">
        <span class="error" aria-live="polite"></span>
        <?php 
      if ($_SESSION['message']) {
        echo '<span class="error">' . $_SESSION['message'] . '</span>';
        unset($_SESSION['message']);
      }
      ?>
        <button type="submit" class="btn">Отправить данные</button>
    </form>
    </div>


  </main>

  <?php
  include("footer.php");
  ?>
  <script src="js/validate.js"></script>
</body>

</html>