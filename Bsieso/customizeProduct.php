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

    <title>Cutomiz Product</title>
	
	
	 <!-- Favicon  -->
    <link rel="icon" href="img/b.ico">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand"> <h3> Bsieso </h3> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Customize Product</div>
                        <div class="card-body">
                            <form name="my-form"  action="invoice.php" method="post" enctype="multipart/form-data">
                                

                                <div class="form-group row">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-right"> Quantity </label>
                                    <div class="col-md-6">
									    <input type="hidden" id="pid"  name="pid" value=<?php echo $_GET['pid']; ?>>
                                        <input type="number" id="quantity" class="form-control" name="quantity">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="text" class="col-md-4 col-form-label text-md-right"> Text </label>
                                    <div class="col-md-6">
                                        <input type="text" id="text" class="form-control" name="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right"> Select image to upload: </label>
                                    <div class="col-md-6">
                                      
                                           <input type="file" name="itemimage" id="image">
                                           <input type="submit" value="Upload Image" name="submit">

                                    </div>
                                </div>

								<div class="col-md-6 offset-md-4">
								
									                     <button type="submit"> Add to shopping cart </button>
									                     <button type="reset"> Cancel </button>
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