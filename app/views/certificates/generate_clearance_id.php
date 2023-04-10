<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    require APPROOT . '/views/includes/admin/navigation.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                            <h3 class="mt-4">Generate Certificate</h3>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Generate Certificate</li>
                                </ol>
                                <div class="page-inner">
                                    <div class="row mt--2">
                                        <div class="col-md-12">

                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-6 col-md-10">
                                                            Barangay Clearance
                                                        </div>
                                                        <div class="col-6 col-md-2  d-grid gap-2">
                                                            <button class="btn btn-primary btn-sm" onclick="printDiv('printThis')">
                                                            <i class="fa fa-print"></i>
                                                            Print Certificate
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body m-5" id="printThis">

                                                            <div class="with-id row text-center mt-5 ms-auto">
                                                                <div class="col-6 col-md-6 id">
                                                                    <div class=" d-flex flex-wrap justify-content-around">
                                                                        <img src="<?php echo URLROOT .'/img/'. $data['detail']->pic_logo?>" class="img-fluid" id="brgy_logo-id">

                                                                        <div class="text-center">
                                                                            <img src="<?php echo URLROOT .'/img/municipal-logo.png'?>?>" class="img-fluid mt-2" width="60px">
                                                                        </div>
                                                                        <div id="cert-head" class="text-center mt-2">
                                                                            <h3 class="mb-0"></h3>
                                                                            <h3 class="mb-0 fw-bold">Republic of the Philippines</h3>
                                                                            <h3 class="mb-0 fw-bold">Office of the Barangay Captain</h3>
                                                                            <h3 class="mb-0 fw-bold">Barangay Pinyahan, Dist IV</h3>
                                                                            <h1 class="fw-bold mb-0">Quezon City</h2>
                                                                        </div>
                                                                        <div class="text-center">
                                                                        <img src="<?php echo URLROOT .'/img/'. $data['detail']->pic_logo?>"  class="img-fluid mt-2" width="60">
                                                                        </div>
                                                                    </div>
  

                                                                        <div id="cert-body-id" class="ms-0" >

                                                                            <div class="row ">
                                                                            <div class="col-12 col-md-12 col-xl-12 mt-3" style="margin-left:10px; padding-left:0px;">
                                                                                <h4><span id="brgy-h4-span" class="me-3 " >BARANGAY I.D CARD</span> <span class="ms-5 me-0" style="font-size: 9pt; "><u>I.D NO.<?php echo $data['certificate']->id_no ?></u></span></h4>
                                                                            </div>
                                                                                <div class="col-8 col-md-8 col-xl-8 mt-1 " id="id-info" style="width:209px">
                                                                                <h4><u>NAME:<?php echo strtoupper($data['certificate']->first_name . ' '.$data['certificate']->last_name .' '. $data['certificate']->suffix) ?> </u></h4>
                                                                                <h4><u>ADDRESS:<?= $data['certificate']->street ?>, Brgy Pinyahan Quezon City</u></h4>
                                                                                <h4><u>BIRTHDATE:<?php  $birthDate = new DateTime($data['certificate']->birth_date); echo date_format( $birthDate,'F j, Y') ?></u></h4>
                                                                                <h4><u>PRECINCT NO:<?= $data['certificate']->precinct_no ?></u></h4>
                                                                                
                                                                                </div>
                                                                                <div class="col-4 col-md-4 col-xl-4 mt-1" id="id-1x1">
                                                                                    <img src="<?php echo URLROOT . '/img/id/' . $data['certificate']->id_pic ?>"  class="" width="92px" height="92px" alt="">

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                </div>

                                                                <div class="col-6 ms-2 col-md-6 id">
                                                                    <div class=" d-flex flex-wrap justify-content-around">
                                                                        <img src="<?php echo URLROOT .'/img/'. $data['detail']->pic_logo?>" class="img-fluid" id="brgy_logo-id">

                                                                    </div>
                                                                        <div id="cert-body-id" class=" mt-5 ">
                                                                            <div class="col-12 col-md-12  back-id  " >
                                                                                <h4 ><span class="fw-bold  px-auto mx-auto">____________________________________</span></h4>
                                                                                <h4 ><span class="mx-auto" >SIGNITURE</span></h4>
                                                                                <h4 class="mt-3"><span class="fw-bold mx-auto">____________________________________ </span> </h4>
                                                                                <h4> <span class="mx-auto mt-" >BARANGAY CAPTAIN</span></h4>
                                                                                <h4 style="margin-top:30px;"><span class="ms-1" style="font-size:9pt;">DATE ISSUED:<?php echo date('n/j/Y') ?> 1 YEAR FROM DATE ISSUE</span></h4>
                                                                            </div>
                                                                        </div>

                                                                </div>


                                                            
                                                             </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            



                    </div>
                </main>


<?php
    require APPROOT . '/views/includes/footer.php';
?>