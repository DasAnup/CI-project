<?php
echo view('frontend/header');
?>
<div class="inr-ban">
    	<img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/inr-ban.jpg" alt="" />
    </div>
    
    <section class="main-wrap">
    	<div class="container">
            <h2 class="main-title">Contact Us</h2>
            
            <div class="row mt-5">
            	<div class="col-md-7">
                    <h2 class="contact-title"><span>Send Us</span> Message</h2>                    
                    <form class="rd-mailform" action="<?php echo base_url('SendMail/sendMail') ?>" method="post">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Your name</label>
                            <input class="form-control" type="text" name="name" value="">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="form-label">Your phone</label>
                            <input class="form-control" type="text" name="phone" value="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-label">Your e-mail</label>
                            <input class="form-control" type="email" name="email" value="">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" name="message"></textarea>
                          </div>
                        </div>
                      </div>
                      <button class="btn-send" type="submit">Send message</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="map-box">
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.642476699139!2d-122.63408138518075!3d38.24140277967716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085b401156e9109%3A0x732461aa6d021163!2s218%20Payran%20St%2C%20Petaluma%2C%20CA%2094952%2C%20USA!5e0!3m2!1sen!2sin!4v1608286688865!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
echo view('frontend/footer');
?>