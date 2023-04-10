<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    require APPROOT . '/views/includes/admin/navigation.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Blotter Records</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blotter Records</li>
                        </ol>

                            <div class="card mb-4">
                                <div class="card-header">

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                        <i class="fas fa-file-alt"></i>
                                        Blotter Section 
                                        </div>

                                        <div class="">
                                            <button type="button" id="addResidentBtn" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalAddBlotter">
                                            <i class="fas fa-plus"></i>&nbsp; Add Blotter
                                            </button>
                                        </div>
                                        <div class="">
                                            <a type="button" href="<?php echo URLROOT. '/blotters/generate_blotters' ?>" id="addResidentBtn" class="btn btn-primary btn-sm">
                                            <i class="fas fa-clipboard-list"></i>&nbsp;Generate List
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body " id="printThis">


                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Case No.</th>
                                                <th>Complainant's Name</th>
                                                <th>Accusation</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Case No.</th>
                                                <th>Complainant's Name</th>
                                                <th>Accusation</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach ($data['blotterRecords'] as $record):?>
                                            <tr>
                                                <td><?php echo $record->id;?></td>
                                                <td><?php echo $record->complainant;?></td>
                                                <td><?php echo $record->accusation;?></td>
                                                <td><?php echo date('Y/m/d h:i A', strtotime($record->date))?></td>
                                                <td><?php echo $record->status;?></td>
                                                <td class="d-flex justify-content-evenly">
                                                    <button class="btn btn-primary btn-sm rounded-pill viewBlotterbtn"  data-bs-toggle="modal" data-id="<?php echo $record->id?>" data-bs-target="#modalViewBlotter"><i class="fas fa-file-alt"></i></button>
                                                    <button class="btn btn-success btn-sm rounded-pill editBlotterbtn" id="editOpen" data-bs-toggle="modal" data-id="<?php echo $record->id?>" data-bs-target="#modalEditBlotter" ><i class="fas fa-edit"></i></button>
                                                    <form action="<?php echo URLROOT?>/residents/delete_resident"  method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $record->id ?>">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                        

                                </div>

                            </div>







                    </div>
                </main>   

                <!-- Modal for add resident -->
                <?php
                    require APPROOT . '/views/blotters/modals/modal-add-blotter.php';
                ?>

                <?php
                    require APPROOT . '/views/blotters/modals/modal-view-blotter.php';
                ?>

                <?php
                    require APPROOT . '/views/blotters/modals/modal-edit-blotter.php';
                ?>



                
                <?php 

                ?>

                <!-- Modal for certificate-->
                <?php
                    require APPROOT . '/views/certificates/modals/modal-indigency.php';
                    require APPROOT . '/views/certificates/modals/modal-clearance.php';
                    require APPROOT . '/views/certificates/modals/modal-residency.php';
                ?>


                    <script>

                    </script>
<?php

    require APPROOT . '/views/includes/footer.php';
?>