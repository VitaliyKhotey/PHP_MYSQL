<?php
require_once 'db_config.php';

$mysqli = new mysqli(DATABASEHOST,DATABASEUSER,DATABASEPWD,DATABASENAME) or die($mysqli->connect_error);
$mysqli->query("set names utf8") or die($mysqli->error);