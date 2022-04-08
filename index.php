<?php
  declare(strict_types = 1);

  session_start();

  require_once('database/connection.db.php');

  require_once('templates/common.tpl.php');

  $db = getDatabaseConnection();


  drawHeader();
  //other draws
  drawFooter();
?>