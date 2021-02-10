<?php
include("dbconfig.php");

$user = $_POST["username"];
$pass = $_POST["password"];

$flag = 1;

$sql = 'SELECT * FROM systemlogin';
$retval = mysqli_query($conn,$sql);

if (mysqli_num_rows($retval)>0) {
  while($row = mysqli_fetch_assoc($retval)){

    $u = $row['username'];
    $p = $row['password'];

    if($user == $u && $pass == $p){
      echo "successfully logged in";
      session_start();
      $_SESSION["loggedin"]=true;
      header('Location: systempanel.php');
      $flag = 0;
    }
  }

  if ($flag == 1) {
    echo "wrong username/password";
    ?>
    <html>
    <head>
      <title>System Panel</title>
      </head>
      <body>

          <br>

    <button><a href="systemlogin.php">Click to Login again</a></button>

    <?php
  }

}else {
  echo("no admins in db");
}


?>

</body>
</html>
