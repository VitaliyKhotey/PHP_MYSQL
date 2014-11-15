<?php
require_once '../config/db/db_connect.php';



$request = "UPDATE `laba_4`.`date` SET `fio`='{$_POST['fio']}',`category`='{$_POST['category']}',`info`='{$_POST['info']}',`dateb`='{$_POST['dateb']}' WHERE `id`='{$_POST['id']}'";


$mysqli->query($request) or die($mysqli->error);

header("Location: ../pages/admin.php");

