<?php
require_once('../config/db/db_connect.php');


$fio = $_POST['fio'];
$category = $_POST['category'];
$info = $_POST['info'];
$dateb = $_POST['dateb'];
$datetob = rand(0,364);
$dateT = explode(':',date("d:H:Y"));


$query = "INSERT INTO date (fio,category,info,dateb,daytob) VALUES ('$fio','$category','$info','$dateb','$datetob')";

$mysqli->query($query) or die($mysqli->error);