<?php session_start(); require_once '../config/db/db_connect.php'?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <script type="text/javascript"src="../../jquery.js" ></script>
    <script type="text/javascript"src="../js/ajax.js" ></script>
    <title>IS24</title>
</head>
<body>
<div class="wrapper">
    <header>
        <h1> Хотей Виталий IS-24</h1>
    </header>
    <main>
        <nav>
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <?php
                            if(!isset($_SESSION['login'])) {
                                echo "<li><a href='registration.php'>Регистрация</a></li>";
                            }
                        ?>

                        <?php
                            if(!isset($_SESSION['login'])) {
                                echo "<li><a href='enter.php'>Вход</a></li>";
                            }
                        ?>

                        <?php
                            if(isset($_SESSION['login'])) {
                                echo "<li><a href='../scripts/script_exit.php'>Выход</a></li>";
                            }
                        ?>
                        <?php
                            if($_SESSION['priv'] == 'admin') {
                                echo "<li><a href='admin.php'>Админ панель</a></li>";
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['login'])) {
                                echo "<li><a href='hello.php'>Кабинет</a></li>";
                            }
                        ?>
            </ul>
        </nav>
        <div id="content">
        <h2>Админ панель</h2>
        <form>
            <fieldset>
                <legend>Допавить Информацию</legend>
                <label for='fio'>Фио</label>
                <input type='text' name='fio'><br />
                <label for='category'>Категория</label>
                <input type='text' name='category'><br />
                <label for='info'>Инфо</label>
                <input type='text' name='info'><br />
                <label for='dateb'>Дата рождения</label>
                <input type='text' name='dateb'><br />
                <input type='submit' value='Добавить' id='add'>
                <input type="reset" value="Очитсить">
            </fieldset>
        </form>


         <form id='create_user'>
                <fieldset>
                    <legend>Добавить пользователя</legend>
                    <label for="name">Имя</label>
                    <input type="text" name="name"><br />
                    <label for="login">Логин</label>
                    <input type="text" name="login"><br />
                    <label for="pwd">Пароль</label>
                    <input type="text" name="pwd"><br />
                    <label for="mail">Почта</label>
                    <input type="text" name="mail"><br />
                    <input type="submit" value="Добавить" id='reg_a'>
                    <input type="reset" value="Очитсить">
                </fieldset>
            </form>
                    <h3>Информация</h3>
                    <?php
                        echo "
                         <table>
                        <tr >
                            <td class='head'>ФИО</td>
                            <td class='head'>Категория</td>
                            <td class='head'>Доп</td>
                            <td class='head'>Дата рождения</td>
                            <td class='head'>Дней до дня рождения</td>
                            <td class='head'>Удалить</td>
                            <td class='head'>Изменить</td>
                        </tr>";
                        $request = "SELECT * FROM date";
                        $a = $mysqli->query($request);
                        while($post = $a->fetch_array(MYSQL_ASSOC)){
                            echo "
                            <tr>
                             <td>{$post['fio']}</td>
                             <td>{$post['category']}</td>
                             <td>{$post['info']}</td>
                             <td>{$post['dateb']}</td>
                             <td>{$post['daytob']}</td> ";
                            if($_SESSION['delete'] == 1) {
                                echo "<td class='hide'><form> <input type='text' value='{$post['id']}' name='id' style='display:none'><input class = 'delete-s' type='submit' value='Удалить'></form></td>";
                            }else {echo '<td>-</td>';}
                            if($_SESSION['update'] == 1) {
                                echo "<td class='hide'><form method='post' action='update_post.php'> <input type='text' value='{$post['id']}' name='id' style='display:none'><input  type='submit' value='Изменить'></form></td>";
                            } else { echo '<td>-</td>'; }
                            echo "</tr>";


                             
                            
                         }
                             ?>


                             
                             <?php
                        echo "
                         <table>
                        <tr >
                            <td class='head'>Имя</td>
                            <td class='head'>Логин</td>
                            <td class='head'>пароль</td>
                            <td class='head'>Почта</td>
                            <td class='head'>Удалить</td>
                            <td class='head'>Изменить</td>
                        </tr>";
                        $request = "SELECT * FROM users";
                        $a = $mysqli->query($request);
                        while($post = $a->fetch_array(MYSQL_ASSOC)){
                            echo "
                            <tr>
                             <td>{$post['name']}</td>
                             <td>{$post['login']}</td>
                             <td>{$post['password']}</td>
                             <td>{$post['mail']}</td>";
                            if($_SESSION['delete'] == 1) {
                                echo "<td class='hide'><form> <input type='text' value='{$post['id']}' name='id' style='display:none'><input class = 'delete-u' type='submit' value='Удалить'></form></td>";
                            }else {echo '<td>-</td>';}
                            if($_SESSION['update'] == 1) {
                                echo "<td class='hide'><form method='post' action='update_user.php'> <input type='text' value='{$post['id']}' name='id' style='display:none'><input class = 'update-u' type='submit' value='Изменить'></form></td>";
                            } else { echo '<td>-</td>'; }
                                echo "</tr>";






                         }
                             ?>
        </div>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>