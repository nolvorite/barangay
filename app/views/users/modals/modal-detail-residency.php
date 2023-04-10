<div class="modal fade" id="modalResidency" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/users/resubmit_residency" method="POST" class="row gx-3">
                                    <input type="hidden" name="id" id="residencyId">
                                    <input type="hidden" name="control" id="residencyControl">
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyLastName" class="col-form-label-sm">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" id="residencyLastName" readonly>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyFirstName" class="col-form-label-sm">First Name</label>
                                        <input type="text" name="firstName" class="form-control" id="residencyFirstName"readonly >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyMiddleName" class="col-form-label-sm">Middle Name</label>
                                        <input type="text" name="middleName" class="form-control" id="residencyMiddleName"readonly>
                                    </div>
                                    <div class="col-6 col-md-3 input-group-sm">
                                        <label for="residencySuffix" class="col-form-label-sm">Suffix</label>
                                        <input type="text" name="suffix" class="form-control" id="residencySuffix"readonly>
                                    </div>
                                    <div class="col-6 col-md-3 input-group-sm">
                                        <label for="residencyContactNum" class="col-form-label-sm">Contact Number</label>
                                        <input type="text" name="contactNum" class="form-control" id="residencyContactNum" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyPostalAddress" class="col-form-label-sm">Postal Address</label>
                                        <input type="text" name="postalAddress" class="form-control" id="residencyPostalAddress" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyResidentSince" class="col-form-label-sm">Resident Since (Year)</label>
                                        <input type="text" name="residentSince" class="form-control" id="residencyResidentSince" >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyFormType" class="col-form-label-sm">Type of Certificate</label>
                                        <input class="form-control" type="text" name="formType"  value="Barangay residency" id="residencyFormType"  readonly>
                                    </div>
                                    
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyPurpose"  class="col-form-label-sm">Purpose</label>
                                        <input type="text" name="purpose" class="form-control" id="residencyPurpose" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="residencyQty"  class="col-form-label-sm">Quantity</label>
                                        <input type="text" name="qty" class="form-control" id="residencyQty" >
                                    </div>


                            </div>
                            <div class="modal-footer text-center">
                                <div class="mb-3 col-12 col-md-12 input-group-sm">
                                    <label for="residencyFeedback" class="col-form-label-sm">Response Message</label>
                                    <textarea class="form-control" name="feedback" id="residencyFeedback" rows="3" readonly></textarea>
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