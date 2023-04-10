


<?php
    if($_SESSION['account_type'] == 0){
        require APPROOT . '/views/includes/user/head.php'; 
        require APPROOT . '/views/includes/user/header.php'; 
    }
    if($_SESSION['account_type'] == 2){
        require APPROOT . '/views/includes/bhw/navigation.php'; 
    }
?>

<!-- ======= Header Section ======= -->
<section id="header" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1 class = "animated fadeInUp" style = "animation-delay: 0.3s">Certificate of Indigency</h1>

          <h2 class = "animated bounceInLeft" style = "animation-delay: 0.5s"></h2>  
          
        </div>
      </div>
    </div>
  </section>
<!-- End Header -->

<br>
<br>

    <!-- 4 Column -->
	<div id="cln" class="container-fluid padding">
        <div class="container text-center">
            <h2>PROCEDURE</h2>
            <div class="col-md-12 col-md-offset-2">
               <div class="red-border">
                  &nbsp;
               </div>
            </div>
        </div>
		<div class="row text-center padding d-flex justify-content-center">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<i class="fas fa-laptop-code"></i>
				<h3>Step 1: Fill-Up Form</h3>
				<p>The second step is to complete the entire form in our system.
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
      <i class="fas fa-user-check"></i>
				<h3>Step 2: Assesment</h3>
				<p>The third step is to validate all of the information you've provided in our system so that we can accurately create the information for your document.
				</p>
			</div>
      <div class="col-xs-12 col-sm-6 col-md-3">
      <i class="fas fa-file"></i>
				<h3>Step 3: Release</h3>
				<p>The fourth step is to obtain your Business/permit. Mayor's
				</p>
			</div>
		</div>
    </div>
    <br>
  
    <div id="clnn" class="container-fluid padding">
        <div class="container text-center">
            <h2>REGISTRATION</h2>
            <div class="col-md-12 col-md-offset-2">
               <div class="red-border">
                  &nbsp;
               </div>
            </div>
</div>
</div> 

    <main>
        <div class="container-fluid px-2">
            <div class="card mb-2 col-12 offset-md-3 col-md-6 mt-3 mb-5">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8 col-md-12 ">
                        <h4 class="mx-auto text-center">Barangay Indigency</h4>
                        </div>
                    </div>
                </div>

                <div class="card-body ">
                    <form action="<?php echo URLROOT; ?>/users/request_indigency" method="POST">
                        <div class="row g-2 pb-3">
                            <div class="col-6 col-md-6 ">
                                <label for="inputLastName" class="col-form-label-sm">Last Name</label>
                                <input type="text" name="lastName" value="<?php echo $_SESSION['lastname']?>" class="form-control" id="inputLastName"readonly>
                                <div class="validation-invalid"><?php echo $data['last_nameError'] ?></div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <label for="inputFirstName" class="col-form-label-sm">First Name</label>
                                <input type="text" name="firstName" value="<?php echo $_SESSION['firstname'] ?>" class="form-control" id="inputFirstName"readonly>
                                <div class="validation-invalid"><?php echo $data['first_nameError'] ?></div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <label for="inputMiddleName" class="col-form-label-sm">Middle Name</label>
                                <input type="text" name="middleName" value="<?php echo $_SESSION['middlename'] ?>" class="form-control" id="inputMiddleName"readonly>
                                <div class="validation-invalid"><?php echo $data['middle_nameError'] ?></div>
                            </div>
                            <div class="col-6 col-md-3 ">
                                <label for="inputSuffix" class="col-form-label-sm">Suffix</label>
                                <input type="text" name="suffix" value="<?php echo $_SESSION['suffix'] ?>" class="form-control" id="inputSuffix"readonly>

                            </div>
                            <div class="col-6 col-md-3 ">
                                <label for="inputContactNum" class="col-form-label-sm">Contact Number</label>
                                <input type="text" name="contactNum" placeholder="09" value="<?php echo $data['contact_number'] ?>" class="form-control" id="inputContactNum">
                                <div class="validation-invalid"><?php echo $data['contact_numberError'] ?></div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <label for="postalAddressNo" class="col-form-label-sm">Postal Address No.</label>
                                <input type="text" name="postalAddressNo" value="<?php echo $data['postal_address_no'] ?>" class="form-control" id="postalAddressNo">
                                <div class="validation-invalid"><?php echo $data['postal_address_noError'] ?></div>
                            </div>
                            <div class="col-6 col-md-6 ">
                                <label for="inputFormType" class="col-form-label-sm">Type of Certificate</label>
                                <input class="form-control" type="text" name="formType"  value="Barangay Indigency" id="inputFormType" readonly>
                            </div>
                            
                            <div class="col-6 col-md-6 ">
                                <label for="inputPurpose"  class="col-form-label-sm">Purpose
                                </label>
                                <input type="text" name="purpose" value="<?php echo $data['purpose'] ?>" class="form-control" id="inputPurpose">
                                <div class="validation-invalid"><?php echo $data['purposeError'] ?></div>

                            </div>
                            <div class="col-6 col-md-6">
                                <label for="inputQty"  class="col-form-label-sm">Quantity</label>
                                <input type="number" name="qty" value="<?php echo $data['qty'] ?>" class="form-control" id="inputQty" min="1" max="3">
                                <div class="validation-invalid"><?php echo $data['qtyError'] ?></div>
                            </div>
                            <div class="pt-3 mx-auto">
                                <button class="btn btn-primary" type="submit"><h6 class="my-auto">Submit</h6></button>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>  
        </div>
    </main>





  
<?php
    require APPROOT . '/views/includes/user/footer.php';
?>

