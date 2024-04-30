<?php
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."gerniodk53425");

$mysql = new mysqli('test', 'root', '', 'users');

$result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$username'
AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count((array)$user) == 0) {
    echo "Пользователей не найден";
    exit();
}
setcookie('user', $user['username'], time() + 3600, "/");
$mysql->close();

header('Location: /sign.php');
?>