<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['delete']);
unset($_SESSION['update']);
unset($_SESSION['view']);
unset($_SESSION['mail']);
unset($_SESSION['priv']);

header('Location: ../index.php');