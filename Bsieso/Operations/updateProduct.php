<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
       include "../connect_DB.php";
  
           $sql = "UPDATE product
        SET name=["name"],description=["description"],price=["price"],cat_id=["cat_id"]
		where p_id=["p_id"]";

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
