<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    if($_SESSION['account_type'] == 1){
        require APPROOT . '/views/includes/admin/navigation.php'; 
    }
    if($_SESSION['account_type'] == 2){
        require APPROOT . '/views/includes/bhw/navigation.php'; 
    }
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
                                                            Blotter
                                                        </div>
                                                        <div class="col-6 col-md-2  d-grid gap-2">
                                                            <button class="btn btn-primary btn-sm" onclick="printDiv('printThis')">
                                                            <i class="fa fa-print"></i>
                                                            Print List
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
  

                                                    <table class="table caption-top mt-2">
                                                        <caption><h6>List of Blotters</h6></caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Case No.</th>
                                                                <th>Complainant</th>
                                                            
                                                                <th>Status</th>
                                                                <th>Date Reported</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php foreach ($data['blotters'] as $blotter):?>
                                                            <tr>
                                                                <td><?php echo $blotter->id;?></td>
                                                                <td><?php echo $blotter->complainant;?></td>
                                                           
                                                                <td><?php echo $blotter->status;?></td>
                                                                <td><?php echo date('Y/m/d h:i A', strtotime($blotter->date_created))?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
 
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