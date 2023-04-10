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
                                                            Barangay Indigency
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
                                                    <div class="d-flex flex-wrap justify-content-around">
                                                        <div class="text-center">
                                                            <img src="<?php echo URLROOT .'/img/municipal-logo.png'?>?>" class="img-fluid" width="125">
                                                        </div>
                                                        <div id="cert-head" class="text-center mt-5">
                                                            <h3 class="mb-0">Republic of the Philippines</h3>
                                                            <h1 class="mb-0">LUNGSOD QUEZON</h1>
                                                            <h1 class="mb-0">TANGGAPAN NG PUNONG BARANGAY</h1>
                                                            <h3 class="mb-0">( Office of the Barangay Captain)</i></h2>
                                                        </div>
                                                        <div class="text-center">
                                                            <img src="<?php echo URLROOT .'/img/brgy-logo.png'?>?>" class="img-fluid" width="125">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 border-top border-dark border-2">
                                                        <div class="col-3 border-end border-dark border-2 text-center officials-cert">
                                                            <h3 class="mt-5">BARANGAY</h3>
                                                            <h1 class="text-success">PINYAHAN</h1>
                                                            <br>
                                                            <h4><?= $data['officials'][0]->fullname ?></h4>
                                                            <h3>Punong Barangay</h3>

                                                            <br>

                                                            <h2>KAGAWADS:</h2>
                                                            <h3><?= $data['officials'][1]->fullname ?></h3>
                                                            <h3><?= $data['officials'][2]->fullname ?></h3>
                                                            <h3><?= $data['officials'][3]->fullname ?></h3>
                                                            <h3><?= $data['officials'][4]->fullname ?></h3>
                                                            <h3><?= $data['officials'][5]->fullname ?></h3>
                                                            <h3><?= $data['officials'][6]->fullname ?></h3>
                                                            <h3><?= $data['officials'][7]->fullname ?></h3>

                                                            <br>
                                                            <br>

                                                            <h3><?= $data['officials'][8]->fullname ?></h3>
                                                            <h3>SK CHAIRMAN</h3>

                                                            <br>

                                                            <h3><?= $data['officials'][9]->fullname ?></h3>
                                                            <h3>Barangay Secretary</h3>

                                                            <br>

                                                            <h3><?= $data['officials'][10]->fullname ?></h3>
                                                            <h3>Barangay Treasurer</h3>

                                                            






                                                        </div>
                                                        <div class="col-9">
                                                            <div id="cert-body" class="col-md-12">
                      
                                                                <div class="text-center mt-4">
                                                                    <h1 id="brgy-cert-h1" class="mb-5">CERTIFICATE OF INDIGENCY</h1>
                                                                </div>
                                                                <h2 class="mt-3">THIS IS TO CERTIFY that <span><?= strtoupper( $data['certificate']->first_name.' '.$data['certificate']->middle_name.' '.$data['certificate']->last_name) ?></span> 
                                                                is a resident with postal address at No. <span><?php echo $data['certificate']->postal_address_no ?></span> is respectfully requesting for <span>CERTIFICATE OF INDIGENCY</span>. </h2>
                                                                <h2>This Certification is being issued upon the request of <span><?= strtoupper( $data['certificate']->first_name.' '.$data['certificate']->middle_name.' '.$data['certificate']->last_name) ?></span> for <span><?= $data['certificate']->purpose ?></span> Assistance.</h2>
                                                                <h2 class="mt-3">Issued this <span><?= date('jS') ?></span> day of <span><?= date('F') ?> </span> <?= date('Y') ?> .</h2>
                                                            </div>
                                                            <div id="cert-foot" class="col-md-12">
                                                                <div class="p-3 text-end me-5">
                                                                    <h1 class="mb-0 text-uppercase"><?php echo strtoupper($data['officials'][0]->fullname)?></h1>
                                                                    <p class="me-5">Punong Barangay</p>
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