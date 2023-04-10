<?php
    require APPROOT . '/views/includes/user/head.php';

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


  </div>
</div>
</nav>
</header>
                <main style="height:100vh;">
                    <div class="container-fluid d-flex align-items-center "style="height:100vh;">


                            <div class="card mb-2 col-12 offset-md-4 col-md-4 mt-4 mb-5">
                                <div class="card-header bg-white">

                                    <div class="row">
                                        <h4 class="mx-auto text-secondary text-center">Create an account</h4>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <form action="<?php echo URLROOT; ?>/users/register" method="POST">
                                        <div class="row g-3">

                                            <div class="col-6 col-md-6">
                                                <input type="text" class="form-control" value="<?php echo $data['lastName'] ?>" placeholder="Last name" name="lastName" aria-label="Last name">
                                                <div class="validation-invalid"><?php echo $data['lastNameError'] ?></div>

                                            </div>

                                            <div class="col-6 col-md-6">
                                                <input type="text" class="form-control" value="<?php echo $data['firstName'] ?>" placeholder="First name" name="firstName"  aria-label="First name">
                                                <div class="validation-invalid"><?php echo $data['firstNameError'] ?></div>
                                            </div>

                                            <div class="col-6 col-md-6 mt-3">
                                                <input type="text" class="form-control" value="<?php echo $data['middleName'] ?>" placeholder="Middle name" name="middleName"  aria-label="Middle name">
                                                <div class="validation-invalid"><?php echo $data['middleNameError'] ?></div>
                                            </div>

                                            <div class="col-6 col-md-6 mt-3">
                                                <input type="text" class="form-control" value="<?php echo $data['suffix'] ?>" placeholder="Suffix" name="suffix" aria-label="Suffix">
                                                <div class="validation-invalid"><?php echo $data['suffixError'] ?></div>
                                            </div>

                                                
                                            <div class="col-12 col-md-12 mt-3">
                                                <input type="text" class="form-control" value="<?php echo $data['username'] ?>" placeholder="Username" name="username" aria-label="Username">
                                                <div class="validation-invalid"><?php echo $data['usernameError'] ?></div>  
                                            </div>

                                            <div class="col-12 col-md-12 mt-3">
                                                <input type="password" class="form-control"  placeholder="New password" name="password" aria-label="New password">
                                            </div>
                                            <div class="col-12 col-md-12 mt-3">
                                                <input type="password" class="form-control" placeholder="Confirm password" name="confirmPassword" aria-label="Confirm password">
                                                <div class="validation-invalid"><?php echo $data['passwordError'] ?></div>
                                            </div>


                                            <div class="d-grid  mx-auto mt-3">
                                                <button class="btn btn-primary " type="submit"><h6 class="my-auto">Sign Up</h6></button>
                                            </div>
                                            <div class="col-12 col-md-12 text-center mt-3">
                                                <p class="already-have"><a href="<?php echo URLROOT; ?>/users/login">Already have an account ?</a></p>
                                            </div>
                                        </div>
                                    </form>   
                                </div>

                            </div>







                    </div>
                </main>
                                     

