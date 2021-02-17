<?php
    echo view('frontend/header');
?>
<div class="inr-ban">
        <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/inr-ban.jpg" alt="" />
    </div>
    
    <section class="main-wrap">
        <div class="container">
            <h2 class="main-title">Login</h2>
            <div>&nbsp;</div>
            
            <div class="row">
                <div class="about-img2 col-md-6">
                    <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/img1.jpg" alt="">
                </div>
                <div class="wlcm-txt col-md-6">
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif;?>               
                    <form action="<?php echo base_url('/logincontroller/auth');?>" method="post">
                        <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Enter User Name"><br/>
                        <input type="password" name="password" value="" class="form-control" placeholder="Enter Password"><br/>
                        <input type="submit" name="login" value="Login" class="btn">
                    </form>
                </div>
            </div>
            
            
        </div>
    </section>
<?php
    echo view('frontend/footer');
?>