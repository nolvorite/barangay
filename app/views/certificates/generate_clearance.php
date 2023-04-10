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
                                                    <div class="row mt-2">
                                                        <div id="cert-body-clearance" class="col-md-12">

                                                            <div class="text-center mt-3">
                                                                <h1 id="brgy-cert-clearance-h1" class="mb-3">BARANGAY CLEARANCE</h1>
                                                            </div>
                                                            <div class="">
                                                            <table class="table table-bordered border-dark">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">Date Filed</th>
                                                                    <th scope="col">Valid Until</th>
                                                                    <th scope="col">Clearance No.</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php 
                                                                
                                                                $date = date('Y-m-d');
                                                                $newDate = date('Y-m-d', strtotime($date. ' + 1 years'));
                                                              

                                                                ?>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?= date('Y-m-d') ?></td>
                                                                    <td><?= $newDate ?></td>
                                                                    <td><?= $data['certificate']->id ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                            <h2 id="to-whom-h2" class="mt-3">TO WHOM IT MAY CONCERN:</h2>
                                                            <h2 class="mt-3">THIS is to certify that the name written below is a BONA FIDE RESIDENT OF BARANGAY PINYAHAN, QUEZON CITY and living in the given address:</h2>

                                                            <table class="table table-bordered border-dark">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" colspan="2" class="text-center">Information</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th width="50%">Name:</th>
                                                                        <th width="50%">Community Tax Certificate No.:</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><?= strtoupper( $data['certificate']->first_name.' '.$data['certificate']->middle_name.' '.$data['certificate']->last_name) ?></td>
                                                                        <td><?= $data['certificate']->tax_cert_no ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Address:</th>
                                                                        <th>Issued at:</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><?= $data['certificate']->address ?></td>
                                                                        <td>Barangay Pinyahan, Quezon City</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
 
                                                             <h2 class="mt-3">This certification is being issued upon the request of <span><?='MR/MS.'. strtoupper($data['certificate']->last_name)?></span>.</h2>


                                                             <table class="table table-bordered border-dark">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Purpose of Application</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $data['certificate']->purpose ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                             <div id="cert-foot-clearance" class="d-flex flex-row mt-3 thumbmark mt-5">
                                                                <div class="border border-dark text-center col-6 py-4">
                                                                    <p class="mb-0 text-uppercase">_____________________</p>
                                                                    <p class="mb-0 pb-0">Barangay Kagawad</p>
                                                                    <p class="mt-0 pt-0">Area: __________</p>
                                                                </div>

                                                                <div class="p-3 text-center me-5 border border-dark col-6 py-4">
                                                                    <h1 class="mb-0 text-uppercase"><?php echo strtoupper($data['officials'][0]->fullname)?></h1>
                                                                    <p >Punong Barangay</p>
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