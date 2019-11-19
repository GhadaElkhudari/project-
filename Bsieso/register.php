<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Registration</title>
	
	<!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">
	
	
	
	
	
	<style type="text/css">
		
a.A1:link {color:#000099; text-decoration:none}
a.A1:visited {color:#000099; text-decoration:none}
a.A1:hover {color:#00CC00; text-decoration:underline}
a.A1:active {color:white; text-decoration:none}		
		
</style>
	
	
	
	
	 <!-- Favicon  -->
    <link rel="icon" href="img/b.ico">
	
	
	
<?php include "PartView/header.php"; ?>
<?php include "PartView/Script.php"; ?>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
 <!--   <a class="navbar-brand" href="home.php"> <h3> Bsieso </h3> </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="A1"" href="cust_mng.php"><h4>Login</h4></a>
            </li>
           
        </ul>

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Create Your Account</div>
                        <div class="card-body">
                            <form name="my-form"  action="Operations/Addcus.php" method="post">
                                <div class="form-group row">
                                    <label for="f-name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="f_name" class="form-control" name="f_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="l_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="l_name" class="form-control" name="l_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"> Email </label>
                                    <div class="col-md-6">
                                        <input type="email" id="email_address" class="form-control" name="email_address">
                                    </div>
                                </div>

                                

								
								
								 <div class="form-group row">
                                    <label for="password2" class="col-md-4 col-form-label text-md-right">  Password </label>
                                    <div class="col-md-6">
                                        <input type="password" id="password2" class="form-control" name="password2">
                                    </div>
                                </div>
								
								
								
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right"> Phone </label>
                                    <div class="col-md-6">
                                        <input type="number" id="phone_number" class="form-control" name="phone_number">
                                    </div>
                                </div>
								
                                       
                                       <div class="col-md-6 offset-md-4">
									          <button type="submit" class="btn btn-primary"> Confirm AND Login  </button>
                                       </div> 

                                </div>
                            </form>
							
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
