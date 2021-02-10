<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    </head>
    <body>
        <br>


<?php

include("dbconfig.php");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phone"];

//target path for the image
$targetDir = 'imguploads/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));

if(isset($_POST["register"]) && !empty($_FILES["file"]["name"])){
  //trimming name and address front and end spaces
  $fname = trim($fname);
  $lname = trim($lname);
  $address = trim($address);
    // Allow certain file formats
    $allowedTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowedTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file nnd other data into database
            $sql = "INSERT INTO people (fname,lname,profileimage,gender,dob,address,email,phone) VALUES ('$fname','$lname','".$fileName."',$gender,'$dob','$address','$email','$phone')";
            $retval = mysqli_query($conn,$sql);
            if($retval){
                //$statusMsg = "The image ".$fileName. " has been uploaded successfully.";
                $statusMsg = "The record has been entred successfully.";
            }else{
                $statusMsg = "Image upload failed, please try again.".mysqli_error($conn);
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your image.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

</body>
</html>
