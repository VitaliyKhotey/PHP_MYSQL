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
$request = "SELECT * FROM `laba_4`.`users` WHERE `users`.`id` = '$id'";

$row = $mysqli->query($request);

while ($post = $row->fetch_assoc()){
    echo "
        <form method='post' action='../scripts/script_update_user.php'>
    <fieldset>
        <legend>Изменить</legend>
        <label for='name'>Имя</label>
        <input type='text' name='name' placeholder='{$post['name']}'><br />
        <label for='login'>Логин</label>
        <input type='text' name='login' placeholder='{$post['login']}'><br />
        <label for='password'>Пароль</label>
        <input type='text' name='password' placeholder='{$post['password']}'><br />
        <label for='mail'>Почта</label>
        <input type='text' name='mail' placeholder='{$post['mail']}'><br />
        <h2>Права</h2>
        <label for='view'>Просмотр</label>
        <input type='text' name='view' placeholder='{$post['view']}'><br />
        <label for='view'>Изминение</label>
        <input type='text' name='update' placeholder='{$post['update']}'><br />
        <label for='view'>Удаление</label>
        <input type='text' name='view' placeholder='{$post['delete']}'><br />


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


