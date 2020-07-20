<?php
    $link = mysqli_connect('localhost', 'root', '','gbphp');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? if(empty($_SESSION['Login'])) :?>
    <form action="engine/login.php" method="POST">
        <input type="text" placeholder="Логин" name="login">
        <input type="password" placeholder="Пароль" name="password">
        <input type="submit">
    </form>
    <? else: ?>
    Вы авторизованы
    <a href="engine/logout.php">exit</a>
    <? endif; ?>
</body>
</html>