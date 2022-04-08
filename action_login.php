<?php
  declare(strict_types = 1);

  session_start();

  require_once('database/connection.db.php');
  require_once('database/user.class.php');

  $db = getDatabaseConnection();

  $user = User::getUserWithPassword($db, $_POST['email'], $_POST['password']);

  if ($user) {
    $_SESSION['id'] = $user->id;
    $_SESSION['name'] = $user->name();
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>