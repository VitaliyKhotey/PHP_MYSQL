<?php
require_once '../config/db/db_connect.php';


$request = "UPDATE `laba_4`.`users` SET `name`='{$_POST['name']}',`login`='{$_POST['login']}',`password`='{$_POST['password']}',`mail`='{$_POST['mail']}',`delete`='{$_POST['delete']}',`update`='{$_POST['update']}',`view`='{$_POST['view']}' WHERE `id`='{$_POST['id']}'";


$mysqli->query($request) or die($mysqli->error);

header("Location: ../pages/admin.php");

