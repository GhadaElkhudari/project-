<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
     
           $sql = "INSERT INTO `customer` (`f_name`, `l_name`, `email`, password, `phone`) VALUES
		   ( 
                         '$f_name',
                         '$l_name',
                         '$email_address',
						 '$password2',
                          $phone_number
						  )";

if ($conn->query($sql) == TRUE) {
    
    header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/cust_mng.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


}else {
  echo "not found";
}
 ?>
