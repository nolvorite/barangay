<?php
    require APPROOT . '/views/includes/user/head.php';
    // require APPROOT . '/views/includes/user/header.php';
?>
<!--Header-->
<header class="header">
   <div class="header-inner navbar-scroll">
    <div class="container-fluid px-lg-5">
	 
     <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#"><span class="logo">
    <img src="<?= URLROOT. '/user/images/pinyahan_logo.png' ?>" class="img-fluid" style="width:100px; margin:-3px 0px 0px 0px;"></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
  </button>
<!--Navigation Bar-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= URLROOT. '/' ?>">Home</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?= URLROOT. '/users/about' ?>">About us</a>
      </li>	  

      <li class="nav-item">
        <a class="nav-link" href="announcement.php">Announcements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hotlines.php">Hotlines</a>
      </li>
    
	 
    

    </ul> 
  <!-- END OF UL -->


  <!--Login Button at navigation bar-->
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item dropleft">
      <a class="nav-link dropdown-toggle" href="<?= URLROOT . '/users/login' ?>" id="navbarDropdownMenuLink">
          Log in
      </a>
    </li>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item dropleft">
      <a class="nav-link dropdown-toggle" href="<?= URLROOT . '/users/register' ?>" id="navbarDropdownMenuLink">
          Signup
      </a>
    </li>
  </ul>
  </div>
</div>
</nav>
</header>


                <main style="height:100vh;">
                    <div class="container-fluid d-flex align-items-center"style="height:100vh;">

   
                            <div class="card mb-2 col-12 offset-md-4 col-md-4 mt-5 mb-5 ">
                                <div class="card-header bg-white">

                                    <div class="row">
                                        <h4 class="mx-auto text-secondary text-center">Login</h4>
                                    </div>
                                </div>

                                <div class="card-body ">
                                <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                                            <div class="row g-3 bg-transparent">
                                            <div class="col-12 col-md-12">
                                                  <!-- <h3 class="text-secondary text-center fw-bold">Login to continue</h3> -->
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <input type="text" class="form-control form-control-lg " value="<?php echo $data['username'] ?>" name="username" placeholder="Username" aria-label="First name">
                                                </div>
                                                <div class="text-danger ml-3"><?php echo $data['usernameError'] ?></div>
                                                <div class="col-12 col-md-12 password-container mt-3">
                                                    <input type="password" id="password" class="form-control form-control-lg " name="password" placeholder="password" aria-label="Password">
                                                    <!-- <i class="" aria-hidden="true"id="togglePassword"></i> -->
                                                    <!-- <span id="field-icon" toggle="#password" class="fa fa-fw fa-eye  toggle-password"></span> -->
                                                </div>
                                                <div class="text-danger ml-3"><?php echo $data['passwordError'] ?></div>
                                                <div class="d-grid gap-2 mt-3">
                                                    <button class="btn btn-primary" type="submit">Login</button>
                                                </div>


                                                <div class="col-12 col-md-12 text-center pb-3 mt-3">
                                                    <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modalRegister" class="btn btn-secondary btn-lg rounded-pill">Create new account</button> -->
                                                    <a href="<?php echo URLROOT .'/users/register' ?>" type="button"  class="btn btn-outline-secondary btn-lg rounded-pill">Create an account</a>
                                                </div>
                                            </div>



                                        </form>   
                                </div>

                            </div>







                    </div>
                </main>
                                     

<?php

    // require APPROOT . '/views/includes/user/footer.php';
?>