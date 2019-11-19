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




<?php include "PartView/header_manager.php"; ?>

<?php include "PartView/Script.php"; ?>

	</head>

<body>
<center>
<br> <b



<?php

 include "connect_DB.php";
 
 $sql = "SELECT o_id  FROM `order` where cust_id = $_SESSION[cust_id] and status='inprocess' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['o_id'];
	
}
} 
?> 



    <h3> Orders </h3>


	<br> <br> <br>


      <table id="Orders-Table" border="2" style= "background-color: #ffe6e6; color: black; align_text:center;" >
      <thead>
        <tr>
          <th> &nbsp;&nbsp; Order ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Cust ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Date &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Stutas &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; P ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Quantity &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Text &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Image &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Order Status &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Done/Wait &nbsp;&nbsp; </th>
		  


        </tr>
      </thead>
      <tbody>


        <?php
           include"connect_DB.php";

      	 $sql = "SELECT `order`.* , `invoice`.* FROM `order`, `invoice` WHERE `order`.o_id = `invoice`.o_id";

     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
       while($order = $result->fetch_assoc()) {
            echo
            "<tr>
              <td> &nbsp;&nbsp; {$order['o_id']} &nbsp;&nbsp;</td>
              <td> &nbsp;&nbsp;{$order['cust_id']} &nbsp;&nbsp; </td>
			  <td> &nbsp;&nbsp;{$order['date']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['status']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['p_id']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['quantity']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['text']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp; <img class='rounded' height='100' width='100'  src='upload/{$order['image']}'></td>
              <td> &nbsp;&nbsp;{$order['Order_status']} &nbsp;&nbsp;</td>
			  <th> <a href='orderDone.php?oid=<?php echo {$order['o_id']}  ; ?>' class='btn essence-btn'>Done </a> </th>

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
    </body>
    </html>
    <script type="text/javascript">
    $(document).ready( function () {
    $('#Orders-Table').DataTable();
} );
    </script>
