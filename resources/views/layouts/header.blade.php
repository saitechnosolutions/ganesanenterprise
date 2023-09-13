<div class="page-wrapper">
    <!-- Preloader -->


    <!-- Main Header-->
    <header class="main-header">
    	<!-- Header Top -->
    	<!-- <div class="header-top">
        	<div class="auto-container">
            	<div class="row clearfix"> -->

                    <!--Top Left-->
                    <!-- <div class="top-left pull-left">
                    	<div class="dropdown lang-dropdown">
                        	<button  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src="images/icons/flog.png" alt="" /> &nbsp; English <span class="fa fa-angle-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Espanish</a></li>
                                <li><a href="#">Chinese</a></li>
                            </ul>
                        </div>
                    </div> -->

                    <!--Top Right-->
                    <!-- <div class="top-right pull-right"> -->

                    	<!--social-icon
                        <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>

                    	<ul>
                        	<li><span class="fa fa-envelope-o"></span>Contact@Decorators.com</li>
                            <li><span class="fa fa-phone"></span>Toll Free: +1 212-212-2376</li>
                            <li><span class="fa fa-clock-o"></span>Mon - Fri : 9:00 -1700</li>
                        </ul>


                    </div>

                </div>

            </div>
        </div>Header Top End -->


        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="./images/Ganesan Enterprises Logo.svg" alt=""></a></div>
                    </div>

                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="@if(url()->current() == 'http://ganesanenterprises.com') current @endif"><a href="/">Home</a></li>
                                    <li class="@if(url()->current() == 'http://ganesanenterprises.com/About-Us') current @else @endif"><a href="/About-Us">About Us</a>
                                    	<!-- <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="@if(url()->current() == 'http://ganesanenterprises.com/Products') current @endif"><a href="/Products">Products</a>
                                    	<!-- <ul>
                                            <li><a href="services.html">Our Services</a></li>
                                            <li><a href="service-single.html">Services Single</a></li>
                                        </ul> -->
                                    </li>


                                    <li class="@if(url()->current() == 'http://ganesanenterprises.com/Contact-Us') current @endif"><a href="/Contact-Us">Contact</a></li>

                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                    </div><!--Nav Outer End-->

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->

                    <!--Search Btn-->
                    <!-- <a href="shopping-cart.html" class="cart-btn-outer"><div class="icon"><span class="flaticon-shopping-bag"></span><span class="count">2</span></div></a>
                    <div class="header-search-icon search-box-btn"><span class="flaticon-search"></span></div>

            	</div>
            </div>
        </div> -->

    </header>
    <!--End Main Header -->


    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">

            <!-- .logo -->
            <!--<div class="logo text-center">-->
                <!--<a href="index.html"><img src="../images/logo-2.png" alt=""></a>-->
            <!--</div><!-- /.logo -->

            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <ul class="navigation">
                    <li class="<?php if ($pageid == 'home') { ?>current<?php } ?>"><a href="/">Home</a></li>
                    <li class="<?php if ($pageid == 'about-us') { ?>current<?php } ?>"><a href="https://ganesanenterprises.com/About-Us">About Us</a>
                    </li>
                    <li class="<?php if ($pageid == 'products') { ?>current<?php } ?>"><a href="https://ganesanenterprises.com/Products">Products</a>
                    </li>
                    <li class="<?php if ($pageid == 'contact') { ?>current<?php } ?>"><a href="https://ganesanenterprises.com/Contact-Us">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->

            <div class="social-icons">
                <ul>
                    <li><a href="https://api.whatsapp.com/send?phone=9876543210" target="_blank"><i class="fa-brands fa-whatsapp whatsapp-icon1"></i></a></li>
                    <li><a href="https://www.facebook.com/ganesanenterprises" target="_blank"><i class="fa fa-facebook facebook-icon1"></i></a></li>                   
                    <li><a href="https://www.instagram.com/ganesan_enterprises/" target="_blank"><i class="fa-brands fa-instagram instagram-icon1"></i></a></li>
                    

                    <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                    <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                    <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                </ul>
            </div>

        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->