<?php
// 24時間単位の現在時
$hour = date('G');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body
  <?php 
  if ($hour>=6 && $hour<=17){
    echo ' class="day"';
     } else {
    echo ' class="night"';
   }
  ?>
>
<h1 
  <?php 
  if ($hour>=6 && $hour<=17){
    echo ' class="day"';
     } else {
    echo ' class="night"';
   }
  ?>
>昼と夜でページの見た目が変わります。</h1>
</body>
</html>
