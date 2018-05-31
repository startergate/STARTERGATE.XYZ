<?php
	$conn = mysqli_connect('localhost','root','B32bpu98');
	mysqli_select_db($conn, 'opentutorials');
  $name = mysqli_real_escape_string($conn, $_GET['name']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);
  $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/private/font_style.css">
    <title>최호승 - 생활코딩</title>
  </head>
  <body>
    <?php
      $password = $_GET["password"];
      if ($result->num_rows === 0) {
        echo "뉘신지?";
      } else {
        echo "환영합니다. $_GET[name]님";
      }
    ?>
  </body>
</html>
