<?php
// 24時間単位の現在時
$hour = date('G');
if ($hour>=6 && $hour<=17){
  $daynight = 'day';
   } else {
  $daynight = 'night';
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class="<?php echo $daynight ?>">
<h1 class="<?php echo $daynight ?>">昼と夜でページの見た目が変わります。</h1>
</body>
</html>
