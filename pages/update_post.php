<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript"src="../../jquery.js" ></script>
    <script type="text/javascript"src="../js/ajax.js" ></script>
</head>
<body>
<?php
require_once '../config/db/db_connect.php';

$id = $_POST['id'];
$request = "SELECT * FROM `laba_4`.`date` WHERE `date`.`id` = '$id'";

$row = $mysqli->query($request);

while ($post = $row->fetch_assoc()){
    echo "
        <form method='post' action='../scripts/script_update_post.php'>
    <fieldset>
        <legend>Изменить</legend>
        <label for='fio'>Фио</label>
        <input type='text' name='fio' placeholder='{$post['fio']}'><br />
        <label for='category'>Категория</label>
        <input type='text' name='category' placeholder='{$post['category']}'><br />
        <label for='info'>Инфо</label>
        <input type='text' name='info' placeholder='{$post['info']}'><br />
        <label for='dateb'>Дата рождения</label>
        <input type='text' name='dateb' placeholder='{$post['dateb']}'><br />
        <input type='text' name='id' placeholder='{$post['id']}' value='{$post['id']}' style='display: none'><br />
        <input type='submit' value='Изменить' id='update'>
        <input type='reset' value='Очитсить'>
    </fieldset>
</form>
    ";
}
?>
</body>
</html>


