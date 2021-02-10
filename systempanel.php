<?php
session_start();
if(!isset($_SESSION["loggedin"])){
  header('Location: systemlogin.php');
}
 ?>
<html>
<head>
  <title>System Panel</title>
  </head>
  <body>

      <br>

  <h4>System Panel</h4>
  <br>

  <button style="float:right; margin:0 30px 0 0;"><a href="adminlogout.php">LOG OUT </a></button>

  <div>
    <br>
    <br>
    <button><a href="showpeople.php">Show People</a></button>
  </div>

</body>
</html>
