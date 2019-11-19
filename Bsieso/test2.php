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
<br> <br> 
    <h3> Orders </h3> 
	
	
	<form name="my-form" method="post" action="test2.php">
                                <div class="form-group row">
                                    <label for="order_id" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="number" id="order_id" class="form-control" name="order_id">
                                    </div>
                                </div>
	
	
	                                   <div class="col-md-6 offset-md-4">
									          <button type="submit" class="btn btn-primary"> Enter Order ID  </button>
                                       </div> 
	
	
	</form>
	
	
	<br> <br> <br> 


	<?php
     include"connect_DB.php";
	 
	 
	 $sql = "SELECT * FROM `order` , `invoice` where o_id=$order_id";
	 
	 
	 
	// $sql2 = "selsct * from invoice";
	 
$result = mysqli_query($conn, $sql);


//$result2 = mysqli_query($conn, $sql2);

     
      ?>
      <table border="2" style= "background-color: #ffe6e6; color: black; align_text:center;" >
      <thead>
        <tr>
          <th> &nbsp;&nbsp; Order ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Customer ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Date &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Stutas &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Product ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Quantity &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Text &nbsp;&nbsp; </th>
		  <th> &nbsp;&nbsp; Image &nbsp;&nbsp; </th> 
		  
          
        </tr>
      </thead>
      <tbody>
	  
	  
        <?php
		
		
		//$row = mysqli_fetch_assoc( $result );
        

		while( $order = mysqli_fetch_assoc( $result )){
			  
		
            echo
            "<tr>
              <td> &nbsp;&nbsp; {$order['o_id']} &nbsp;&nbsp;</td>
              <td> &nbsp;&nbsp;{$order['cust_id']} &nbsp;&nbsp; </td>
			  <td> &nbsp;&nbsp;{$order['date']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['status']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['p_id']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['quantity']} &nbsp;&nbsp;</td>
			  <td> &nbsp;&nbsp;{$order['text']} &nbsp;&nbsp;</td>
			  <td> <img class='rounded' height='100' width='100'  src='upload/{$order['image']}'></td> 
			  
			  
            </tr>\n";
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


</center>
</body>



</html>
