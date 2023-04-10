
<?php
    require APPROOT . '/views/includes/user/head.php';
    require APPROOT . '/views/includes/user/header.php';
?>

<!-- ======= Header Section ======= -->
<section id="header" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Welcome to Barangay Pinyahan</h1>
	
          <h2 class = "animated bounceInLeft" style = "animation-delay: 0.5s"></h2>  
          
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->
<main id="main">

 <!-- About Us -->
 <section class="ab">
	 	 <div class="about">
     		 <div class="inner-section">
        	    <h1>About Us</h1>
         	   <p class="text">
              Pinyahan, sometimes spelled Piñahan, is a barangay of Quezon City, the Philippines.
              Barangay Pinyahan was previously part of Central District Diliman. Central District Diliman was divided into two separate entities, namely Barangay Central and Pinyahan.
              Pinyahan means "a place where pineapple is grown" in Tagalog. Prior to its subdivision by the People's Homesite and Housing Corporation, the land which occupies present-day 
              Pinyahan was a popular place for cultivating pineapples since the 1930s, thus the name of the barangay.
			   </p>
			  
           		<div class="skills">
					<form action="<?= URLROOT. '/users/about' ?>">
							<button class="btn">Learn More</button>
					</form>
         		</div>
      	    </div>
	 	  </div>
		</section>
	  <!-- End of About Us -->
      
	
	<!-- Map background -->	
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.3719652420127!2d121.04504465005932!3d14.634814580111446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7a5a8eeaaab%3A0xd5d70f3ad4dad916!2s37%20Malakas%20St%2C%20Diliman%2C%20Quezon%20City%2C%201100%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1664963912208!5m2!1sen!2sph" 
    width="2500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<div id="fixed">
  </div>
	<!-- Contact Us -->
	<section class="contact">
		<div id="Contact" class="contact-box">
			<div class="left">
			<img src="<?= URLROOT. '/user/images/contact.png' ?>" class="img-fluid" style="width:100%;">
      
      </div>
			<div class="right">
				<h2>Get in Touch</h2>
				<p>Need to get in touch with the barangay? We're all ears!</p>
				<form method="get" action="<?= URLROOT. '/users/contact' ?>">
					<button class="btn"> Contact Us</button>
				</form>
			</div>
		</div>
	</section>
	<!-- End of Contact Us -->
  </br>
  </br>


  
<?php
    require APPROOT . '/views/includes/user/footer.php';
?>
<?php require APPROOT . '/views/includes/scripts.php'; ?>
