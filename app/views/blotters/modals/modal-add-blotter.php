<div class="modal fade" id="modalAddBlotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title" id="manageDetails">Manage Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body overflow-hidden">
            <form action="<?php echo URLROOT; ?>/blotters/modalAddBlotter" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3">
                    <label for="complainant" class="form-label">Complainant</label>
                    <input type="text" name="complainant" class="form-control" id="complainant">
                </div>
                <div class="mb-3">
                    <label for="respondent" class="form-label">Accusation</label>
                    <input type="text" name="accusation" class="form-control" id="accusation">
                </div>



                <div class="mb-3">
                    <img src="<?php echo URLROOT .'/img/placeholder-id.png'?>" class="img-thumbnail" onclick="frontIdTriggerClick()" id="frontIdDisplay" alt="">
                    <label for="frontId" class="form-label btn btn-secondary btn-sm rounded-pill d-flex justify-content-center"><i class="fas fa-folder-open"></i>&nbsp;Upload</label>
                    <input class="form-control" type="file"  name="document" onchange="displayFrontId(this)" id="frontId" accept="image/*">
                </div>
 


                <div class="col-6 mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="datetime-local" name="date_time" class="form-control" id="date">
                </div>  

                <div class="col-6 mb-3">
                    <label for="status" class="col-form-label-sm">Status</label>
                    <select id="status" name="status" class="form-select">
                        <option value="Active" selected>Active</option>
                        <option value="Settled">Settled</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success add_success"><i class="fas fa-print"></i>Save</button>
        </div>
        </form>
        </div>
    </div>
</div>