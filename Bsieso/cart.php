<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bsieso Accessories</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/b.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

<?php include "PartView/header_customer.php"; ?>
<?php include "PartView/Script.php"; ?>
	
	</head>

<body>
<center>


<?php

 include "connect_DB.php";
 
 
 
 $sql = "SELECT o_id  FROM `order` where cust_id = $_SESSION[cust_id] and status='inprocess' ";
$result = mysqli_query($conn, $sql);


 $order_id=0;
$total = 0;
 
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['o_id'];
	
        
		
		

}

}
			
			 ?>
			 
			 <center>
			 <br><br>  
			 
      <table border="2" style= "background-color: white; color: black; align_text:center;" >
      <thead>
        <tr>
		<th> &nbsp;&nbsp; Order ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Product ID &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Image Product &nbsp;&nbsp; </th>
		   <th> &nbsp;&nbsp; Price &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Text &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; image &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Quantity &nbsp;&nbsp; </th>
		  
		  
		  
		  
          
        </tr>
      </thead>
      <tbody>
        <?php
		$sql = "SELECT *  FROM `invoice`  where o_id= $order_id";
        $result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			
			
		
          while( $row = mysqli_fetch_assoc( $result ) ){
			  $sql2 = "SELECT *  FROM `product`  where p_id= $row[p_id]";
			  
			  
			  $result2 = mysqli_query($conn, $sql2);
		
		
		if (mysqli_num_rows($result2) > 0)
			  while( $row2 = mysqli_fetch_assoc( $result2 ) ){
			  
            echo
            "<tr>
			<td> &nbsp;&nbsp; {$row['o_id']} &nbsp;&nbsp;</td>
              <td> &nbsp;&nbsp; {$row['p_id']} &nbsp;&nbsp;</td>
			  <td>  <img class='rounded' height='150' width='150'  src='img/<?= $row[p_id]; ?>.jpg'> </td>
			  <td> &nbsp;&nbsp; {$row2['price']} &nbsp;&nbsp; </td>
              <td> &nbsp;&nbsp; {$row['text']} &nbsp;&nbsp; </td>
		      <td> <img class='rounded' height='150' width='150'  src='upload/{$row['image']}'></td>
              <td> &nbsp;&nbsp;{$row['quantity']} &nbsp;&nbsp; </td>
			  
			  
			  
            </tr>\n";
			
			
          }
		  
		  
		  
		  
		}}
		

        ?>
		
		
      </tbody>
    </table>
	<br> <br> 
	
	
	
	<br> <br> 
	
	<a href="closeorder.php?oid=<?php echo $order_id ; ?>" class="btn essence-btn">Confirm Order </a>
	
	<a href="cancelorder.php?oid=<?php echo $order_id ; ?>" class="btn essence-btn">Cancel </a>

	
	
	
	
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
	
     <?php mysqli_close($conn); ?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <table id="Orders-Table" border="2" style= "background-color: #ffe6e6; color: black; align_text:center;" >
      <thead>
        <tr>
          <th> &nbsp;&nbsp; Order ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Customer ID &nbsp;&nbsp; </th>
          
		  <th> &nbsp;&nbsp; Order Status &nbsp;&nbsp; </th>
     


        </tr>
      </thead>
      <tbody>


        <?php
           include"connect_DB.php";
		   
		   
		   
		   
		   $sql2 = "SELECT o_id  FROM `order` where cust_id = $_SESSION[cust_id] and status='inprocess' ";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
while($row2 = mysqli_fetch_assoc($result2)) {
        $order_id = $row2['o_id'];
	
}
} 

      	 $sql = "SELECT `invoice`.* , `customer`.* FROM `invoice` , `customer` WHERE `customer`.cust_id = $_SESSION[cust_id] and `invoice`.o_id = $order_id";

     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
       while($order = $result->fetch_assoc()) {
            echo
            "<tr>
              <td> &nbsp;&nbsp; {$order['o_id']} &nbsp;&nbsp;</td>
              <td> &nbsp;&nbsp;{$order['cust_id']} &nbsp;&nbsp; </td>
			  
			  <td> &nbsp;&nbsp;{$order['Order_status']} &nbsp;&nbsp;</td>
			  


            </tr>\n";
          }

  }
		 /*  while( $row = mysqli_fetch_assoc( $result )){


            echo
			"<tr>
		  <td> &nbsp;&nbsp; {$row['cust_id']} &nbsp;&nbsp; </td>
              <td> &nbsp;&nbsp;{$row['date']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$row['status']} &nbsp;&nbsp;</td>



			  <td> &nbsp;&nbsp;{$row['quantity']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$row['text']} &nbsp;&nbsp;</td>
			  <td> <img class='rounded' height='150' width='150'  src='upload/{$row['image']}'></td>
			  <td> &nbsp;&nbsp;{$row['status']} &nbsp;&nbsp;</td>
			  </tr>\n";
          }*/




        ?>
      </tbody>
    </table>
     <?php mysqli_close($conn); ?>
	 
	 
	 
	 <br> <br> <br> 
    </body>
    </html>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </center> </body> </html>