<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
<?php include('header.php') ?>
    <div class="wrapper">
<?php
    if(isset($_COOKIE['user']) == false):
?>
    <form action="/validation-form/auth.php" class="form" method="post">
        <h3>Войти</h3>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" />
        <label for="password">Password</label>
        <input id="password" type="password" name="password" />
        <button class="submit" type="submit" name="submit">Sign In</button>
      </form>
      <?php else:?>
<p>Привет! Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
      <?php endif;?>
    </div>
  </body>
</html>
