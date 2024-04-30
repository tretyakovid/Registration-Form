<?php
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if (mb_strlen($username) < 5 || mb_strlen($username) > 15) {
    echo 'Недопустимая длина имени пользователя';
    exit();
} else if (mb_strlen($password) < 8 || mb_strlen($password) > 15) {
    echo 'Недопустимая длина пароля (от 8 до 15)';
    exit();
};

$password = md5($password."gerniodk53425");

$mysql = new mysqli('test', 'root', '', 'users');

$mysql->query("INSERT INTO `users` (`password`, `username`)
VALUES('$password', '$username')");

$mysql->close();

header('Location: /');
?>