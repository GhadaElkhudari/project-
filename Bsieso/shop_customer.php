<html>

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
    <link rel="stylesheet" href="css/style.css">

   <!-- Header -->

<?php include "PartView/header_customer.php"; ?>
    <?php include "PartView/Script.php"; ?>
	
</head>

<body> 
	
 <div class="breadcumb_area bg-img" style="background-image: url(img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Mugs</h2>
                    </div>
                </div>
            </div>
		</div>
</div>		
<center>
<?php

$servername = "127.0.0.1";
$username = 'root';
$password = "";
$database='accessories';
// Create connection
$conn = new mysqli($servername, $username , $password , $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT p_id ,name,image,description,price FROM product WHERE cat_id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		$_SESSION["price_p"] = $row['price'];
        echo "<br>"."<br>"."<br>"."<br>"."<br>";
		?>
		<br> <img class="rounded" height="150" width="150"  src="img/<?= $row['p_id']; ?>.jpg"><br>
		
		
		<?php 
		global $p_id ;
	    $p_id = $row["p_id"]; 
		
		//$row[""];
	echo 'Description : '."<br>".$row["description"]. "<br>"."<br>".'Price : '.$row["price"].' JD '.'' ;
		?>
		<br>  <a href="customizeProduct.php?pid=<?php echo $row["p_id"]; ?>" class="btn essence-btn"> Create Design </a>"
		 
		  <?php 
    }
} else {
    echo "0 results";
}
	mysqli_close($conn);
 
?>


</center>
<br> <br><br><br><br>
<div class="breadcumb_area bg-img" style="background-image: url(img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Medals</h2>
                    </div>
                </div>
            </div>
		</div>
</div>		


<center>		 
<?php

$servername = "127.0.0.1";
$username = 'root';
$password = "";
$database='accessories';
// Create connection
$conn = new mysqli($servername, $username , $password , $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT p_id ,name,image,description,price FROM product WHERE cat_id=2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		$_SESSION["price_p"] = $row['price'];
        echo "<br>"."<br>"."<br>";
		?>
		<br> <img class="rounded" height="150" width="150"  src="img/<?= $row['p_id']; ?>.jpg">
		
		
		<?php global $p_id ;
		$p_id =$row['p_id']; ?>
		
		
		<?php
		//$row[""];
	echo 'Price : '.$row["price"].' JD '. "<br>".'' ;
		?>
		
		 <br>  <a href="customizeProduct.php?pid=<?php echo $row["p_id"]; ?>" class="btn essence-btn"> Create Design </a>"
		 
		 		 <?php 
		
    }
} else {
    echo "0 results";
}
	mysqli_close($conn);
 
?>
</center>
</body> 
	</html>