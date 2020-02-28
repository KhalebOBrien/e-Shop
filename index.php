<?php
session_start();
/**
 * code_witch
 * ebukauche52@gmail.com
 * 28th Feb, 2020
*/
require 'application/utilities/utility.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title><?php echo Utility::APPLICATION_TITLE ?> :: Home</title>
        <!--link href="assets/css/bootstrap.min.css" rel="stylesheet"--><!--Bootstrap v4.3.1-->

        <link href="assets/css/bootstrap-337.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome/css/all.min.css" rel="stylesheet"><!--Font Awesome v5.8.2-->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
    	<!-- Top Begin -->
		<div id="top">
		    <div class="container">
		        <!-- container Begin -->
		        <div class="col-md-6 offer">
		            <!-- col-md-6 offer Begin -->
		            <a class="btn btn-success btn-sm" href="#">Welcome</a>
		            <a href="#">59 Items In Your Cart | Total Price: $5020.36</a>
		        </div>
		        <!-- col-md-6 offer Finish -->
		        <div class="col-md-6">
		            <!-- col-md-6 Begin -->
		            <ul class="menu">
		                <!-- menu Begin -->
		                <li>
		                    <a href="#">Register</a>
		                </li>
		                <li>
		                    <a href="#">My Account</a>
		                </li>
		                <li>
		                    <a href="#">Go To Cart</a>
		                </li>
		                <li>
		                    <a href="#">Login</a>
		                </li>
		            </ul>
		            <!-- menu Finish -->
		        </div>
		        <!-- col-md-6 Finish -->
		    </div>
		    <!-- container Finish -->
		</div>
		<!-- Top Finish -->

		<!-- navbar navbar-default Begin -->
		<div class="navbar navbar-default" id="navbar">
		    <div class="container">
		        <!-- container Begin -->
		        <div class="navbar-header">
		            <!-- navbar-header Begin -->
		            <a class="navbar-brand home" href="./">
		                <!-- navbar-brand home Begin -->
		                <img alt="company logo" class="hidden-xs" src="assets/images/ecom-store-logo.png">
		                    <img alt="company logo Mobile" class="visible-xs" src="assets/images/ecom-store-logo-mobile.png"></img>
		                </img>
		            </a>
		            <!-- navbar-brand home Finish -->
		            <button class="navbar-toggle" data-target="#navigation" data-toggle="collapse">
		                <span class="sr-only">Toggle Navigation</span>
		                <i class="fa fa-align-justify"></i>
		            </button>
		            <button class="navbar-toggle" data-target="#search" data-toggle="collapse">
		                <span class="sr-only">Toggle Search</span>
		                <i class="fa fa-search"></i>
		            </button>
		        </div>
		        <!-- navbar-header Finish -->
		        <div class="navbar-collapse collapse" id="navigation">
		            <!-- navbar-collapse collapse Begin -->
		            <div class="padding-nav">
		                <!-- padding-nav Begin -->
		                <ul class="nav navbar-nav left">
		                    <!-- nav navbar-nav left Begin -->
		                    <li class="active">
		                        <a href="./">Home</a>
		                    </li>
		                    <li>
		                        <a href="#">Shop</a>
		                    </li>
		                    <li>
		                        <a href="#">My Account</a>
		                    </li>
		                    <li>
		                        <a href="#">Shopping Cart</a>
		                    </li>
		                    <li>
		                        <a href="#">Contact Us</a>
		                    </li>
		                </ul>
		                <!-- nav navbar-nav left Finish -->
		            </div>
		            <!-- padding-nav Finish -->
		            <a class="btn navbar-btn btn-primary right" href="#">
		                <!-- btn navbar-btn btn-primary Begin -->
		                <i class="fa fa-shopping-cart"></i>
		                <span>59 Items In Your Cart</span>
		            </a>
		            <!-- btn navbar-btn btn-primary Finish -->
		            <div class="navbar-collapse collapse right">
		                <!-- navbar-collapse collapse right Begin -->
		                <button class="btn btn-primary navbar-btn" data-target="#search" data-toggle="collapse" type="button">
		                    <!-- btn btn-primary navbar-btn Begin -->
		                    <span class="sr-only">Toggle Search</span>
		                    <i class="fa fa-search"></i>
		                </button>
		                <!-- btn btn-primary navbar-btn Finish -->
		            </div>
		            <!-- navbar-collapse collapse right Finish -->
		            <div class="collapse clearfix" id="search">
		                <!-- collapse clearfix Begin -->
		                <form action="" class="navbar-form" method="get">
		                    <!-- navbar-form Begin -->
		                    <div class="input-group">
		                        <!-- input-group Begin -->
		                        <input class="form-control" name="user_query" placeholder="Search" required="" type="text">
		                            <span class="input-group-btn">
		                                <!-- input-group-btn Begin -->
		                                <button class="btn btn-primary" name="search" type="submit" value="Search">
		                                    <i class="fa fa-search"></i>
		                                </button>
		                            </span>
		                            <!-- input-group-btn Finish -->
		                        </input>
		                    </div>
		                    <!-- input-group Finish -->
		                </form>
		                <!-- navbar-form Finish -->
		            </div>
		            <!-- collapse clearfix Finish -->
		        </div>
		        <!-- navbar-collapse collapse Finish -->
		    </div>
		    <!-- container Finish -->
		</div>
		<!-- navbar navbar-default Finish -->

		<!-- container Begin -->
		<div class="container" id="slider">
		    <div class="col-md-12">
		        <!-- col-md-12 Begin -->
		        <div class="carousel slide" data-ride="carousel" id="myCarousel">
		            <!-- carousel slide Begin -->
		            <ol class="carousel-indicators">
		                <!-- carousel-indicators Begin -->
		                <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
		                <li data-slide-to="1" data-target="#myCarousel"></li>
		                <li data-slide-to="2" data-target="#myCarousel"></li>
		                <li data-slide-to="3" data-target="#myCarousel"></li>
		            </ol>
		            <!-- carousel-indicators Finish -->
		            <div class="carousel-inner">
		                <!-- carousel-inner Begin -->
		                <div class="item active">
		                    <img alt="Slider Image 1" src="assets/images/slide-1.jpg"></img>
		                </div>
		                <div class="item">
		                    <img alt="Slider Image 2" src="assets/images/slide-2.jpg"></img>
		                </div>
		                <div class="item">
		                    <img alt="Slider Image 3" src="assets/images/slide-3.jpg"></img>
		                </div>
		                <div class="item">
		                    <img alt="Slider Image 4" src="assets/images/slide-4.jpg"></img>
		                </div>
		            </div>
		            <!-- carousel-inner Finish -->
		            <a class="left carousel-control" data-slide="prev" href="#myCarousel">
		                <!-- left carousel-control Begin -->
		                <span class="glyphicon glyphicon-chevron-left"></span>
		                <span class="sr-only">Previous</span>
		            </a>
		            <!-- left carousel-control Finish -->
		            <a class="right carousel-control" data-slide="next" href="#myCarousel">
		                <!-- left carousel-control Begin -->
		                <span class="glyphicon glyphicon-chevron-right"></span>
		                <span class="sr-only">Next</span>
		            </a>
		            <!-- left carousel-control Finish -->
		        </div>
		        <!-- carousel slide Finish -->
		    </div>
		    <!-- col-md-12 Finish -->
		</div>
		<!-- container slider Finish -->


        <script src="assets/js/jquery.min.js"></script><!--jQuery v3.4.1-->
        <script src="assets/js/bootstrap-337.min.js"></script>
        <!--script src="assets/js/bootstrap.min.js"></script--><!--Bootstrap v4.3.1-->
    </body>
</html>