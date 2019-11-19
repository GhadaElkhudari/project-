<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);

include "connect_DB.php";

session_start();
$date = date('Y-m-d');
//$time =date('h:i:sa');

$tax=0.16;
	 $sql="INSERT INTO `order` (`o_id`, `date`, `tax`, `cust_id`,`status`) VALUES (NULL,now(), '0.16', $_SESSION[cust_id],'inprocess');";


if ($conn->query($sql) == TRUE) {
	


header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/customizeProduct.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}
else {
  echo "not found";
}
 
 ?>