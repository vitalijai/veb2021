<?php
function f(){
    echo '<a class="user">'.$_SESSION['user'].'</a>';
    echo '<a href="/php/log_of.php">Выйти</a>';
}
?>
<header>
  <a  href="/">
     Всем дом </a>
    <nav>
        <a  href="/adding_object.php">Зарегистрировать свой обьект</a>
        <a  href="/statistics.php">Цены на недвижимость</a>
       
        <?php
            if($_SESSION['user'])
            {
                f();
            }
            elseif($_COOKIE['user']){
                $_SESSION['user'] = $_COOKIE['user'];
                f();
            }
            else
            {
                echo '<a  href="/login.php">Вход</a>';
                echo ' <a  href="/account_registration.php">Регистрация</a>';
            }
        ?>
    </nav>
</header>