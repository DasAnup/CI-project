<?php
    echo view('frontend/header');
?>
    
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>/assets/images/banner1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>/assets/images/banner1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>/assets/images/banner1.jpg" alt="">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    
    <section class="main-wrap">
    	<div class="container">
        	<div id="cate-carousel" class="owl-carousel owl-theme">
            	<div class="item">
                	<div class="cate-bx">
                    	<div class="cate-img">
                        	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="" />
                        </div>
                        <div class="cate-txt">
                        	<h3>Perfect for the Occasion | Upto 12+ Y</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            	<div class="item">
                	<div class="cate-bx">
                    	<div class="cate-img">
                        	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img2.jpg" alt="" />
                        </div>
                        <div class="cate-txt">
                        	<h3>Goodnight Baby | Upto 2+ Y</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            	<div class="item">
                	<div class="cate-bx">
                    	<div class="cate-img">
                        	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img3.jpg" alt="" />
                        </div>
                        <div class="cate-txt">
                        	<h3>Let Them Soar General Knowledge..</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            	<div class="item">
                	<div class="cate-bx">
                    	<div class="cate-img">
                        	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="" />
                        </div>
                        <div class="cate-txt">
                        	<h3>Perfect for the Occasion | Upto 12+ Y</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            	<div class="item">
                	<div class="cate-bx">
                    	<div class="cate-img">
                        	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img2.jpg" alt="" />
                        </div>
                        <div class="cate-txt">
                        	<h3>Goodnight Baby | Upto 2+ Y</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
            	<h2 class="main-title">POPULAR PRODUCTS</h2>
                
                <div class="phone-main-box">
                	<ul class="product">
                    	<li>
                        	<a href="#">
                                <div class="pro-box">
                                    <img src="<?php echo base_url(); ?>/assets/images/bg1.jpg" alt="" class="img-fluid">
                                    <h3>SWEATERS & <br/>SWEATER SETS <span>Just Under $50</span></h3>
                                </div>
                            </a>
                        </li>
                    	<li>
                        	<div class="duet-bx brdr-btm">
                            	<a href="#">
                                    <figure class="pro-img">
                                        <img src="<?php echo base_url(); ?>/assets/images/pro1.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <h3>My Big Book of Stickers – 300 Reusable Stickers <span>$60</span></h3>
                                </a>
                            </div>
                        	<div class="duet-bx">
                            	<a href="#">
                                    <figure class="pro-img">
                                        <img src="<?php echo base_url(); ?>/assets/images/pro2.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <h3>My Big Book of Stickers – 300 Reusable Stickers <span>$60</span></h3>
                                </a>
                            </div>
                        </li>
                        <li>
                        	<div class="duet-bx brdr-btm">
                            	<a href="#">
                                    <figure class="pro-img">
                                        <img src="<?php echo base_url(); ?>/assets/images/pro3.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <h3>My Big Book of Stickers – 300 Reusable Stickers <span>$60</span></h3>
                                </a>
                            </div>
                        	<div class="duet-bx">
                            	<a href="#">
                                    <figure class="pro-img">
                                        <img src="<?php echo base_url(); ?>/assets/images/pro1.jpg" alt="" class="img-fluid">
                                    </figure>
                                    <h3>My Big Book of Stickers – 300 Reusable Stickers <span>$60</span></h3>
                                </a>
                            </div>
                        </li>
                    	<li>
                        	<a href="#">
                                <div class="pro-box">
                                    <img src="<?php echo base_url(); ?>/assets/images/bg2.jpg" alt="" class="img-fluid">
                                    <h3>Winter Sets <span>Just Under $50</span></h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="text-center">
                	<a href="#" class="btn-view">View All</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="enjoy-sec">
    	<div class="container">
            <h2 class="main-title">Enjoy The Season In Style</h2>
        	<div class="row mt-5">
            	<div class="col-md-6">
                	<div class="enjoy-bx">
                    	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img4.jpg" alt="" />
                        <div class="enjoy-txt">
                            <h4>Winter Specials</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            	<div class="col-md-6">
                	<div class="enjoy-bx">
                    	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img5.jpg" alt="" />
                        <div class="enjoy-txt">
                            <h4>A Holly Jolly Christmas is here</h4>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="main-wrap">
    	<div class="container">
            <h2 class="main-title">Tommy Turnpike Series Audio Books</h2>
            <div class="text-center">
                <a href="#" class="btn-view2">VIEW OUR YOUTUBE CHANNEL</a>
            </div>
        	<div id="vid-carousel" class="mt-5 owl-carousel owl-theme">
            	<div class="item">
                	<div class="video-bx">
                    	<iframe src="https://www.youtube.com/embed/w_DCfoOQVEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Tommy Turnpike: Toy Store Audio Book</h3>
                    </div>
                </div>
            	<div class="item">
                	<div class="video-bx">
                    	<iframe src="https://www.youtube.com/embed/w_DCfoOQVEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>The Boo Family Audio Book</h3>
                    </div>
                </div>
            	<div class="item">
                	<div class="video-bx">
                    	<iframe src="https://www.youtube.com/embed/w_DCfoOQVEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Lucky Lechon Audio Book</h3>
                    </div>
                </div>
            	<div class="item">
                	<div class="video-bx">
                    	<iframe src="https://www.youtube.com/embed/w_DCfoOQVEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Tommy Turnpike: Toy Store Audio Book</h3>
                    </div>
                </div>
            	<div class="item">
                	<div class="video-bx">
                    	<iframe src="https://www.youtube.com/embed/w_DCfoOQVEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>The Boo Family Audio Book</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
            	<div class="offset-md-1 col-md-10">
                	<div class="add-bx">
                    	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/add.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="mt-5">
            	<h2 class="main-title">Top Brands</h2>
            	<div class="row mt-4">
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand1.jpg" alt="" /></a>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand2.jpg" alt="" /></a>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand3.jpg" alt="" /></a>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand4.jpg" alt="" /></a>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand5.jpg" alt="" /></a>
                        </div>
                    </div>
                	<div class="col-lg-2 col-md-4 col-sm-6">
                    	<div class="brand-bx">
                        	<a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/brand6.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php
    echo view('frontend/footer');
?>