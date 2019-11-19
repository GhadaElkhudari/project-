<!-- Header -->

<?php session_start(); ?>
 

<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="home_customer.php"> <img src="img/logo.png" hight="100" width="100"> </a> 
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
					<ul>
                            
					        <li><a href="about_customer.php"> About AS </a>
                            <li><a href="shop_customer.php"> Products </a>
                                <div class="megamenu">
                                    <ul class="dropdown">
                                      <li><a href="shop_customer.php"> Mugs </a></li>
                                      <li><a href="shop_customer.php"> Medals </a></li>
									  
                                    </ul>

                                </div>
                            </li>
                            
                            <li><a href="contact_customer.php"> Contact </a></li>
							<li> Profile  
                                <div class="megamenu">
                                    <ul class="dropdown">
                                      <li> <?php echo $_SESSION["email"];?> </li>
                                      <li><a href="logout.php"> logout </a></li>
									  
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

			<!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="result.php" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

				
				 <!-- Cart Area -->
                <div class="cart-area">
                    <a href="cart.php" id="essenceCartBtn"><img src="img/shopping-card-hi.png" alt=""> </a>
                </div>

            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
