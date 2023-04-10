
<link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/contact.css'?>">

<?php
    require APPROOT . '/views/includes/user/head.php';
?>
<?php
    require APPROOT . '/views/includes/user/header.php';
?>
<!-- ======= Header Section ======= -->
<section id="header" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Contact Us</h1>
	      </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

<!-- ======= Hotlines Section ======= -->



<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
          <br>
          <br>
          <div class="btn-text-left">  
          <a class = "hotlink" href="<?= URLROOT. '/users/hotlines' ?>">Emergency Hotlines</a>
            &nbsp &nbsp
             <a class = "hotlink" href="<?= URLROOT. '/users/contact'?>">Contact Us</a>
            
            </div>
            </div>
           


            



    <div class="container">
    <br> 
  <h2>CONTACT US TODAY</h2>
</div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-info">
    <div class="contact-info-item">
    <div class="contact-info-icon">
      <i class="fas fa-map-marked"></i>
      </div>
      <div class="contact-info-text">
      <h2>address</h2>
      <span> Barangay Pinyahan </span> 
      <span> Quezon, City</span> 
      </div>
      </div>            
      </div>          
      </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail</h2>
                <span>barangaypinyahan16@gmail.com</span>
              </div>
            </div>            
          </div>                
        </div>                
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>office time</h2>
                <span>Mon - Thu  8:00 am - 6.00 pm</span>
                <span>Thu - Sat  9.00 am - 5.00 pm</span>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="contact-page-form" method="post">
            <h2>Get in Touch</h2> 
            <form action="contact-mail.php" method="post">
              <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Your Name" name="name"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="email" placeholder="E-mail" name="email" required/>
                </div>
              </div>                              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Phone Number" name="phone"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Subject" name="subject"/>
                </div>
              </div>                
              <div class="col-md-12 message-input">
                <div class="single-input-field">
                  <textarea  placeholder="Write Your Message" name="message"></textarea>
                </div>
              </div>                                                
              <div class="single-input-fieldsbtn">
                <input type="submit" value="Send Now"/>
              </div>                          
            </div>
            </form>   
          </div>      
        </div>
        <div class="col-md-4">        
          <div class="contact-page-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d625.357791136694!2d121.04732579794711!3d14.634644585570904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7a50616cc31%3A0xce2ddde600d1b0c9!2sPinyahan%20Barangay%20Hall!5e1!3m2!1sen!2sph!4v1668666495044!5m2!1sen!2sph5" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
           
          </div>          
        </div>        
      </div>
    </div>
  </section><br><br>

<!--End Contact Page-->

<?php
    require APPROOT . '/views/includes/user/footer.php';
?>
