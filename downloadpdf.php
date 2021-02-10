<?php
require('fpdf.php');
include("dbconfig.php");

$pid = $_POST["download"];
$sql = "SELECT * FROM people WHERE pid=$pid";
$retval = mysqli_query($conn,$sql);
if (mysqli_num_rows($retval)>0) {
  $row = mysqli_fetch_assoc($retval);

  //$pid1 = $row['pid'];
  $fname = $row['fname'];
  $lname = $row['lname'];
  $profileimage = $row['profileimage'];
  $gender = ($row['gender'] == 1)? "Male":"Female";
  $dob = $row['dob'];
  $address = $row['address'];
  $email = $row['email'];
  $phone = $row['phone'];

  $imagepath = "imguploads\\".$profileimage."";
//  echo $imagepath;

}else {
  echo("entry doesnt exist anymore");
}

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('$imagepath',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(58);
    // Title
    $this->Cell(75,10,'Personal Information',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);

    $this->Cell(0,10,'created by **Rofern**',0,0,'C');
    // Page number
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',18);
$pdf->Image($imagepath,80,25,50,50);
$pdf->Ln(60);

$pdf->Cell(0,20,'NAME : '.$fname.' '.$lname,0,1,'C');
$pdf->Cell(0,20,'GENDER : '.$gender,0,1,'C');
$pdf->Cell(0,20,'DATE OF BIRTH : '.date('d-M-Y', strtotime( $dob )),0,1,'C');
$pdf->Cell(0,20,'ADDRESS : '.$address,0,1,'C');
$pdf->Cell(0,20,'EMAIL : '.$email,0,1,'C');
$pdf->Cell(0,20,'PHONE : '.$phone,0,1,'C');


$pdf->Output();
?>
