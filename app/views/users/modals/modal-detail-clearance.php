<div class="modal fade" id="modalClearance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/users/resubmit_clearance" method="POST" class="row gx-3">
                                    <input type="hidden" name="id" id="clearanceId">
                                    <input type="hidden" name="control" id="clearanceControl">
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceLastName" class="col-form-label-sm">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" id="clearanceLastName" readonly>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceFirstName" class="col-form-label-sm">First Name</label>
                                        <input type="text" name="firstName" class="form-control" id="clearanceFirstName"readonly >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceMiddleName" class="col-form-label-sm">Middle Name</label>
                                        <input type="text" name="middleName" class="form-control" id="clearanceMiddleName"readonly>
                                    </div>
                                    <div class="col-6 col-md-3 input-group-sm">
                                        <label for="clearanceSuffix" class="col-form-label-sm">Suffix</label>
                                        <input type="text" name="suffix" class="form-control" id="clearanceSuffix"readonly>
                                    </div>
                                    <div class="col-6 col-md-3 input-group-sm">
                                        <label for="clearanceContactNum" class="col-form-label-sm">Contact Number</label>
                                        <input type="text" name="contactNum" class="form-control" id="clearanceContactNum" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceAddress" class="col-form-label-sm">Address</label>
                                        <input type="text" name="address" class="form-control" id="clearanceAddress" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceTaxCertNo" class="col-form-label-sm">Tax Certificate No.</label>
                                        <input type="text" name="taxCertNo" class="form-control" id="clearanceTaxCertNo" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceFormType" class="col-form-label-sm">Type of Certificate</label>
                                        <input class="form-control" type="text" name="formType"  value="Barangay Clearance" id="clearanceFormType"  readonly>
                                    </div>
                                    
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearancePurpose"  class="col-form-label-sm">Purpose</label>
                                        <input type="text" name="purpose" class="form-control" id="clearancePurpose" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="clearanceQty"  class="col-form-label-sm">Quantity</label>
                                        <input type="text" name="qty" class="form-control" id="clearanceQty" >
                                    </div>


                            </div>
                            <div class="modal-footer text-center">
                                <div class="mb-3 col-12 col-md-12 input-group-sm">
                                    <label for="clearanceFeedback" class="col-form-label-sm">Response Message</label>
                                    <textarea class="form-control" name="feedback" id="clearanceFeedback" rows="3" readonly></textarea>
                                </div>
                                <div class="col-12  col-md-12 row ">
                                    <div class="offset-1 col-5  offset-md-2 col-md-4 d-grid gap-2 text-center">
                                        <button type="submit" name="btnUpdate" class="btn btn-success">Re: Submit</button>
                                    </div>
                                    <div class="col-5 col-md-4 d-grid gap- text-center">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Back</button>
                                    </div>
                                </div>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>