<?
require_once '../config/db/db_connect.php';
$id = $_POST['id'];

$reques = "DELETE FROM `laba_4`.`date` WHERE `date`.`id` = '$id'";

$mysqli->query($reques) or die($mysqli->error);

