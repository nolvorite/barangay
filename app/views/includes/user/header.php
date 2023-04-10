<!--Header-->
<header class="header">
   <div class="header-inner">
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
        <a class="nav-link" href="<?= URLROOT. '/users/announcement'?>">Announcements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URLROOT. '/users/gallery'?>">Gallery</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="<?= URLROOT. '/users/services'?>">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URLROOT. '/users/hotlines'?>">Hotlines</a>
      </li>
    

    </ul> 
  <!-- END OF UL -->



  <?php 
      if(!isLoggedIn()) { ?>
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
 <?php     }else  { ?>
                <!--Login Button at navigation bar-->
                <ul class="nav navbar-nav navbar-right">
                  <li class="nav-item dropleft">
                    <a class="nav-link dropdown-toggle" href="<?= URLROOT . '/users/myrequest' ?>" id="navbarDropdownMenuLink">
                        My Request
                    </a>
                  </li>
                </ul>
              
                <ul class="nav navbar-nav navbar-right">
                  <li class="nav-item dropleft">
                    <a class="nav-link dropdown-toggle" href="<?= URLROOT . '/users/logout' ?>" id="navbarDropdownMenuLink">
                        Logout
                    </a>
                  </li>
                </ul>
   <?php   }
  ?>



  </div>
</div>
</nav>
</header>

