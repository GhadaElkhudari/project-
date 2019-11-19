<?php

/* include "connect_DB.php";
 
 
 $sql = "SELECT o_id  FROM `order` where o_id = $_SESSION[cust_id] and status='inprocess' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['o_id'];
		
		
*/	
?>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
     
       $sql = "SELECT o_id  FROM `order` where o_id = $order_id ";
		   
		   
 $result = $conn->query($sql);
  $check=$result->num_rows;
  if ($result->num_rows > 0) {
	  
while($row = $result->fetch_assoc()) {
	
      // output data of each row  
$_SESSION["order_id"] = $row['o_id'];

if ($conn->query($sql) == TRUE) {
    
    header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/m_order.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


}else {
  echo "not found";
}
 ?>
