<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
       
           $sql = "INSERT INTO Manager
         (f_name, l_name,salary,email, password,phone,status)
                     VALUES (
                         '$f_name',
                         '$l_name',
						  $salary,
                         '$email_address',
                         '$password2',
                          $phone_number,
						  $status)";

if ($conn->query($sql) == TRUE) {
    echo "Done";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


}else {
  echo "not found";
}
 ?>
