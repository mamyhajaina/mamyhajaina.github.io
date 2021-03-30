<?php
session_start();
?>
<header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li ><h2><?php echo $_SESSION['name_client']?></h2></li>
                                    <li class="drop"><a href="index.php">Home</a></li>
                                    <!-- <li class="drop"><a href="portfolio-card-box-2.php">portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="portfolio-card-box-2.php">portfolio</a></li>
                                            <li><a href="single-portfolio.php">Single portfolio</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="drop"><a href="blog.php">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.php">blog 3 column</a></li>
                                            <li><a href="blog-details.php">Blog details</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="drop"><a href="shop.php">Shop</a>
                                        <ul class="dropdown mega_dropdown">
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.php">shop layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="shop.php">default shop</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="shop.php">product details layout</a>
                                                <ul class="mega__item">
                                                    <li><a href="product-details.php">tab style 1</a></li></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li>
                                                <ul class="mega__item">
                                                    <li>
                                                        <div class="mega-item-img">
                                                            <a href="shop.php">
                                                                <img src="images/feature-img/3.png" alt="">
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                        </ul>
                                    </li>
                                    <!-- <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="about.php">about</a></li>
                                            <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="customer-review.php">customer review</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.php">shop</a></li>
                                            <li><a href="shop-sidebar.php">shop sidebar</a></li>
                                            <li><a href="product-details.php">product details</a></li>
                                            <li><a href="cart.php">cart</a></li>
                                            <li><a href="wishlist.php">wishlist</a></li>
                                            <li><a href="checkout.php">checkout</a></li>
                                            <li><a href="team.php">team</a></li>
                                            <li><a href="login-register.php">login & register</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="contact.php">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><h2>Home</h2></li>
                                        <li><a href="index.php">Home</a></li>
                                        <!-- <li><a href="#">portfolio</a>
                                            <ul>
                                                <li><a href="portfolio-card-box-2.php">portfolio</a></li>
                                                <li><a href="single-portfolio.php">Single portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.php">blog</a>
                                            <ul>
                                                <li><a href="blog.php">blog 3 column</a></li>
                                                <li><a href="blog-details.php">Blog details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.php">about</a></li>
                                                <li><a href="customer-review.php">customer review</a></li>
                                                <li><a href="shop.php">shop</a></li>
                                                <li><a href="shop-sidebar.php">shop sidebar</a></li>
                                                <li><a href="product-details.php">product details</a></li>
                                                <li><a href="cart.php">cart</a></li>
                                                <li><a href="wishlist.php">wishlist</a></li>
                                                <li><a href="checkout.php">checkout</a></li>
                                                <li><a href="team.php">team</a></li>
                                                <li><a href="login-register.php">login & register</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="contact.php">contact</a></li>
                                        <li><a href="deconnexion.php">Deconnecter</a></li>
                                    </ul>
                                </nav>
                            </div>                         
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li><a href="login-register.php"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>