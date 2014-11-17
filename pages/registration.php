<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <script type="text/javascript" src="../../jquery.js"></script>
    <script type="text/javascript" src="../js/ajax.js"></script>
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
                <li><a href="registration.php">Регистрация</a></li>
                <li><a href="enter.php">Вход</a></li>
            </ul>
        </nav>
        <div id="content">
            <form method="post">
                <fieldset>
                    <legend>Регистрация</legend>
                    <label for="name">Имя</label>
                    <input type="text" name="name"><br />
                    <label for="login">Логин</label>
                    <input type="text" name="login"><br />
                    <label for="pwd">Пароль</label>
                    <input type="text" name="pwd"><br />
                    <label for="mail">Почта</label>
                    <input type="text" name="mail"><br />
                    <input type="submit" id="reg" value="Зарегистрироваться">
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