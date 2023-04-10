<div class="modal fade" id="modalPermit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/users/resubmit_permit" method="POST" class="row gx-3">
                                    <input type="hidden" name="id" id="permitId">
                                    <input type="hidden" name="control" id="permitControl">
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitLastName" class="col-form-label-sm">Last Name</label>
                                        <input type="text" name="lastName" class="form-control" id="permitLastName" readonly >
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitFirstName" class="col-form-label-sm">First Name</label>
                                        <input type="text" name="firstName" class="form-control" id="permitFirstName" readonly>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitMiddleName" class="col-form-label-sm">Middle Name</label>
                                        <input type="text" name="middleName" class="form-control" id="permitMiddleName" readonly>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitSuffix" class="col-form-label-sm">Suffix</label>
                                        <input type="text" name="suffix" class="form-control" id="permitSuffix" readonly>
                                    </div>
                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitContactNum" class="col-form-label-sm">Contact Number</label>
                                        <input type="text" name="contactNum" class="form-control" id="permitContactNum" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitAddress" class="col-form-label-sm">Address</label>
                                        <input type="text" name="address" class="form-control" id="permitAddress" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitCategory" class="col-form-label-sm">Category</label>
                                        <select id="permitCategory" name="category" class="form-select">
                                        <option value="New">New</option>
                                        <option value="Renewal">Renewal</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitFormType" class="col-form-label-sm">Type of Certificate</label>
                                        <input class="form-control" type="text" name="formType"  value="Barangay Permit" id="permitFormType" readonly>
                                    </div>
                                    
                                    <div class="col-12 col-md-12 input-group-sm">
                                    <label for="permitBusinessName" class="col-form-label-sm">Business Name</label>
                                        <input type="text" name="businessName" class="form-control" id="permitBusinessName" >
                                    </div>

                                    <div class="col-12 col-md-12 input-group-sm">
                                    <label for="permitBusinessAddress" class="col-form-label-sm">Business Address</label>
                                        <input type="text" name="businessAddress" class="form-control" id="permitBusinessAddress" >
                                    </div>

                                    <div class="col-12 col-md-12 input-group-sm">
                                    <label for="permitBusinessType" class="col-form-label-sm">Business Type</label>
                                        <input type="text" name="businessType" class="form-control" id="permitBusinessType" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitPurpose"  class="col-form-label-sm">Purpose</label>
                                        <input type="text" name="purpose" class="form-control" id="permitPurpose" >
                                    </div>

                                    <div class="col-6 col-md-6 input-group-sm">
                                        <label for="permitQty"  class="col-form-label-sm">Quantity</label>
                                        <input type="number" name="qty" class="form-control" id="permitQty" >
                                    </div>


                            </div>
                            <div class="modal-footer text-center">
                                <div class="mb-3 col-12 col-md-12 input-group-sm">
                                            <label for="permitFeedback" class="col-form-label-sm">Response Message</label>
                                            <textarea class="form-control" name="feedback" id="permitFeedback" rows="3"readonly></textarea>
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