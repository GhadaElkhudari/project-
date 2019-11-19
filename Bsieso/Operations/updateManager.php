<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
       
           $sql = "UPDATE manager 
		          SET
				  f_name='$f_name',
				  l_name='$l_name',
				  salary=$salary,
				  email='$email_address',
				  
				  phone=$phone_number,
				  status='$f_name' 
				  where m_id=$m_id";

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
