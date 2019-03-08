<?php
  $i = 0;
  $conn = new mysqli('sid.donote.co', 'root', 'Wb4H9nn542', 'sid_userdata');
  $sql = 'INSERT INTO error_recorder VALUES (0, 0, "test")';

  do {
      $i += 1;
      echo $i;
      if (i > 5) {
          exit;
      }
  } while ($conn->query($sql));
