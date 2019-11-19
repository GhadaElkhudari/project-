<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
       $pass= md5($password);
           $sql = "INSERT INTO product
         (name, description,price, cat_id)
                     VALUES (
                         '$name',
                         '$Description',
						 $price,
						 $cat_id)";

if ($conn->query($sql) === TRUE) {
    echo "Done";
   // header('Location: http://'. $_SERVER["SERVER_NAME"].'/bsieso/invoice.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


}else {
  echo "not found";
}
 ?>
