<?php
session_start();
require_once '../config/db/db_connect.php';
$login = strtolower($_POST['login']);
$pwd = $_POST['pwd'];

$query = "SELECT * FROM users where login='$login'";
$row = $mysqli->query($query) or die($mysqli->error);
$inf = $row->fetch_array();


if($inf['login']==$login && $inf['password']==$pwd) {
    $_SESSION['login'] = $inf['login'];
    $_SESSION['delete'] = $inf['delete'];
    $_SESSION['update'] = $inf['update'];
    $_SESSION['view'] = $inf['view'];
    $_SESSION['mail'] = $inf['mail'];
    $_SESSION['priv'] = $inf['priv'];
    header('Location: ../pages/hello.php');
} else {
    header('Location: ../pages/error_enter.php');
}
