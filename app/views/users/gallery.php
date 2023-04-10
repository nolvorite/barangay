<link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/gallery.css'?>">
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
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Barangay Pinyahan's Gallery</h1>
	      </div>
      </div>
    </div>
  </section><!-- End Header -->


<!-- ======= Gallery Section ======= -->
<div class="filters filter-button-group">
	<ul>
		<li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
		<li><a href="javascript:void(0);" data-filter="ayuda">AYUDA</a></li>
		<li><a href="javascript:void(0);" data-filter="cleanup">Cleanup</a></li>
        <li><a href="javascript:void(0);" data-filter="outreach">Outreach</a></li>
	</ul>
</div>

	<div id="container" class="isotope">
    
		<div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/1.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/1.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/1.jpg'?>"> </a>
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/2.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/2.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/2.jpg'?>"> </a>
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/3.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/3.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/3.jpg'?>"> </a>
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/4.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/4.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/4.jpg'?>"> </a>
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/5.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/5.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/5.jpg'?>"> </a>
    </div>
        
    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/6.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/6.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/6.jpg'?>"> </a>
    </div>
        
    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/7.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/7.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/7.jpg'?>"> </a>
    </div>
        
    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/8.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/8.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/8.jpg'?>"> </a>
    </div>
		
    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/9.jpg'?>">
    </div>         
    <div class="grid-item" data-filter="outreach">
      <img src="<?= URLROOT . '/user/images/gallery/outreach/9.jpg'?>"> </a>
    </div>
    <div class="grid-item" data-filter="cleanup">
      <img src="<?= URLROOT . '/user/images/gallery/cleanup/9.jpg'?>"> </a>
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/10.jpg'?>">
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/11.jpg'?>">
    </div>

    <div class="grid-item" data-filter="ayuda">
      <img src="<?= URLROOT . '/user/images/gallery/ayuda/12.jpg'?>">
    </div>



	</div>
    
    <div class="isotope-pager" style="padding-top: 15px; text-align:center;">
        </div>
    <!-- ======= End Gallery ======= -->

    
    <?php
    require APPROOT . '/views/includes/user/footer.php';
?>

