<?php
  require("config/config.php");
  require("lib/db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $link = mysqli_real_escape_string($conn, $_POST['link']);

  $sql = "INSERT INTO route (title,link,edittime) VALUES('".$title."', '".$link."', now())";
  $result = mysqli_query($conn, $sql);
  header('Location: /index.php');
?>
