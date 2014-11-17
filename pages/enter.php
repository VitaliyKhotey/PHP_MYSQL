<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
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
            </ul>
        </nav>
        <div id="content">
            <form method="post" action="../scripts/script_enter.php">
                <fieldset>
                    <legend>Вход</legend>
                    <label for="login">Логин</label>
                    <input type="text" name="login"><br />
                    <label for="pwd">Пароль</label>
                    <input type="text" name="pwd"><br />
                    <input type="submit" value="Вход">
                    <input type="reset" value="Очитсить">
                </fieldset>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>