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
      <form action="/validation-form/check.php" class="form" method="post">
      <h3>Зарегистрироваться</h3>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" />
        <label for="password">Password</label>
        <input id="password" type="password" name="password" />
        <button class="submit" type="submit" name="submit">Create</button>
      </form>
    </div>
  </body>
</html>
