<?php
session_start();
?>
<?php
  array_splice($_SESSION['card'], $_POST['key'], 1);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
