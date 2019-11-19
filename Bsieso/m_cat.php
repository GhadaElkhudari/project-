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
    <h3> Category </h3> 
	
	<br> <br> 


	<?php
     include"connect_DB.php";
	 
	 
	 $sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

     
      ?>
      <table border="2" style= "background-color: #ffe6e6; color: black; align_text:center;" >
      <thead>
        <tr>
          <th> &nbsp;&nbsp; Category ID &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Name &nbsp;&nbsp; </th>
          <th> &nbsp;&nbsp; Manager ID &nbsp;&nbsp; </th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td> &nbsp;&nbsp; {$row['cat_id']} &nbsp;&nbsp;</td>
              <td> &nbsp;&nbsp; {$row['name']} &nbsp;&nbsp; </td>
              <td> &nbsp;&nbsp;{$row['m_id']} &nbsp;&nbsp;</td>
            
			  
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($conn); ?>
    </body>
    </html>


</center>
</body>



</html>
