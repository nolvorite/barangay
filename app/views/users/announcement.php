<link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/hotlines.css'?>">
   <link rel="stylesheet" type="text/css" href="<?=  URLROOT . '/user/css/about.css'?>">
<?php
    require APPROOT . '/views/includes/user/head.php';
    require APPROOT . '/views/includes/user/header.php';
?>


<!-- ======= Header Section ======= -->
<section id="header" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Barangay Announcement</h1>
	
          <h2 class = "animated bounceInLeft" style = "animation-delay: 0.5s"></h2>  
          
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->

<div class="container">


    <h1 class="text-center">Barangay Pinyahan</h1>
    <hr>
    <div class="row text-center py-3">
        <?php 
        require_once 'component.php';
        require APPROOT . '/views/includes/dbh.inc.php';
       
        $query = "SELECT * FROM announcement";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            component($row['id'],$row['title'],$row['price'], $row['product_image'],$row['modal_images']);
        }
        
        ?>

    </div>
    <hr>

    <br>
</div>



<?php
    require APPROOT . '/views/includes/user/footer.php';
?>
