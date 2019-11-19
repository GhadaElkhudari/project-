<?php
session_start();
//login.php
if(isset($_POST["Email"]))
{
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
echo "Connected successfully";
  
extract($_POST);
  $sql = "SELECT cust_id,email FROM customer WHERE email = '$email' AND password = md5('$password') ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
      // output data of each row
$_SESSION["cust_id"] = $row['cust-id'];
$_SESSION["email"] = $row['f_name'];
}
    echo "<script>window.location='http://" . $_SERVER['127.0.0.1'] ."home.php';</script>";
}
   else {
      echo "اسم المستخدم او كلمة المرور خطأ ..";
  }
}

?>