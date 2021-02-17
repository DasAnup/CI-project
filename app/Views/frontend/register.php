<?php
    echo view('frontend/header');
?>
<div class="inr-ban">
        <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/inr-ban.jpg" alt="" />
    </div>
    
    <section class="main-wrap">
        <div class="container">
            <h2 class="main-title">Register</h2>
            <div>&nbsp;</div>
            
            <div class="row">
                <div class="about-img2 col-md-6">
                    <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="">
                </div>
                <div class="wlcm-txt col-md-6">
                    <?php if(isset($validation)):?>
                        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                    <?php endif;?>                  
                    <form action="<?php echo base_url('/registercontroller/save');?>" method="post">
                        <input type="text" name="firstname" value="<?= set_value('firstname') ?>" class="form-control" placeholder="Enter First Name"><br/>
                        <input type="text" name="lastname" value="<?= set_value('lastname') ?>" class="form-control" placeholder="Enter Last Name"><br/>
                        <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Enter Email"><br/>
                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Enter Username"><br/>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password"><br/>
                        <input type="submit" name="register" value="Register" class="btn">
                    </form>
                </div>
            </div>
            
            
        </div>
    </section>
<?php
    echo view('frontend/footer');
?>