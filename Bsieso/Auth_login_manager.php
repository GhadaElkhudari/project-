<?php


session_start();


if(isset($_POST["email"]))
{
  include "connect_DB.php";
  
extract($_POST);
  
  $sql = "SELECT * FROM manager WHERE email = '$email' AND password = '$password' ";
  
  $result = $conn->query($sql);
  $check=$result->num_rows;
  if ($result->num_rows > 0) {
	  
while($row = $result->fetch_assoc()) {
      // output data of each row
$_SESSION["mng_id"] = $row['m_id'];
$_SESSION["email"] = $row['email'];
$_SESSION['mng_id']=$row['m_id'];



}
    echo "<script>window.location='http://" . $_SERVER['SERVER_NAME'] ."/bsieso/home_manager.php';</script>";
}
   else {
      echo "Error ... !! YOUR EMAIL OR PASSWORD IS NOT CORRECT ,, TRY AGAIN !";
  }
}
$conn->close();
?>