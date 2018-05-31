<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DEV!</title>
  </head>
  <body>
    <?php
      $password_input = $_POST['pw'];
      $password_hash = hash("sha256",$password_input);
      echo $password_input;
      echo '<br />';
      echo $password_hash;
    ?>
  </body>
</html>
