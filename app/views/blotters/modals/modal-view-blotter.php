<div class="modal fade" id="modalViewBlotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">View Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body overflow-hidden">
                                <form action="<?php echo URLROOT; ?>/residents/modalAddResident" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="number" name="id" id="editId" hidden>
                                    <div class="border border-1">
                                        <label for="complainant" class="form-label">Complainant</label>
                                        <h6 id="viewComplainant">&nbsp;</h6>
                                    </div>
                                    <div class="border border-1">
                                        <label for="respondent" class="form-label">Accusation</label>
                                        <h6 id="viewAccusation">&nbsp;</h6>
                                    </div>

                                    <div class="border border-1">
                                        <img src="<?php echo URLROOT .'/img/placeholder-id.png'?>" width="100%" onclick="enlargeImg()" class="img-thumbnail"  id="viewDocument" alt="">
                                    </div>


                                    <div class="col-6 border border-1">
                                        <label for="date" class="form-label">Date</label>
                                        <h6 id="viewDate">&nbsp;</h6>
                                    </div>  

                                    <div class="col-6 border border-1">
                                        <label for="status" class="col-form-label-sm">Status</label>
                                        <h6 id="viewStatus">&nbsp;</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
