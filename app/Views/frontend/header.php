<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <title>The Tommy Turnpike Show</title>
  </head>
  
  <body>
  	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    
    <header class="header">
    	<div class="container">
        	<div class="logo d-block d-sm-none">
            	<a href="index.html"><img class=" img-fluid" src="<?php echo base_url(); ?>/assets/images/logo.png" alt="" /></a>
            </div>
        	<div class="row flex-row-reverse"> 
                <div class="col-md-5">
                	<div class="cstm-mrgn">
                        <div class="cart-bx">
                            <div class="cart-ico">
                                <img src="<?php echo base_url(); ?>/assets/images/cart.png" alt="" />
                                <span>0</span>
                            </div>
                            <p>Shopping Cart <span>$0.00</span></p>
                        </div>
                        <div class="dropdown">
                            <?php
                                $session = session();
                                $username = $session->get('username');
                            ?>
                            <button class="btn-account dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Hi <?php if(!empty($username)){echo "$username";} else{echo "Guest";}?> <br/><span><?php if(! session()->get('logged_in')){ echo "Login";} else{echo "My Account";}?></span></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start">
                                <?php if(! session()->get('logged_in')){?>
                                <a class="dropdown-item" href="<?php echo base_url('/login');?>">Login</a>
                                <a class="dropdown-item" href="<?php echo base_url('/register');?>">Register</a>
                                <?php } else{?>
                                <a class="dropdown-item" href="<?php echo base_url('/logout');?>">Logout</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>           	
            	<div class="col-md-7">
                	<div class="adv-search">
                        <form action="">
                            <select name="" id="">
                                <option value="" selected="">All Categories</option>
                                <option value="">Mobiles</option>
                                <option value="">Laptops</option>
                                <option value="">TV</option>
                                <option value="">Audio</option>
                                <option value="">Appliances</option>
                                <option value="">Cameras</option>
                                <option value="">Desktop</option>
                                <option value="">Headphone</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Search Your Keywords">
                            <button type="submit" class="btn btn-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                	<nav class="navbar navbar-expand-md navbar-light navigation">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto" id="normal-menu">
                            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url('/about');?>">About Us</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="<?php echo base_url('/contact');?>">Contact Us</a></li>
                        </ul>
                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>