<!-- Header -->

<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="js/datatables.min.css"/>
<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                 <a class="nav-brand" href="home_manager.php"> <img src="img/logo.png" hight="100" width="100"> </a>
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
                            <li><a href="m_manager.php"> Managers </a></li>
					        <li><a href="m_product.php"> Products </a>
							 <li><a href="m_cat.php"> Category </a>
							<li><a href="m_customer.php"> Customer </a>
							 <li><a href="m_order.php"> Orders </a>


                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

			<!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">



                           <li> Profile
                                <div class="megamenu">
                                    <ul class="dropdown">
                                      <li> <?php echo $_SESSION["email"];?> </li>
                                      <li><a href="logout.php"> logout </a></li>

                                    </ul>

                                </div>
                            </li>



				 <!-- Setting -->
                <div class="cart-area">
                    <a href="setting.php" id="essenceCartBtn"><img src="img/Settings.png" alt=""> </a>
                </div>



            </div>

       </div>
    </header>
    <!-- ##### Header Area End ##### -->
