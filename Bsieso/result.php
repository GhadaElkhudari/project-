<?php

include("connect_DB.php");

if($_REQUEST['submit']){
$name = $_POST['search'];
if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM product WHERE name LIKE '%$name%'";
	$result = mysqli_query($sele);
	
	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['p_id'];
		echo '<br> name						: '.$row['name'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';
print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}
?>