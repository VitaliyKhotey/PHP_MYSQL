<?php
require_once '../config/db/db_connect.php';

$name = strtolower($_POST['name']);
$login = strtolower($_POST['login']);
$pwd = strtolower($_POST['pwd']);
$mail = strtolower($_POST['mail']);

$delete = 0;
$update =0;
$view = 0;

$query = "INSERT INTO users (name,login,password,mail,`delete`,`update`,`view`,`priv`) VALUES ('$name','$login','$pwd','$mail','$delete','$update','$view','user')";
$mysqli->query($query) or die($mysqli->error);

header('Location:../pages/thank.php');

