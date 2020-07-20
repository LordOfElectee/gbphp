<?php
session_start();

$link = mysqli_connect('localhost', 'root', '','gbphp');

if (empty($_POST['login']) || empty($_POST['password'])) {
    header('Location: /');
    exit();
}

$sql = "SELECT login, password FROM users WHERE login = {$_POST['login']}";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['login'] == $_POST['login'] && $row['password'] == $_POST['password']) {
    $_SESSION['Login'] = true;
}

header('Location: /');
exit();