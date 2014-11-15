<?php
session_start();
?>
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
            <h2>Добро пжаловать !</h2>
            <p>
                Логин : <?php echo $_SESSION['login'];?><br />
                Права : <?php echo $_SESSION['priv'];?><br />
                Почта : <?php echo $_SESSION['mail'];?><br />
                <b>Права:</b><br />
                Удаление : <?php echo $_SESSION['delete'];?><br />
                Обновление : <?php echo $_SESSION['update'];?><br />
                Просмотр : <?php echo $_SESSION['view'];?><br />
            </p>
        </div>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>