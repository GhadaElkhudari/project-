<?php


session_start();


if(isset($_POST["email"]))
{
  include "connect_DB.php";
  
extract($_POST);
  
  $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password' ";
  
  $result = $conn->query($sql);
  $check=$result->num_rows;
  if ($result->num_rows > 0) {
	  
while($row = $result->fetch_assoc()) {
      // output data of each row
	  
$_SESSION["cust_id"] = $row['cust_id'];
$_SESSION["email"] = $row['email'];



}
    echo "<script>window.location='http://" . $_SERVER['SERVER_NAME'] ."/bsieso/home_customer.php';</script>";
}
   else {
      echo "Error ... !! YOUR EMAIL OR PASSWORD IS NOT CORRECT ,, TRY AGAIN !";
  }
}
$conn->close();
?>