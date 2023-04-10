<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    require APPROOT . '/views/includes/admin/navigation.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Accounts</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Users Accounts</li>
                        </ol>

                            <div class="card mb-4">
                                <div class="card-header">

                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                        <i class="fas fa-users"></i>
                                        Verified Accounts Section 
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body " id="printThis">


                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach ($data['accountsVerified'] as $account):?>
                                            <tr>
                                                <td><?php echo $account->last_name . ',' . $account->first_name . ' ' .$account->middle_name. ' ' . $account->suffix; ?></td>
                                                <td><div class="badge rounded-pill bg-primary"><?php echo $account->status;?>&nbsp;<i class="fas fa-check"></i></div></td>
                                                <td><?php if($account->account_type == 0){ ?>
                                                    <div class="badge rounded-pill bg-secondary">None</div><?php } 
                                                    if($account->account_type == 2){  ?>
                                                    <div class="badge rounded-pill bg-info">BHW</div><?php }?></td>
                                                <td class="d-flex justify-content-evenly">
                                                    <button class="btn btn-primary btn-sm rounded-pill viewAccount"  data-bs-toggle="modal" data-id="<?php echo $account->id?>" data-bs-target="#modalViewAccount"><i class="fas fa-file-alt"></i></button>
                                                    <!-- <form action="<?php echo URLROOT?>/account/delete_account"  method="POST"> -->
                                                        <input type="hidden" name="id" value="<?php echo $account->id ?>">
                                                        <!-- <button type="submit" onclick="residentDelete()" class="btn btn-danger btn-sm rounded-pill"><i class="fas fa-trash-alt"></i></button> -->
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                        

                                </div>

                            </div>



                            <?php
                                require APPROOT . '/views/accounts/modal/modal-change-password.php';
                            ?>



                    </div>
                </main>   





<?php

    require APPROOT . '/views/includes/footer.php';
?>