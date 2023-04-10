<link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/hotlines.css'?>">
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
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Emergency Hotlines</h1>
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
            </div>
            </div>

<br> <br>

  
<section class="contact-page-sec">
    <div class="container">
     <br> 
  <h2>EMERGENCY HOTLINES</h2>
</div>
    <hr> <br>
    <article class="contact-card">
  <img src="<?= URLROOT . '/user/images/phone-call.png'?>" alt="call" class="contact-card__thumb">
  <h1 class="contact-card__name">Barangay Hall Contact Number(s):</h1>
  <p class="contact-card__title" class = "fa-phone"> +632 434-9410 / +632 921-6243 </p>
  <button class="contact-card__btn-message">Call</button>
</article><br><br>

  
</section>
</div>
<!--End Hotlines-->


<?php
    require APPROOT . '/views/includes/user/footer.php';
?>

