<?php
    session_start();

    require "dbConnect.php";
    $db = connect_db();
?>
//signin pages
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In Here</title>
  </head>
  <body>
  <h1>Sign In!</h1>
    <form class="" action="signin.php" method="post">
        <input type="text" name="username" value="Enter Username"><br>
        <input type="password" name="password" value="Enter Password"><br>
        <input type="submit" name="" value="Sign In"><br>
    </form>
  </body>
  </html>