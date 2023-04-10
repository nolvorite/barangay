<div class="modal fade" id="modalAddResident" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Manage Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body overflow-hidden">
                                <form action="<?php echo URLROOT; ?>/residents/modalAddResident" method="POST" enctype="multipart/form-data">
                                    <div class="row g-4 ">

                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="row g-2  p-3 border border-2 rounded-3">
                                                <h6>PHOTO</h6>
                                                <div class="d-grid gap-2 col-12 mx-auto ">
                                                    <img src="<?php echo URLROOT .'/img/id/resident/placeholder.png'?>" class="img-thumbnail" onclick="residentTriggerClick()" id="addDisplayResident" alt="">
                                                    <label for="addResident" class="form-label btn btn-secondary btn-sm rounded-pill"><i class="fas fa-folder-open"></i>&nbsp;Browse</label>
                                                    <input class="form-control" type="file"  name="idPic" onchange="displayResident(this)" id="addResident">

                                                </div>
                                                <div class="col col-md-12">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-8 ">
                                            <div class="row g-2  p-3 border border-2 rounded-3">
                                                <h6>PERSONAL INFORMATION</h6>
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputLastName" class="col-form-label-sm">Last Name</label>
                                                    <input type="text" name="lastName" class="form-control check_last_name check_resident" id="inputLastName"required>
                                                    <small class="error_resident text-success position-absolute"></small>
                                                </div>
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputFirstName" class="col-form-label-sm">First Name</label>
                                                    <input type="text" name="firstName" class="form-control check_first_name check_resident" id="inputFirstName"required>
                                                </div>
                                                <div class="col-6  col-md-3 input-group-sm">
                                                    <label for="inputMiddleName" class="col-form-label-sm">Middle Name</label>
                                                    <input type="text" name="middleName" class="form-control check_middle_name check_resident" id="inputMiddleName"required>
                                                </div>
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputSuffix" class="col-form-label-sm">Suffix</label>
                                                    <select id="inputSuffix" name="suffix" class="form-select check_suffix check_resident">
                                                        <option value="" selected>None</option>
                                                        <option value="Jr.">Jr.</option>
                                                        <option value="Sr.">Sr.</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputGender" class="col-form-label-sm">Gender</label>
                                                    <select id="inputGender" name="gender" class="form-select"required>
                                                    <option value="" selected>None</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-md-3 input-group-sm ">
                                                    <label for="inputBirthDate" class="col-form-label-sm">Birth Date</label>
                                                    <input type="date" name="birthDate" class="form-control" id="inputBirthDate"required>
                                                </div>
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputBirthPlace" class="col-form-label-sm">Birth Place</label>
                                                    <input type="text" name="birthPlace" class="form-control" id="inputBirthPlace"required>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputBirthPlace" class="col-form-label-sm">Age</label>
                                                    <input type="number" class="form-control" id="inputAge"required readonly>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputCivilStatus" class="col-form-label-sm">Civil Status</label>
                                                    <select id="inputCivilStatus" name="civilStatus" class="form-select"required>
                                                    <option value="" selected>Select</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Separated">Separated</option>
                                                    <option value="Widowed">Widowed</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputNationality" class="col-form-label-sm">Nationality</label>
                                                    <input type="text" name="nationality" class="form-control" id="inputNationality"required>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputReligion" class="col-form-label-sm">Religion</label>
                                                    <input type="text" name="religion" class="form-control" id="inputReligion">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputOccupation" class="col-form-label-sm">Occupation</label>
                                                    <input type="text" name="occupation" class="form-control" id="inputOccupation">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputContactNum" class="col-form-label-sm">Contact Number</label>
                                                    <input type="text" name="contactNum" class="form-control" id="inputContactNum">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputPwd" class="col-form-label-sm">PWD?</label>
                                                    <select id="inputPwd" name="pwd" class="form-select"required>
                                                    <option value="No" selected>No</option>
                                                    <option value="Yes">Yes</option>
                                                    </select>
                                                </div>

                                                
                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputPwdId" class="col-form-label-sm">PWD ID.No</label>
                                                    <input type="text" name="pwdId" class="form-control" id="inputPwdId">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputFamilyMonthlyIncome" class="col-form-label-sm">Family Monthly Income</label>
                                                    <input type="number" name="familyMonthlyIncome" class="form-control" id="inputFamilyMonthlyIncome">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputIndigent" class="col-form-label-sm">Indigent?</label>
                                                    <select id="inputIndigent" name="indigent" class="form-select">
                                                    <option value="No" selected>No</option>
                                                    <option value="Yes">Yes</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputSoloParent" class="col-form-label-sm">Solo Parent?</label>
                                                    <select id="inputSoloParent" name="soloParent" class="form-select">
                                                    <option value="No" selected>No</option>
                                                    <option value="Yes">Yes</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputSoloParentId" class="col-form-label-sm">Solo Parent ID No.</label>
                                                    <input type="text" name="soloParentId" class="form-control" id="inputSoloParentId">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputpantawidPamilya" class="col-form-label-sm">4ps member?</label>
                                                    <select id="inputpantawidPamilya" name="pantawidPamilya" class="form-select">
                                                    <option value="No" selected>No</option>
                                                    <option value="Yes">Yes</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputVoter" class="col-form-label-sm">Register Voter?</label>
                                                    <select id="inputVoter" name="voter" class="form-select"required>
                                                    <option value="No" selected>No</option>
                                                    <option value="Yes">Yes</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputHouseNo" class="col-form-label-sm">House No.</label>
                                                    <input type="text" name="houseNo" class="form-control" id="inputHouseNo">
                                                </div>

                                                <div class="col-6 col-md-3 input-group-sm">
                                                    <label for="inputStreet" class="col-form-label-sm">Street</label>
                                                    <input type="text" name="street"  class="form-control" id="inputStreet">
                                                </div>

                                                
                                                <div class="col-6 col-md-3 input-group-sm">
                                                            <label for="inputVaccinated" class="col-form-label-sm">Vaccinated</label>
                                                            <select id="inputVaccinatedr" name="vaccinated" class="form-select">
                                                            <option value="No" selected>No</option>
                                                            <option value="Yes">Yes</option>
                                                            </select>
                                                        </div>
                                                

                                            </div>

            
                                            
                                        </div>





                                        
                                        <div class="col-sm-12 col-md-4">
                                            <div class="row g-2 border border-2 rounded-3">
   

                                                <div class="col-sm-12 col-md-12">
                                                    <div class="row g-2 p-3">
                                                        
                                                        <div class="col-6 col-md-6 input-group-sm">
                                                            <label for="inputDateOfRegistration" class="col-form-label-sm">Date of Registration</label>
                                                            <input type="datetime-local" name="dateOfRegistration" value="<?php echo date('Y-m-d\TH:i:s') ?>"  class="form-control" id="inputDateOfRegistration">
                                                        </div>
                                                        

                                                        <div class="col-6 col-md-6 input-group-sm">
                                                            <label for="inputDateOfDeath" class="col-form-label-sm">Date of Death</label>
                                                            <input type="date" name="dateOfDeath"  class="form-control" id="inputDateOfDeath">
                                                        </div>

                                                        <label class="col-form-label-sm">Alive or Deseased</label>
                                                        <div class="btn-group mt-0" role="group" aria-label="Basic radio toggle button group">
                                                            <input type="radio" class="btn-check" name="status" value="Alive" id="btnradio1" autocomplete="off" checked>
                                                            <label class="btn btn-outline-primary btn-sm rounded-pill" for="btnradio1"><i class="fas fa-heart"></i>&nbsp;</label>

                                                            <input type="radio" class="btn-check" name="status" value="Deseased" id="btnradio2" autocomplete="off">
                                                            <label class="btn btn-outline-danger btn-sm rounded-pill" for="btnradio2"><i class="fas fa-skull-crossbones"></i>&nbsp;</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-4">

   
                                        </div>



                                    </div>


 


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success add_success" disabled><i class="fas fa-print"></i>Save</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>