<?php session_start(); require_once 'config/db/db_connect.php'?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/main.css">
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
                        <li><a href="index.php">Главная</a></li>
                        <?php
                            if(!isset($_SESSION['login'])) {
                                echo "<li><a href='pages/registration.php'>Регистрация</a></li>";
                            }
                        ?>

                        <?php
                            if(!isset($_SESSION['login'])) {
                                echo "<li><a href='pages/enter.php'>Вход</a></li>";
                            }
                        ?>

                        <?php
                            if(isset($_SESSION['login'])) {
                                echo "<li><a href='scripts/script_exit.php'>Выход</a></li>";
                            }
                        ?>
                        <?php
                            if(@$_SESSION['priv'] == 'admin') {
                                echo "<li><a href='pages/admin.php'>Админ панель</a></li>";
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['login'])) {
                                echo "<li><a href='pages/hello.php'>Кабинет</a></li>";
                            }
                        ?>
                    </ul>
                </nav>
                <div id="content">
                    <p>
                    <?php
                    echo $dateT2;
                        if(isset($_SESSION['login']))
                        {
                            echo "<b>Вы вошли как: </b> {$_SESSION['login']}";
                        }
                    ?>
                        
                    </p>
                    <?php
                    if(!(@$_SESSION['view']==0)) {
                        echo "
                         <table>
                        <tr >
                            <td class='head'>ФИО</td>
                            <td class='head'>Категория</td>
                            <td class='head'>Доп</td>
                            <td class='head'>Дата рождения</td>
                            <td class='head'>Дней до дня рождения</td>
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
                             <td>{$post['daytob']}</td>
                             </tr>
                             ";
                        }
                   } else {
                        echo "<h2>Не достаточно прав для просмотра</h2>";
                    }
                    ?>
                </div>
            </main>
            <footer>

            </footer>
        </div>
    </body>
</html>