<div class="modal fade" id="modalClearanceId" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="<?php echo URLROOT; ?>/users/resubmit_id" method="POST" enctype="multipart/form-data" class="g-3">
                                    <input type="hidden" name="id" id="clearanceIdId">
                                    <input type="hidden" name="control" id="clearanceIdControl">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <img src="<?php echo URLROOT .'/img/img-placeholder.jpg'?>"  class="img-thumbnail" onclick="clearancetriggerClick()" id="idPicDisplay" alt="" >
                                            <input class="form-control" type="file"  name="idPic" onchange="displayId(this)" id="formIdPic">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="row">
                                                <div class="col-6 col-md-6 input-group-sm">
                                                    <label for="clearanceIdLastName" class="col-form-label-sm">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control" id="clearanceIdLastName" readonly>
                                                </div>
                                                <div class="col-6 col-md-6 input-group-sm">
                                                    <label for="clearanceIdFirstName" class="col-form-label-sm">First Name</label>
                                                    <input type="text" name="firstName" class="form-control" id="clearanceIdFirstName" readonly>
                                                </div>
                                                <div class="col-6  col-md-6 input-group-sm">
                                                    <label for="clearanceIdMiddleName" class="col-form-label-sm">Middle Name</label>
                                                    <input type="text" name="middleName" class="form-control" id="clearanceIdMiddleName" readonly>
                                                </div>
                                                <div class="col-6 col-md-6 input-group-sm">
                                                    <label for="clearanceIdSuffix" class="col-form-label-sm">Suffix</label>
                                                    <input type="text" name="suffix" class="form-control" id="clearanceIdSuffix" readonly>
                                                </div>

                                                <div class="col-6 col-md-6 input-group-sm ">
                                                    <label for="clearanceIdBirthDate" class="col-form-label-sm">Birth Date</label>
                                                    <input type="date" name="birthDate" class="form-control" id="clearanceIdBirthDate" readonly>
                                                </div>

                                                <div class="col-6 col-md-6 input-group-sm">
                                                    <label for="clearanceIdContactNum" class="col-form-label-sm">Contact Number</label>
                                                    <input type="text" name="contactNum" class="form-control" id="clearanceIdContactNum">
                                                </div>
     
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-6 col-md-4 input-group-sm">
                                                    <label for="clearanceIdStreet" class="col-form-label-sm">Street</label>
                                                    <input type="text" name="street" class="form-control" id="clearanceIdStreet">
                                                </div>

                                                <div class="col-6 col-md-4 input-group-sm">
                                                    <label for="clearanceIdPrecinctNo" class="col-form-label-sm">Precinct No.</label>
                                                    <input type="text" name="precinctNo" class="form-control" id="clearanceIdPrecinctNo">
                                                </div>


                                                <div class="col-12 col-md-4 input-group-sm d-none">
                                                    <label for="clearanceIdFormType" class="col-form-label-sm">Type of Certificate</label>
                                                    <input class="form-control" type="text" name="formType"  value="Barangay Clearance-ID" id="clearanceIdFormType" readonly>
                                                </div>

                                                <div class="col-6 col-md-4 input-group-sm">
                                                    <label for="clearnaceIdQty"  class="col-form-label-sm">Quantity</label>
                                                    <input type="number" name="qty" class="form-control" id="clearanceIdQty">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <div class="modal-footer text-center">
                                <div class="mb-3 col-12 col-md-12 input-group-sm">
                                            <label for="clearanceIdFeedback" class="col-form-label-sm">Response Message</label>
                                            <textarea class="form-control" name="feedback" id="clearanceIdFeedback" rows="3" readonly></textarea>
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