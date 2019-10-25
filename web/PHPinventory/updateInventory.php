<?php
require "dbConnect.php";
$db = connect_db();
 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <form class="" action="updatedInventory.php" method="post">
       Device Name: <input type="text" name="dname" value=""><br>
       Device Type: <input type="text" name="dtype" value=""><br>
       Owner: <input type="text" name="owner" value=""><br>
       Serial Number: <input type="text" name="sn" value=""><br>
       Install Date: <input type="text" name="installDate" value""><br>
       <?php
       foreach ($db->query('SELECT name FROM public.topic') as $row)
       {
        echo  '<input type="checkbox" name="topic[]" value="' . $row['name'] .'">';
       }
        ?>
        <br>
       <input type="submit" name="" value="Push it NOW!!!">
     </form>
  </body>
</html>
