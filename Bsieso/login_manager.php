<!DOCTYPE html >
<html>
<head>
<title>LOGIN</title>


<!-- Favicon  -->
    <link rel="icon" href="img/b.ico">

<!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    
	
	
	<style type="text/css">
		
a.A1:link {color:#000099; text-decoration:none}
a.A1:visited {color:#000099; text-decoration:none}
a.A1:hover {color:#00CC00; text-decoration:underline}
a.A1:active {color:white; text-decoration:none}		
		
</style>
	<?php include "PartView/header.php"; ?>
    <?php include "PartView/Script.php"; ?>
</head>

<body>
<center>
 <section class="welcome_area bg-img background-overlay" style="background-image: url(img/img/background.jpg);">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">

<br><br><br><br><br><br>
<h3>LOGIN</h3>
<br> 
    <form method="post" action="auth_login_manager.php" >
        <table border="0.5" >
		
		
            <tr>
                <td><label for="email">Email &nbsp;&nbsp;</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
		
			
            <tr>
                <td><label for="password"> Password &nbsp;&nbsp;</label></td>
                <td><input type="password" name="password" id="password"></input></td>
            </tr>
			
			</table>
			
			<br> 
			
			 <table border="0.5" >
			
            <tr> 
                <td><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;  Submit  &nbsp;&nbsp;&nbsp;&nbsp;" href="home_customer.php"/> </td>
                <td><input type="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;  Reset  &nbsp;&nbsp;&nbsp;&nbsp;"/> </td> 
			</tr>	
				
		</table>
			
			<br> 
			
			 <table border="0.5" >
			
			<tr>
				 <td> <a class="A1" href="register.php"> <h4> Register </h4> </a> </td> 
            </tr>
			
			<tr>
				 <td> <a href="cust_mng.php"><center> <img src="img/back.jpg" height="50" width="50"></center> </a></td> 
            </tr>
			
			
        </table>
    </form>



</div>
                </div>
            </div>
        </div>
  </center>  
</section>
</body>
</html>