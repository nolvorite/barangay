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
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">About Barangay Pinyahan</h1>
	
          <h2 class = "animated bounceInLeft" style = "animation-delay: 0.5s"></h2>  
          
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->

<body style="background-color: white;">
<br>
<br>
<br>
<center> <img src="<?= URLROOT. '/user/images/pinyahan_logo.png' ?>" width="300" height="300"> </center>
<br>
<br>
 <!-- 2 Column 2WH's -->
 <div class="ThreeW ">
      <div class="container-fluid padding ">
         <hr class="my-2">
		   <div id="WS" class="row text-center padding d-flex justify-content-center">
		   	<div class="col-md-5">
         <img src="<?= URLROOT . '/user/images/vision.png'?>"  style="width:15%">
			   	<h1>VISION</h1>
			   	<p>One hundred (100%) drug-free Barangay Pinyahan, uphold high level of literacy and advocate god-fearing residents of the barangay.
			   	</p>
		   	</div>
            <div class="col-md-5">
            <img src="<?= URLROOT . '/user/images/mission.png'?>"  style="width:15%">
		   		<h1>MISSION</h1>
		   		<p>Helping the poor to achieve college education. Education is the key to fight poverty and hunger. Uplift people empowerment and social spirit and 
  strengthen the peace and order for the safety of the residents in Barangay Pinyahan
		   		</p>
		   	</div>
        </div>
    
      </div>
   </div>
<!-- Columns -->

<!-- BARANGAY OFFICIALS SECTION -->
<div class="container"><br>
  <center><div class="row"><div class="col"><h2>Barangay Pinyahan Officials</h2><br></div></div></center>
	
        <!-- KAPITAN -->
<div class="row">
  <div class="col-3">
    <div class="mttcard">
      <img src="<?= URLROOT . '/user/images/kap.png' ?>" style="width:100%">
      <div class="container-fluid"><br>  
        <center><p><b>Jesus P. Lipnica III</b></p></center>
        <center><h6 class="mtttitle"><b>Barangay Captain</b></h5></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='lipnica'> Description </button></p>
      </div>
    </div>
  </div>

      <!-- OFFICIALS -->
  <div class="col-3">
    <div class="mttcard">
      <img src="<?= URLROOT . '/user/images/carol.jpg' ?>" style="width:100%">
      <div class="container-fluid"><br>  
        <center><p><b>Carol T. Cagarungan</b></p></center>
        <center><h6  class="mtttitle"><b> Barangay Secretary</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='carol'> Description </button></p>
      </div>
    </div>
  </div>

  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/leizel.png'?>"  style="width:100%">
      <div class="container-fluid"><br>
        <center><p><b>Leizel Literato</b></p></center>
        <center><h6 class="mtttitle"><b>Barangay Treasurer</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='literato'> Description </button></p>
      </div>
    </div>
  </div>

  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/elvin.jpg'?>"  style="width:100%">
      <div class="container-fluid"><br>
        <center><p><b>Elvin C. Matabang</b></p></center>
        <center><h6 class="mtttitle"><b>Barangay Admin</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='matabang'> Description </button></p>
      </div>
    </div>
  </div>

     <!-- KAGAWAD -->
  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/bernal.jpg'?>" alt="Paul" style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Edwin Bernal</b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='bernal'> Description </button></p>
        </div>
      </div>
    </div>
  
    <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/progalidad.jpg'?>"  style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Anthony T. Progalidad </b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
       <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='prodigalidad'> Description </button></p>
      </div>
    </div>
  </div>

<div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/ricardo.jpg'?>"  style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Ric Villaflor </b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='ric'> Description </button></p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/aspe.jpg'?>"  style="width:100%">
      <div class="container-fluid"><br>
        <center><p><b>Anne Marie U. Aspe </b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='aspe'> Description </button></p>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/rjay.png'?>" alt="Paul" style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Alfredo Cariaga Jr. </b></p></center>
        <center><h6 class="mtttitle"><b>SK Chairperson</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='cariaga'> Description </button></p>
      </div>
    </div>
  </div>

  <div class="col-3">
  <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/marites.jpg'?>" style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Marites T. Palma</b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='palma'> Description </button>
      </div>
    </div>
  </div>
  
  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/dumapat.jpg'?>"  style="width:100%">
     <div class="container-fluid"><br>
        <center><p><b>Susan G. Dumapat </b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='laya'> Description </button>
      </div>
    </div>
  </div>

  <div class="col-3">
    <div class="mttcard">
    <img src="<?= URLROOT . '/user/images/fajardo.jpg'?>"  style="width:100%">
    <div class="container-fluid"><br>
        <center><p><b>Marites Fajardo</b></p></center>
        <center><h6 class="mtttitle"><b>Kagawad</b></h6></center>
        <p><button class="mttbutton description_button" data-toggle="modal" data-target="#descriptionModal" name='fajardo'> Description </button></p>
      </div>
    </div>
  </div>
 
 
  </div>
  </div>
</div>
</div>
</div>
<!-- END OF OUR TEAM SECTION -->

<div class="modal fade" id="descriptionModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">About Barangay Official</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <?php

          include("descriptions/lipnica.php");
          include("descriptions/aspe.php");
          include("descriptions/bernal.php");
          include("descriptions/laya.php");
          include("descriptions/palma.php");
          include("descriptions/cariaga.php");
          include("descriptions/matabang.php");
          include("descriptions/carol.php");
          include("descriptions/literato.php");
          include("descriptions/balmes.php");
          include("descriptions/prodigalidad.php");
          include("descriptions/ric.php");
          include("descriptions/fajardo.php");
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
<?php
    require APPROOT . '/views/includes/user/footer.php';
?>

