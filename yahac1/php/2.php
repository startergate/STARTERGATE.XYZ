<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/private/font_style.css">
    <title>최호승 - 생활코딩</title>
  </head>
  <body>
    <?php
      echo file_get_contents($_GET['id'].".txt")
    ?>
  </body>
</html>