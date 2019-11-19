<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bsieso Accessories</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/b.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

	
	

<?php include "PartView/header_customer.php"; ?>	
<?php include "PartView/Script.php"; ?>
	
	
	
	</head>
	
	
	
<?php 



include "connect_DB.php";

$orderid=$_GET['oid'];


$sql = "DELETE FROM `invoice` WHERE `o_id` = $orderid;";

if ($conn->query($sql) == TRUE) {



?>

<center> <br> <br><br> <br><br>


<img src="img/done.jpg" height="200" width="200"> <br> <br> 

<a href="home_customer.php" class="btn essence-btn"> Back <a/>



<?php


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();







?>