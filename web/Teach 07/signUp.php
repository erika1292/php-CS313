<?php
    session_start();

    require "dbConnect.php";
    $db = connect_db();
?>
//signUP, welcome, and signin pages
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Here</title>
  </head>
  <body>
  <h1>Sign Up!</h1>
    <form class="" action="signUp.php" method="post">
        <input type="text" name="username" value="Enter Username"><br>
        <input type="password" name="password" value="Enter Password"><br>
        <input type="submit" name="" value="Submit"><br>
    </form>
    <?php 
        if(isset( $_POST['username'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);
        
            $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':password', $hash);
            $stmt->execute();
        }

    ?>
  </body>
  </html>