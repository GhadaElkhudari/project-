<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);


      // include "connect_DB.php";
	   
	   
	   session_start();
	   
	   
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

                     $imageName=$_FILES['itemimage']['name'];
                     $imageSize=$_FILES['itemimage']['size'];
                     $imageTempName=$_FILES['itemimage']['tmp_name'];
                     $imageType=$_FILES['itemimage']['type'];

                   // The Alloed Files To Upload
                     $imageِAllowedExtention=array('jpeg','jpg','png','gif');

                     $imageِExtention=explode('.',$imageName );
                     $imageِExtention=strtolower(end($imageِExtention)); 



                  	//get variabels from the  Add Member Form form

                      $itemImage=rand(0,1000000).'_'.$imageName;
                      move_uploaded_file($imageTempName, 'upload/'.$itemImage);



//$order= "select o_id from order where cust_id = $_SESSION['cust_id'] and status='inprocess' ";
//$sql="select * from order  where cust_id = $_SESSION['cust_id'] ";

//$result = mysqli_query($conn, $sql);

$sql = "SELECT o_id  FROM `order` where cust_id = $_SESSION[cust_id] and status='inprocess' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['o_id'];
		
		
}

$sql="INSERT INTO `invoice` (`p_id`, `o_id`, `text`, `image`,`quantity`) VALUES ($pid,$order_id, '$text','$itemImage',$quantity );";

if ($conn->query($sql) == TRUE) {
    echo "Done";
    header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/cart.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



}

  
  
  else { // if there is no order for this customer 
	  
	   $sql="INSERT INTO `order` (`o_id`, `date`, `tax`, `cust_id`,`status`) VALUES (NULL,now(), '0.16', $_SESSION[cust_id],'inprocess');";
	   if ($conn->query($sql) == TRUE) {
	
              
			  $sql = "SELECT o_id  FROM `order` where cust_id = $_SESSION[cust_id] and status='inprocess' ";

			  
			  $result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
						$order_id = $row['o_id'];
						
						
				}

				$sql="INSERT INTO `invoice` (`p_id`, `o_id`, `text`, `image`,`quantity`) VALUES ($pid,$order_id, '$text','$itemImage',$quantity);";

				if ($conn->query($sql) == TRUE) {
					echo "Done";
					header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/cart.php');
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			  
			  
			  
			  
			  }
	  
	   }
	  
  }
//


}

$conn->close();

 ?>