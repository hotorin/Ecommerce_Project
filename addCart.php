<?php
session_start();
?>
<?php

  $array_use = array();
  if(!isset($_SESSION['card'])){
    $_SESSION['card'] = array();
  }

  if(isset($_POST['type']) && isset($_POST['price']) &&isset($_POST['name']) &&isset($_POST['pic']) &&isset($_POST['quan'])){
    $array_use['type'] = $_POST['type'];
    $array_use['price'] = $_POST['price'];
    $array_use['name'] = $_POST['name'];
    $array_use['pic'] = $_POST['pic'];
    $array_use['quan'] = $_POST['quan'];
    array_push($_SESSION['card'], $array_use);
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
