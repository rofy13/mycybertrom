<?php
session_start();
if(!isset($_SESSION["loggedin"])){
  header('Location: systemlogin.php');
}


include("dbconfig.php");
 ?>
<html>
<head>
  <style>
    a.paginate{
      font-size: 30px;
      text-decoration: none;
      padding: 10px;
    }
  </style>
  <title>System - List</title>
</head>
<body>

      <br>
      <button style="float:right; margin:0 30px 0 0;"><a href="systemlogout.php">LOG OUT </a></button>
      <br>
      <br>
      <br>
    <table width="80%" border="1" align="center">
        <tr>
           <th>PROFILE IMAGE</th>
           <th>NAME</th>
           <th>DOWNLOAD INFO</th>
          </tr>

    <?php
    $sql = 'SELECT * FROM people';
    $retval = mysqli_query($conn,$sql);

    //------------------------------  pagination  --------------------------------------------
    //results per page
    $results_per_page = 5;

    $number_of_result =  mysqli_num_rows($retval);

    //total number of pages available
    $number_of_page = ceil ($number_of_result / $results_per_page);

    //page number visitor is currently on
    if (!isset ($_GET['page']) ) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    //sql LIMIT starting number for the results on the displaying page
   $page_first_result = ($page-1) * $results_per_page;

   //retrieve the selected results from database
   $newsql = "SELECT * FROM people LIMIT " . $page_first_result . ',' . $results_per_page;
   $result = mysqli_query($conn, $newsql);


    if (mysqli_num_rows($result)>0) {
      while($row = mysqli_fetch_assoc($result)){
    ?>
              <tr align="center">
                  <td><img src="imguploads\<?php echo $row['profileimage'];?>" alt="<?php echo $row['profileimage'];?>" width="100" height="100"></td>
                 <td><?php echo ($row['fname']." ".$row['lname']);?></td>
                 <td><form method="post" action="downloadpdf.php"><button type="submit" name="download" value="<?= $row['pid']; ?>">DOWNLOAD</button></form></td>
             </tr>
    <?php
      }

    }else {
      echo("no records");
    }

    ?>
    </table>

    <br>
    <br>

<div align="center">

  <?php

  //displaying the link of the pages in URL
    for($page = 1; $page<= $number_of_page; $page++) {
        echo '<a class="paginate" href = "showpeople.php?page=' . $page . '">' . $page . ' </a>';
    } ?>

</div>


  </body>
  </html>
