<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Всем Дом</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/statistics.css" />
<link rel="icon" href="vsem_dom.ico" type="image/x-icon">
</head>
 
<body>
<?php
include("php/header.php");
?>

  <main>
    <article>
    <h3>Статистика цен:</h3>
   <table>
     <thead>
       <tr>
         <th rowspan="3">
           <strong>Область, город</strong>
         </th>
         <th colspan="4">
          <strong>Однокомнатные квартиры</strong>
        </th>
        <th colspan ="4">
          <strong>Двухкомнатные квартиры</strong>
        </th>
        <th colspan="4">
          <strong>Трехкомнатные квартиры</strong>
        </th>
       </tr>
       <tr>
        <th colspan="3">Стоимость квартир</th>
        <th rowspan="2">стоимость кв.м.</th>
        <th colspan="3">Стоимость квартир</th>
        <th rowspan="2">стоимость кв.м.</th>
        <th colspan="3">Стоимость квартир</th>
        <th rowspan="2">стоимость кв.м.</th>
       </tr>
       <tr>
         <th>мин</th>
         <th>сред</th>
         <th>макс</th>

         <th>мин</th>
         <th>сред</th>
         <th>макс</th>

         <th>мин</th>
         <th>сред</th>
         <th>макс</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>
           
         </td>
       </tr>
     </tbody>
   </table>
  </article>
  </main>

  <?php
  include("footer.php");
  ?>
		 
</body>
</html>