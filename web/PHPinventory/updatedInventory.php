<?php
required "dbConnect.php";
$db = connect_db();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset $_POST['dname']) {
      $b = $_POST['dname'];
      $ch = $_POST['dtype'];
      $v = $_POST['owner'];
      $c = $_POST['sn'];
      $t = $_POST['topic'];
      $db->prepare("INSERT INTO public.inventory(dname, dtype, owner,sn) VALUES(:dname, :dtype, owner, sn)");
      $stmt->bindValue(':dname', $b, PDO::PARAM_STR);
      $stmt->bindValue(':dtype', $ch, PDO::PARAM_INT);
      $stmt->bindValue('owner', $v, PDO::PARAM_INT);
      $stmt->bindValue('sn', $c, PDO::PARAM_STR);
      $stmt->execute();
      
    }
    ?>
  </body>
</html>