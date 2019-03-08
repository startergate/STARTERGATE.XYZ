<?php
  require '../loginmodule/lib/sidUnified.php';

  try {
      $SID = new SID();
  } catch (\Exception $e) {
      echo $e;
  }
