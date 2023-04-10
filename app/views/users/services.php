
<link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/services.css'?>">
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
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Barangay Pinyahan E-Services</h1>
	      </div>
      </div>
    </div>
  </section><!-- End Header -->

 <!-- Services -->
 <section class="section-services">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-10 col-lg-8">
					<div class="header-section">
						<h2 class="title">E-SERVICES</h2>
						<p class="description">Technology is continually changing, making it daunting to navigate. 
							We pride ourselves in our ability to simplify and break through the complexity of digital trends. 
							We will guide you through the best options in the most effective way possible to fulfill your 
							needs.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
                            <br>
                            <br>
                            <center><img src="<?= URLROOT . '/user/images/services/file.png'?>" width="200" height="200"></center>
							</span>
							<a href="<?= URLROOT . '/users/request_permit'?>"> <h3 class="title">Business Permit</h3></a>

							
						
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
                            <br>
                            <br>
                            <center><img src="<?= URLROOT . '/user/images/services/Id.png'?>" width="200" height="200"></center>
							</span>
							<a href="<?= URLROOT . '/users/request_id'?>"> <h3 class="title"> Barangay ID</h3></a>

							
						
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
                            <br>
                            <br>
                            <center><img src="<?= URLROOT . '/user/images/services/clearance.png'?>" width="200" height="200"></center>
							</span>
							<a href="<?= URLROOT . '/users/request_clearance'?>"> <h3 class="title"> Barangay Clearance</h3></a>
							
						
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
                            <br>
                            <br>
                            <center><img src="<?= URLROOT . '/user/images/services/certificate.png'?>" width="200" height="200"></center>
							</span>
							<a href="<?= URLROOT . '/users/request_indigency'?>"> <h3 class="title"> Certificate of Indigency</h3></a>
							
						
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="content">
                            <br>
                            <br>
                            <center><img src="<?= URLROOT . '/user/images/services/residency.png'?>" width="200" height="200"></center>
							</span>
							<a href="<?= URLROOT . '/users/request_residency'?>"> <h3 class="title"> Certificate Residency</h3></a>
							
						
						</div>
						<span class="circle-before"></span>
					</div>
				</div>
				<!-- / End Single Service -->
			</div>
		</div>
	</section>
	<!-- / END SECTION SERVICES -->
  <section class ="contact-section">
      <div class ="contact-bg">
        <h2>request services</h2>
        <div class="line">
        </div>
        <p class = "text">You can send us message if you want to request service such as s the cleaning of drainage, repairing defects of road, burial assistance service, etc.
</p>
      </div>
      <div class="contact-body">
        <div class="contact-form">
          <form>
            <textarea rows = "5" placeholder="Message" class = "form-control"></textarea>
            <input type = "submit" class = "send-btn" value = "send message">
          </form>
          <div>
            <img src="<?= URLROOT . '/user/images/request.png'?>" alt = "">
          </div>
        </div>
      </div>     
    </section>

  
<?php
    require APPROOT . '/views/includes/user/footer.php';
?>

