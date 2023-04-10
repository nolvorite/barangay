    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/bootstrap5.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/datatables.css">

    <link type="text/css" rel="stylesheet" href="<?php echo URLROOT;?>/public/css/image-uploader.min.css">

    <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/style.css">
    <link rel="stylesheet"  href="<?php echo URLROOT;?>/public/css/main.css">

<?php
    require APPROOT . '/views/includes/user/head.php';
?>

<?php
    if($_SESSION['account_type'] == 0){
        require APPROOT . '/views/includes/user/header.php'; 
    }
    if($_SESSION['account_type'] == 2){
        require APPROOT . '/views/includes/bhw/navigation.php'; 
    }
?>
    
<!-- ======= Header Section ======= -->
<section id="header" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">My Request</h1>

          <h2 class = "animated bounceInLeft" style = "animation-delay: 0.5s"></h2>  
          
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->

<br>
<br>

                <main class="p-3">
                    <div class="container-fluid px-3">


                        
                        <div class="card  col-12 offset-md-2 mt-3 col-md-8">
                            <div class="card-header">
                                <div class="col-2"><a href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i></a></div>
                            </div>
                            <img src="<?php if($data['myDetails']->profile_pic){ echo URLROOT. '/img/'. $data['myDetails']->profile_pic;} else{ echo URLROOT. '/img/id/resident/placeholder.png';}  ?>" style="width: 160px;" class="card-img-top m-auto rounded-circle border border-primary mt-3" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title text-center"><?php echo $data['myDetails']->first_name . ' '. $data['myDetails']->middle_name . ' ' . $data['myDetails']->last_name . ' ' . $data['myDetails']->suffix ?></h5>
                                <!-- <p class="card-text text-center">Baka renejay to!</p> -->
                                <div class="row">
                                    <div class="col-12  offset-md-4 col-md-4 text-center">

                                    <?php if($data['myDetails']->status == '') {?>
                                        <button class="btn btn-outline-warning  btn-sm rounded-pill verifyRequest"  type="button" data-bs-toggle="modal" data-bs-target="#modalVerify">Verify&nbsp;<i class="fas fa-info-circle"></i></button>
                                    <?php }else if($data['myDetails']->status == 'Verified'){?>
                                        <button class="btn btn-primary btn-sm  rounded-pill verifyRequest"  type="button">Verified&nbsp;<i class="fas fa-check"></i></button>
                                    <?php }else if($data['myDetails']->status == 'not verified'){ ?>
                                        <button class="btn btn-danger rounded-pill  btn-sm verifyRequest"  type="button" data-bs-toggle="modal" data-bs-target="#modalVerify">Rejected&nbsp;<i class="fas fa-times"></i></button>
                                        <p class="mt-2 p-3 border border-danger " style="font-size: 0.7rem">Your verification may have failed because of the following reasons: The photo of your document may be blurred, cropped, expired, or did not match. 
                                        </p>
                                    <?php }else if($data['myDetails']->status == 'To verify'){ ?>
                                        <button class="btn btn-secondary rounded-pill  btn-sm verifyRequest"  type="button">Verifying...&nbsp;<i class="fas fa-spinner"></i></button>
                                    <?php } ?>
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn btn-success btn-sm  editProfile"  type="button" data-bs-toggle="modal" data-bs-target="#modalProfile">Change Profile</button>
                                        </div>

                                        <!-- <div class="d-grid gap-2 mt-3">
                                            <a href="<?= URLROOT. '/users/password'?>" class="btn btn-sm btn-secondary"  type="button">Change Password</a>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item "><i class="fas fa-user"></i>&nbsp;<span class="fw-bold">Username:</span> <?php echo $data['myDetails']->username?></li>
                                <!-- <li class="list-group-item"><i class="fas fa-envelope"></i>&nbsp;<span class="fw-bold">Email:</span> <?php  $data['myDetails']->email?></li> -->
                                <!-- <li class="list-group-item"><i class="fas fa-mobile-alt"></i>&nbsp;<span class="fw-bold">Mobile:</span> <?php echo $data['myDetails']->mobile_number?></li> -->
                                <!-- <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>&nbsp;<span class="fw-bold">Address:</span> <?php echo $data['myDetails']->address ?></li> -->
                                <!-- <li class="list-group-item"><i class="fas fa-map-pin"></i>&nbsp;<span class="fw-bold">Purok :</span> <?php echo $data['myDetails']->purok_number ?></li> -->
                                <!-- <li class="list-group-item"><i class="fas fa-venus-mars"></i>&nbsp;<span class="fw-bold">Gender:</span> <?php echo $data['myDetails']->gender?></li> -->
                            </ul>
                            <div class="card-body">

                            </div>
                        </div>


                        <nav class="mt-4">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link myrequest-tab active" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="true"><span style="font-size: 8pt;font-weight:bold;">Pending</span></button>
                                <button class="nav-link myrequest-tab" id="nav-approved-tab" data-bs-toggle="tab" data-bs-target="#nav-approved" type="button" role="tab" aria-controls="nav-approved" aria-selected="false"><span style="font-size: 8pt; font-weight:bold;">Approved</span></button>
                                <button class="nav-link myrequest-tab" id="nav-disapproved-tab" data-bs-toggle="tab" data-bs-target="#nav-disapproved" type="button" role="tab" aria-controls="nav-disapproved" aria-selected="false"><span style="font-size: 8pt; font-weight:bold;">Rejected</span></button>
                                <button class="nav-link myrequest-tab" id="nav-completed-tab" data-bs-toggle="tab" data-bs-target="#nav-completed" type="button" role="tab" aria-controls="nav-completed" aria-selected="false"><span style="font-size: 8pt; font-weight:bold;">Completed</span></button>
                                <button class="nav-link myrequest-tab" id="nav-cancelled-tab" data-bs-toggle="tab" data-bs-target="#nav-cancelled" type="button" role="tab" aria-controls="nav-cancelled" aria-selected="false"><span style="font-size: 8pt; font-weight:bold;">Cancelled</span></button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <!-- PENDING -->
                            <div class="tab-pane fade show active pt-2" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                                <div class="row">
                                    <?php if(!$data['requests']){ echo "<h6 class='ps-3 d-flex justify-content-center p-5'>Empty</h6>";} ?>
                                    <?php foreach ($data['requests'] as $certificate):?>
                                        <div class="card col-12 col-md-4">
                                            <div class="card-body row">
                                                <div class="col-9">
                                                    <h5 class="card-title"><?php echo $certificate->form_type ?></h5>
                                                    <p class="card-text">
                                                        Name: <?php echo $certificate->first_name . ' '. $certificate->middle_name . ' '. $certificate->last_name ?><br>
                                                        Date Request: <?php echo $certificate->date_created ?><br>
                                                        Status: <?php echo $certificate->req_status ?>
                                                    </p>
                                                </div>
                                                <div class="col-3 text-center m-auto ">
                                                <!-- BUTTON START HERE -->
                                                    <?php if($certificate->form_type == 'Barangay Indigency' AND $certificate->req_status != 'Approved'): ?>
                                                    <a class="btn btn-primary btn-sm mb-2 indigencybtn" id="indigencyBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalIndigency">Details</a>

                                                    <?php elseif($certificate->form_type == 'Barangay Permit' AND $certificate->req_status != 'Approved'): ?>
                                                    <a class="btn btn-primary btn-sm mb-2 permitbtn" id="permitBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalPermit">Details</a>

                                                    <?php elseif($certificate->form_type == 'Barangay Residency' AND $certificate->req_status != 'Approved'): ?>
                                                    <a class="btn btn-primary btn-sm mb-2 residencybtn" id="residencyBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalResidency">Details</a>

                                                    <?php elseif($certificate->form_type == 'Barangay Clearance' AND $certificate->req_status != 'Approved'): ?>
                                                    <a class="btn btn-primary btn-sm mb-2 clearancebtn" id="clearanceBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalClearance">Details</a>

                                                    <?php elseif($certificate->form_type == 'Barangay Clearance-ID' AND $certificate->req_status != 'Approved'): ?>
                                                    <a class="btn btn-primary btn-sm mb-2 clearanceIdbtn" id="clearanceIdBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalClearanceId">Details</a>

                                                    <?php endif; ?>
                                                <!-- BUTTON END HERE -->
                                                    <form action="<?php echo URLROOT?>/users/cancel_request" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $certificate->id ?>">
                                                        <button type="submit" onclick="validateForm()" class="btn btn-dark btn-sm">Cancel</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                            <!-- APPROVED -->
                            <div class="tab-pane fade pt-2" id="nav-approved" role="tabpanel" aria-labelledby="nav-approved-tab">
                                <div class="row">
                                <?php if(!$data['approve']){ echo "<h6 class='ps-3 d-flex justify-content-center p-5'>Empty</h6>";} ?>
                                    <?php foreach ($data['approve'] as $certificate):?>
                                            <div class="card col-12 col-md-4">
                                                <div class="card-body row">
                                                    <div class="col-12">
                                                        <h5 class="card-title"><?php echo $certificate->form_type ?></h5>
                                                        <p class="card-text">
                                                            Name: <?php echo $certificate->first_name . ' '. $certificate->middle_name . ' '. $certificate->last_name ?><br>
                                                            Date Request: <?php echo $certificate->date_created ?><br>
                                                            Status: <?php echo $certificate->req_status ?><br>
                                                            <span class="text-success"><i>(<?= $certificate->feedback ?>)</i></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                            <!-- DISAPPROVED -->
                            <div class="tab-pane fade pt-2" id="nav-disapproved" role="tabpanel" aria-labelledby="nav-disapproved-tab">
                                <div class="row">
                                <?php if(!$data['disapprove']){ echo "<h6 class='ps-3 d-flex justify-content-center p-5'>Empty</h6>";} ?>
                                    <?php foreach ($data['disapprove'] as $certificate):?>
                                                <div class="card col-12 col-md-4">
                                                    <div class="card-body row">
                                                        <div class="col-9">
                                                            <h5 class="card-title"><?php echo $certificate->form_type ?></h5>
                                                            <p class="card-text">
                                                                Name: <?php echo $certificate->first_name . ' '. $certificate->middle_name . ' '. $certificate->last_name ?><br>
                                                                Date Request: <?php echo $certificate->date_created ?><br>
                                                                Status: <?php echo $certificate->req_status ?>
                                                                <span class="text-danger"><i>(<?= $certificate->feedback ?>)</i></span>

                                                            </p>
                                                        </div>
                                                        <div class="col-3 text-center m-auto ">
                                                        <!-- BUTTON START HERE -->
                                                            <?php if($certificate->form_type == 'Barangay Indigency' AND $certificate->req_status != 'Approved'): ?>
                                                            <a class="btn btn-primary btn-sm mb-2 indigencybtn" id="indigencyBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalIndigency">Details</a>

                                                            <?php elseif($certificate->form_type == 'Barangay Permit' AND $certificate->req_status != 'Approved'): ?>
                                                            <a class="btn btn-primary btn-sm mb-2 permitbtn" id="permitBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalPermit">Details</a>

                                                            <?php elseif($certificate->form_type == 'Barangay Residency' AND $certificate->req_status != 'Approved'): ?>
                                                            <a class="btn btn-primary btn-sm mb-2 residencybtn" id="residencyBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalResidency">Details</a>

                                                            <?php elseif($certificate->form_type == 'Barangay Clearance' AND $certificate->req_status != 'Approved'): ?>
                                                            <a class="btn btn-primary btn-sm mb-2 clearancebtn" id="clearanceBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalClearance">Details</a>

                                                            <?php elseif($certificate->form_type == 'Barangay Clearance-ID' AND $certificate->req_status != 'Approved'): ?>
                                                            <a class="btn btn-primary btn-sm mb-2 clearanceIdbtn" id="clearanceIdBtn" type="button" data-bs-toggle="modal" data-id="<?php echo $certificate->id?>" data-bs-target="#modalClearanceId">Details</a>

                                                            <?php endif; ?>
                                                        <!-- BUTTON END HERE -->
                                                            <!-- <button class="btn btn-dark btn-sm">Cancel</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                            <!-- COMPLETED -->
                            <div class="tab-pane fade pt-2" id="nav-completed" role="tabpanel" aria-labelledby="nav-completed-tab">
                                <div class="row">
                                <?php if(!$data['complete']){ echo "<h6 class='ps-3 d-flex justify-content-center p-5'>Empty</h6>";} ?>
                                    <?php foreach ($data['complete'] as $certificate):?>
                                                <div class="card col-12 col-md-4">
                                                    <div class="card-body row">
                                                        <div class="col-12">
                                                            <h5 class="card-title"><?php echo $certificate->form_type ?></h5>
                                                            <p class="card-text">
                                                                Name: <?php echo $certificate->first_name . ' '. $certificate->middle_name . ' '. $certificate->last_name ?><br>
                                                                Date Request: <?php echo $certificate->date_created ?><br>
                                                                Date Completed: <?php echo $certificate->date_completed ?><br>
                                                                Status: <?php echo $certificate->req_status ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php endforeach?>
                                </div>
                            </div>

                            <!-- CANCELLED -->
                            <div class="tab-pane fade pt-2" id="nav-cancelled" role="tabpanel" aria-labelledby="nav-cancelled-tab">
                                <div class="row">
                                <?php if(!$data['cancel']){ echo "<h6 class='ps-3 d-flex justify-content-center p-5'>Empty</h6>";} ?>
                                    <?php foreach ($data['cancel'] as $certificate):?>
                                                <div class="card col-12 col-md-4">
                                                    <div class="card-body row">
                                                        <div class="col-12">
                                                            <h5 class="card-title"><?php echo $certificate->form_type ?></h5>
                                                            <p class="card-text">
                                                                Name: <?php echo $certificate->first_name . ' '. $certificate->middle_name . ' '. $certificate->last_name ?><br>
                                                                Date Request: <?php echo $certificate->date_created ?><br>
                                                                Status: <?php echo $certificate->req_status ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php endforeach?>
                                </div>
                            </div>

                        </div>



                        <!-- Modal for certificate of indigency -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-detail-indigency.php';
                        ?>

                        <!-- Modal for certificate of barangay permit -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-detail-permit.php';
                        ?>    

                        <!-- Modal for certificate of barangay residency -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-detail-residency.php';
                        ?>       
                        <!-- Modal for certificate of barangay clearance -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-detail-clearance.php';
                        ?> 
                        <!-- Modal for certificate of barangay clearance id -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-detail-clearance-id.php';
                        ?>  

                        <?php
                            require APPROOT . '/views/users/modals/modal-edit-profile.php';
                        ?>
                        <?php
                            require APPROOT . '/views/users/modals/modal-verify-account.php';
                        ?>

                    </div>
                </main>


<?php
    require APPROOT . '/views/includes/user/footer.php';
?>

<?php require APPROOT . '/views/includes/scripts.php'; ?>
