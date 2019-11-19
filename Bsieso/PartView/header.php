<!-- Header -->

<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="home.php"> <img src="img/logo.png" hight="100" width="100"> </a> 
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
                            <li><a href="home.php"> Home </a>
					        <li><a href="about.php"> About AS </a>
                            <li><a href="shop.php"> Products </a>
                                <div class="megamenu">
                                    <ul class="dropdown">
                                      <li><a href="shop.php"> Mugs </a></li>
                                      <li><a href="shop.php"> Medals </a></li>
									  
                                    </ul>

                                </div>
                            </li>
                            
                            <li><a href="contact.php"> Contact </a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

			<!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="/bsieso/result.php" method="post">
                        <input type="search" name="search" id="Search" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="register.php"><img src="img/user.png" alt=""></a>
                </div>
				
				 <!-- Cart Area -->
                <div class="cart-area">
                    <a href="order_NotFound.php" id="essenceCartBtn"><img src="img/shopping-card-hi.png" alt=""> </a>
                </div>

            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
