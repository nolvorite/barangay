<div class="modal fade" id="modalResidency" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/certificates/req_status" method="POST" class="row gx-3">
                                    <input type="hidden" name="id" id="residencyId">
                                    <input type="hidden" name="control" id="residencyControl">
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyLastName" class="col-form-label-sm">Last Name</label>
                                        <h6  id="residencyLastName">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyFirstName" class="col-form-label-sm">First Name</label>
                                        <h6  id="residencyFirstName">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyMiddleName" class="col-form-label-sm">Middle Name</label>
                                        <h6  id="residencyMiddleName">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencySuffix" class="col-form-label-sm">Suffix</label>
                                        <h6  id="residencySuffix">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyContactNum" class="col-form-label-sm">Contact Number</label>
                                        <h6  id="residencyContactNum">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyPostalAddress" class="col-form-label-sm">Postal Address</label>
                                        <h6  id="residencyPostalAddress">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyResidentSince" class="col-form-label-sm">Resident Since (Year)</label>
                                        <h6  id="residencyResidentSince">&nbsp;</h6>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyFormType" class="col-form-label-sm">Type of Certificate</label>
                                        <h6  id="residencyFormType">&nbsp;</h6>
                                        <input type="hidden" id="residencyFormTypeValue" name="formType">
                                    </div>
                                    
                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyPurpose"  class="col-form-label-sm">Purpose</label>
                                        <h6  id="residencyPurpose">&nbsp;</h6>
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm border border-1">
                                        <label for="residencyQty"  class="col-form-label-sm">Quantity</label>
                                        <h6  id="residencyQty">&nbsp;</h6>
                                    </div>


                            </div>
                            <div class="modal-footer text-center">
                                <div class="mb-3 col-12 col-md-12 input-group-sm">
                                            <label for="residencyFeedback" class="col-form-label-sm">Response Message</label>
                                            <textarea class="form-control" name="feedback" id="residencyFeedback" rows="3"></textarea>
                                        </div>
                                    <div class="col-12  col-md-12 text-center">
                                        <button type="submit" name="btnApprove" class="btn btn-success rounded-pill">Approve&nbsp;<i class="fas fa-check"></i></button>
                                        <button type="submit" name="btnDisapprove" class="btn btn-danger rounded-pill">Disapprove&nbsp;<i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>