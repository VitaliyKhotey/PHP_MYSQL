<?
require_once '../config/db/db_connect.php';
$id = $_POST['id'];

$reques = "DELETE FROM `laba_4`.`users` WHERE `users`.`id` = '$id'";

$mysqli->query($reques) or die($mysqli->error);