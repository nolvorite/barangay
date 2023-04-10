<?php
class Users extends Controller {
    public $session;
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->certificateModel = $this->model('Certificate');
        $this->adminModel = $this->model('Admin');
        $this->session = new Session;
    }

    public function index($id = '', $form_type = '') {
        // if(!isLoggedIn()) {
        //     header("Location: " .URLROOT . "/users/login");
        // }else if( $_SESSION['account_type'] == 1) {
        //     header("Location: " .URLROOT . "/admins/index");
        // }

        

        // $data = [
        //     'id' => $id,
        //     'form_type' => $form_type,
        //     'req_status' => 'wait for approval'
        // ];

        // $requests = $this->certificateModel->findMyRequest($data);

        // $data = [
        //     'id' => $id,
        //     'form_type' => $form_type,
        //     'req_status' => 'Approved'
        // ];

        // $approve = $this->certificateModel->findMyRequest($data);

        // $data = [
        //     'id' => $id,
        //     'form_type' => $form_type,
        //     'req_status' => 'Disapproved'
        // ];

        // $disapprove = $this->certificateModel->findMyRequest($data);

        // $data = [
        //     'id' => $id,
        //     'form_type' => $form_type,
        //     'req_status' => 'Completed'
        // ];

        // $complete = $this->certificateModel->findMyRequest($data);

        // $data = [
        //     'id' => $id,
        //     'form_type' => $form_type,
        //     'req_status' => 'Cancelled'
        // ];

        // $cancel = $this->certificateModel->findMyRequest($data);

        // $content = $this->adminModel->getContent();

        // $data = [
        //     'requests' => $requests,
        //     'approve' =>  $approve,
        //     'disapprove' =>  $disapprove,
        //     'complete' => $complete,
        //     'cancel' => $cancel,
        //     'title' => 'All Request',
        //     'content' => $content
            
        // ];

        $this->view('users/index');
    }


    public function about() {

        $this->view('users/about');
    }

    public function services() {

        $this->view('users/services');
    }

    public function announcement() {

        $this->view('users/announcement');
    }

    public function gallery() {

        $this->view('users/gallery');
    }

    public function hotlines() {

        $this->view('users/hotlines');
    }

    public function contact() {

        $this->view('users/contact');
    }



    public function register() {
        if(isLoggedIn()) {
            header("Location: " .URLROOT . "/");
        }
        $data = [
            'username' => '',
            'firstName' => '',
            'lastName' => '',
            'middleName' => '',
            'suffix' => '',
            'password' => '',
            'confirmPassword' => '',

            'usernameError' => '',
            'firstNameError' => '',
            'lastNameError' => '',
            'middleNameError' => '',
            'suffixError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'lastName' => trim($_POST['lastName']),
                'firstName' => trim($_POST['firstName']),
                'middleName' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                
                'usernameError' => '',
                'firstNameError' => '',
                'lastNameError' => '',
                'middleNameError' => '',
                'suffixError' => '',
                'passwordError' => '',
                'confirmPasswordError' => '',
               
            ];

            $findUser = $this->userModel->findUser($data);
            if(empty($data['firstName'])){
                $data['firstNameError'] = 'Enter first name';
            }
            if(empty($data['lastName'])){
                $data['lastNameError'] = 'Enter last name';
            }
            if(empty($data['middleName'])){
                $data['middleNameError'] = 'Enter middle name';
            }

            if(empty($data['username'])){
                $data['usernameError'] = 'Enter username';
            }else if($findUser) {
                $data['usernameError'] = 'Username already registered!';
            }

            $checkResident = $this->userModel->checkResidentList($data);
            $checkAccountStatus = $this->userModel->checkAccountStatus($data);

            // if(empty($data['mobileNumber'])){
    
            //     $data['mobileNumberError'] = 'Enter a mobile number';
            // }else if($findMobileNumber){
            //     $data['mobileNumberError'] = 'Mobile no. already in use!';
            // }
            if(empty($data['password'])){
                $data['passwordError'] ='Enter a password';
            }
            if($data['password'] != $data['confirmPassword']){
                $data['passwordError'] = 'Password not match!';
            }
            echo var_dump($data);
            echo var_dump($checkAccountStatus);


            //Make sure that errors are empty
            if(empty($data['usernameError']) && empty($data['firstNameError']) && empty($data['lastNameError']) && empty($data['middleNameError']) &&  empty($data['passwordError']) && empty($data['confirmPasswordError'])){
                if($checkResident->last_name AND $checkResident->middle_name AND $checkResident->first_name AND $checkResident->suffix == $data['suffix'] ){
                    if(empty($checkAccountStatus)){
                    //Hash password
                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                    //Register user from model function
                    if($this->userModel->register($data)){
                        // Redirect to the login page
                        $this->session->setFlash('status', 'Account Created!');
                        $this->session->setFlash('status_text', 'You may now login');
                        $this->session->setFlash('status_icon', 'success');
                        header('location: '. URLROOT . '/users/login');
                    }else{
                        die('Something went wrong.');
                    }
                    }else {
                        $this->session->setFlash('status', 'Can not create an account!');
                        $this->session->setFlash('status_text', 'This resident already have a verified account! If you forgot your account contact the barangay official facebook page or go to barangay hall');
                        $this->session->setFlash('status_icon', 'error');
                        header('location: '. URLROOT . '/users/register');
                    }
                }else{
                    $this->session->setFlash('status', 'Name not found!');
                    $this->session->setFlash('status_text', 'You need to register at barangay as resident!');
                    $this->session->setFlash('status_icon', 'error');
                    header('location: '. URLROOT . '/users/register');
                }

            }



        }

        $this->view('users/register', $data);
    }

    public function password(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        $data = [
            
            'current_passwordError' =>'' ,
            'new_passwordError' => '',
            'confirm_new_passwordError' => ''
        ];


        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => $_SESSION['username'],
                'current_password' => $_POST['currentPassword'],
                'new_password' => $_POST['newPassword'],
                'confirm_new_password' => $_POST['confirmNewPassword'],

                'current_passwordError' =>'' ,
                'new_passwordError' => '',
                'confirm_new_passwordError' => ''
            ];

            if(empty($data['current_password'])){
                $data['current_passwordError'] = 'Enter your current password';
            }

            if(empty($data['new_password'])){
                $data['new_passwordError'] = 'Password cannot be empty!';
            }
            if($data['new_password'] != $data['confirm_new_password']){
                $data['confirm_new_passwordError'] = 'Passwords do not match';
            }



            //
            if(empty($data['current_passwordError']) && empty($data['new_passwordError']) && empty($data['confirm_new_passwordError'])){
                $data['new_password'] = password_hash($data['new_password'],PASSWORD_DEFAULT);
                if($this->userModel->changePassword($data)){
                    header('location:' . URLROOT . '/users/index');
                }else {
                    $data['current_passwordError'] = 'Enter a valid password and try again.';
                }
            }

            

        }

        $this->view('users/password', $data);
    }

    public function login() {
        if(isLoggedIn()) {
            header("Location: " .URLROOT . "/");
        }
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            $findUser = $this->userModel->findUser($data);
            //Validate username
            if(empty($data['username'])){
                $data['usernameError'] = 'Please enter a username.';
            }else if($findUser === false){
                $data['usernameError'] = "Username not registered";
            }

            //Validate username
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter a password.';
            }

            $findUser = $this->userModel->getUserDetails($data);



            //Check if all errors are empty
            if(empty($data['usernameError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else {
                    $data['passwordError'] = 'Password is incorrect. Please try again.';

                    $this->view('users/login',$data);
                }
            }
            
        }else{
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }


        $this->view('users/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['firstname'] = $user->first_name;
        $_SESSION['lastname'] = $user->last_name;
        $_SESSION['middlename'] = $user->middle_name;
        $_SESSION['suffix'] = $user->suffix;
        $_SESSION['account_type'] = $user->account_type;
        $_SESSION['profile_pic'] = $user->profile_pic;
        

        if($_SESSION['account_type'] == 1 ){
            
            $this->session->setFlash('status','Login Successfully');
            $this->session->setFlash('status_text','Welcome');
            $this->session->setFlash('status_icon','success');
           
            header('location:' . URLROOT . '/admins/index');
        }else {
            $this->session->setFlash('status','Login Successfully');
            $this->session->setFlash('status_text','Welcome');
            $this->session->setFlash('status_icon','success');
            header('location:' . URLROOT . '/users/index');
        }

    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']);
        unset($_SESSION['middlename']);
        unset($_SESSION['suffix']);
        unset($_SESSION['account_type']);
        unset($_SESSION['profile_pic']);
        header('location:' .URLROOT . '/users/login');
        
    }


    public function myrequest($id = '', $form_type = '') {
        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req_status' => 'wait for approval'
        ];

        $requests = $this->certificateModel->findMyRequest($data);

        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req_status' => 'Approved'
        ];

        $approve = $this->certificateModel->findMyRequest($data);

        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req_status' => 'Disapproved'
        ];

        $disapprove = $this->certificateModel->findMyRequest($data);

        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req_status' => 'Completed'
        ];

        $complete = $this->certificateModel->findMyRequest($data);

        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req_status' => 'Cancelled'
        ];

        $cancel = $this->certificateModel->findMyRequest($data);

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins");
        }

        $username = $_SESSION['username'];

        $data = [
            'username' => $username
        ];
        $myDetails = $this->userModel->getUserDetails($data);

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['id']),
                'username' => trim($_POST['username']),
                'profile_pic' => $myDetails->username .'.' . pathinfo($_FILES['changeProfile']['name'], PATHINFO_EXTENSION)

                
            ];
            $target = '../public/img/' . $data['profile_pic'];

            if($data['profile_pic'] == $myDetails->username.'.'){
                $data['profile_pic'] = $myDetails->profile_pic;
            }else{
                if($oldProfile = '../public/img/' . $myDetails->profile_pic){
                    unlink($oldProfile);
                    $target = '../public/img/' . $data['profile_pic'];
                }
            }

            if(move_uploaded_file($_FILES['changeProfile']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }            

            if($this->userModel->editProfile($data)){
                unset($_SESSION['profile_pic']);
                $_SESSION['profile_pic'] = $data['profile_pic'];
                header("Location: " .URLROOT . "/users/profile");
            }
            
        }


        $data = [
            'requests' => $requests,
            'approve' =>  $approve,
            'disapprove' =>  $disapprove,
            'complete' => $complete,
            'cancel' => $cancel,
            'title' => 'All Request',
            'myDetails' => $myDetails
            
        ];

        $this->view('users/myrequest', $data);
    }

    public function view_detail($id = '', $req = '', $form_type = '') {
        $data = [
            'id' => $id,
            'form_type' => $form_type,
            'req' => $req
        ];


        $certificate = $this->certificateModel->findCertificateById($data);

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'certificate' => $certificate,
            'title' => 'View Detail',
            
        ];
         echo json_encode($certificate);
        //$this->view('certificates/modals/modal-view-indigency', $data);
    }

    public function update_request() {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        // APPROVE
        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control'])
                
            ];
            // Update request status
            if($this->certificateModel->updateRequest($data)) {

                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }
            

        }
    }

    public function resubmit_indigency(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control']),

                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'postal_address_no' => trim($_POST['postalAddressNo']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'indigency'

            ];
            // Update request status
            if($this->certificateModel->updateRequestByUser($data) && $this->certificateModel->updateRequestQty($data) ) {
                $this->session->setFlash('status', 'Resubmit successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }
            

        }
    }

    public function resubmit_permit(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control']),

                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),

                'business_name' => trim($_POST['businessName']),
                'business_address' => trim($_POST['businessAddress']),
                'business_type' => trim($_POST['businessType']),
                'category' => trim($_POST['category']),
                'address' => trim($_POST['address']),


                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'permit'

            ];
            // Update request status
            if($this->certificateModel->updateRequestByUser($data) && $this->certificateModel->updateRequestQty($data) ) {
                $this->session->setFlash('status', 'Resubmit successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }
            

        }
    }

    public function resubmit_clearance(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control']),

                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'address' => trim($_POST['address']),
                'tax_cert_no' => trim($_POST['taxCertNo']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'clearance'

            ];
            // Update request status
            if($this->certificateModel->updateRequestByUser($data) && $this->certificateModel->updateRequestQty($data) ) {
                $this->session->setFlash('status', 'Resubmit successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }

        }
    }

    public function resubmit_id(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => trim($_POST['id']),
            ];
            $clearanceIdDetails = $this->certificateModel->clearanceIdDetails($data);


            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control']),
                'id_pic' => time() . '_' . $_FILES['idPic']['name'],
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'birth_date' => trim(date('Y-m-d', strtotime($_POST['birthDate']))),
                'street' => trim($_POST['street']),
                'precinct_no' => trim($_POST['precinctNo']),
                'contact_number' => trim($_POST['contactNum']),
                'form_type' => trim($_POST['formType']),
                'purpose' => '',
                'qty' => trim($_POST['qty']),
                'table_name' => 'clearance_id'

            ];

            $target = '../public/img/id/' . $data['id_pic'];
                if(strlen($data['id_pic']) < 12){
                    $data['id_pic'] = $clearanceIdDetails->id_pic;
                }            
            

            // Update request status
            if($this->certificateModel->updateRequestByUser($data) && $this->certificateModel->updateRequestQty($data) ) {
                if(move_uploaded_file($_FILES['idPic']['tmp_name'], $target)){
                    $_SESSION['msg'] = "Image uploaded";
                    $_SESSION['css_class'] = "alert-success";
                }else {
                    $_SESSION['msg'] = "Failed to upload";
                    $_SESSION['css_class'] = "alert-danger";
                }
                $this->session->setFlash('status', 'Resubmit successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }
            

        }
    }

    public function resubmit_residency(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if(isset($_POST['btnUpdate'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => trim($_POST['id']),
                'form_type' => trim($_POST['formType']),
                'req_status' => 'wait for approval',
                'control' => trim($_POST['control']),

                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'postal_address' => trim($_POST['postalAddress']),
                'resident_since' => trim($_POST['residentSince']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'residency'

            ];
            // Update request status
            if($this->certificateModel->updateRequestByUser($data) && $this->certificateModel->updateRequestQty($data) ) {
                $this->session->setFlash('status', 'Resubmit successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");

            }else {
                die("Something went wrong, please try again!");
            }
            

        }
    }

    public function cancel_request(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data = [
                'id' => $_POST['id']
            ];

            if($this->certificateModel->cancelRequest($data)){
                $this->session->setFlash('status', 'Your request has been cancelled!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/myrequest");
            }
        }
        
    }

    public function profile($username = ''){

        $username = $_SESSION['username'];

        $data = [
            'username' => $username
        ];
        $myDetails = $this->userModel->getUserDetails($data);

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => trim($_POST['id']),
                'username' => trim($_POST['username']),
                'profile_pic' => $myDetails->username .'.' . pathinfo($_FILES['changeProfile']['name'], PATHINFO_EXTENSION)

                
            ];
            $target = '../public/img/' . $data['profile_pic'];

            if($data['profile_pic'] == $myDetails->username.'.'){
                $data['profile_pic'] = $myDetails->profile_pic;
            }else{
                if($oldProfile = '../public/img/' . $myDetails->profile_pic){
                    unlink($oldProfile);
                    $target = '../public/img/' . $data['profile_pic'];
                }
            }

            if(move_uploaded_file($_FILES['changeProfile']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }            

            if($this->userModel->editProfile($data)){
                unset($_SESSION['profile_pic']);
                $_SESSION['profile_pic'] = $data['profile_pic'];
                header("Location: " .URLROOT . "/users/profile");
            }
            
        }


        $data = [
            'myDetails' => $myDetails
        ];


        $this->view('users/profile', $data);
    }


    public function view_profile($id = ''){

        $username = $_SESSION['username'];

        $data = [
            'username' => $username
        ];
        $myDetails = $this->userModel->getUserDetails($data);



        $data = [
            'myDetails' => $myDetails
        ];



        echo json_encode($myDetails);
    }


    public function changeProfile() {

        $data =  [
            'username' => $_SESSION['username']
        ]; 
        $detail = $this->userModel->getUserDetails($data);

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        // $data = [
        //     'detail' => $detail,
        //     'title' => 'Barangay Details',
        //     'brgy_name' => '',
        //     'address' => '',
        //     'mobile_number' => '',
        //     'brgy_captain' => '',
        //     'pic_logo' => ''
        // ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'profile_pic' => 'profile.' . pathinfo($_FILES['changeProfile']['name'], PATHINFO_EXTENSION)
            ];



            if($data['profile_pic'] == 'profile.'){
                $data['profile_pic'] = $detail->profile_pic;
                
            }else{
                if($oldProfile = '../public/img/' . $detail->profile_pic){
                    unlink($oldProfile);
                    $target = '../public/img/' . $data['pic_logo'];
                }
            }

            
            if(move_uploaded_file($_FILES['changeProfile']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }
            if($this->usersModel->changeLogo($data)) {
                header("Location: " .URLROOT . "/users/profile");
            }else {
                die("Something went wrong, please try again!");
            }
            

        }

        $this->view('users/profile', $data);
    }




    public function request_indigency(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }
        $data = [
            'id' => $_SESSION['user_id']
        ];
        $status = $this->userModel->getUserDetailsById($data);
        // if($status->status != 'Verified'){
        //     $this->session->setFlash('status', 'Account not verified');
        //     $this->session->setFlash('status_icon', 'warning');
        //     $this->session->setFlash('status_text', 'Verify your account first to request cerficicate!');
        //     header("Location: " .URLROOT . "/users/index");
        // }

        

        $data = [
            'last_name' => '',
            'first_name' => '',
            'middle_name' => '',
            'suffix' => '',
            'contact_number' => '',
            'postal_address_no' => '',
            'form_type' => '',
            'purpose' => '',
            'qty' => '',
            
            'last_nameError' => '',
            'first_nameError' => '',
            'middle_nameError' => '',
            'suffixError' => '',
            'contact_numberError' => '',
            'postal_address_noError' => '',
            'form_typeError' => '',
            'purposeError' => '',
            'qtyError' => '',
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'postal_address_no' => trim($_POST['postalAddressNo']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'indigency',

                'last_nameError' => '',
                'first_nameError' => '',
                'middle_nameError' => '',
                'suffixError' => '',
                'contact_numberError' => '',
                'form_typeError' => '',
                'purposeError' => '',
                'qtyError' => '',
                
            ];

            if(empty($data['last_name'])){
                $data['last_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['last_name'])){
            //     $data['last_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['last_name']) < 2 ){
                $data['last_nameError'] = 'name is too short';
            }

            if(empty($data['first_name'])){
                $data['first_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['first_name'])){
            //     $data['first_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['first_name']) < 2){
                $data['first_nameError'] = 'name is too short';
            }

            if(empty($data['middle_name'])){
                $data['middle_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['middle_name'])){
            //     $data['middle_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['middle_name']) < 2){
                $data['middle_nameError'] = 'name is too short';
            }

            if($data['contact_number']){
                if(!preg_match('/^[0-9]*$/', $data['contact_number'])){
                    $data['contact_numberError'] = 'invalid number';
                }else if( strlen($data['contact_number']) != 11) {
                    $data['contact_numberError'] = 'invalid number';
                }
            }

            if(empty($data['postal_address_no'])){
                $data['postal_address_noError'] = 'required*';
            }

            if(empty($data['purpose'])){
                $data['purposeError'] = 'required*';
            }
            if(empty($data['qty'])){
                $data['qtyError'] = 'required*';
            }
            
            if(empty($data['last_nameError']) && empty($data['first_nameError']) && empty($data['middle_nameError']) && empty($data['contact_numberError']) && empty($data['purposeError']) && empty($data['qtyError']) && empty($data['postal_address_noError'])){
                            // Add the data to indigency table
                if($this->certificateModel->addIndigency($data)) {
                    // getFormId - get the id of indigency and set it to $formId
                    $formId = $this->certificateModel->getFormId($data)->id;

                    if($_SESSION['account_type'] != 1){
                        $tableType = 'request';
                    }else{
                        $tableType = 'walk_in';
                    }

                    $data = [
                        'form_type' => trim($_POST['formType']),
                        'purpose' => trim($_POST['purpose']),
                        'qty' => trim($_POST['qty']),
                        'form_type' => 'Barangay Indigency',
                        'formId' => $formId,
                        'table_name' => $tableType
                    ];
                        // Add the data to walk_in table
                        if($this->certificateModel->addCertificate($data)){
                    
                        // get the id of walk_in and set it to $formId
                        $formId = $this->certificateModel->getFormId($data)->id;

                        $data = [
                            'table_name' => 'indigency',
                            'formId' => $formId
                        ];

                        if($this->certificateModel->addIdControl($data)){

                            $lastId = $this->certificateModel->getLastId($data);
  
                            // $_SESSION['status'] = "Submit Successfully!";
                            // $_SESSION['status_code'] = "success";
                            // session_start();

                            $this->session->setFlash('status', 'Request Submitted');
                            $this->session->setFlash('status_text', 'Please wait for approval');
                            $this->session->setFlash('status_icon', 'success');
                            header("Location: " .URLROOT . "/users/myrequest");
 
                        }  
                    }
                }else {
                    die("Something went wrong, please try again!");
                }
            }

        }

        $this->view('users/request_indigency', $data);
    }

    public function request_permit() {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        $data = [
            'id' => $_SESSION['user_id']
        ];
        $status = $this->userModel->getUserDetailsById($data);
        if($status->status != 'Verified'){
            $this->session->setFlash('status', 'Account not verified');
            $this->session->setFlash('status_icon', 'warning');
            $this->session->setFlash('status_text', 'Verify your account first to request cerficicate!');
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'last_name' => '',
            'first_name' => '',
            'middle_name' => '',
            'suffix' => '',
            'contact_number' => '',
            'form_type' => '',
            'address' => '',
            'category' => '',
            'business_name' => '',
            'business_address' => '',
            'business_type' => '',
            'purpose' => '',
            'qty' => '',

            'last_nameError' => '',
            'first_nameError' => '',
            'middle_nameError' => '',
            'suffixError' => '',
            'contact_numberError' => '',
            'form_typeError' => '',
            'addressError' => '',
            'categoryError' => '',
            'business_nameError' => '',
            'business_addressError' => '',
            'business_typeError' => '',
            'purposeError' => '',
            'qtyError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'form_type' => trim($_POST['formType']),
                'address' => trim($_POST['address']),
                'category' => trim($_POST['category']),
                'business_name' => trim($_POST['business_name']),
                'business_address' => trim($_POST['business_address']),
                'business_type' => trim($_POST['business_type']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'permit',

                'last_nameError' => '',
                'first_nameError' => '',
                'middle_nameError' => '',
                'suffixError' => '',
                'contact_numberError' => '',
                'form_typeError' => '',
                'categoryError' => '',
                'business_nameError' => '',
                'business_addressError' => '',
                'business_typeError' => '',
                'purposeError' => '',
                'qtyError' => '',
                
            ];

            if(empty($data['last_name'])){
                $data['last_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['last_name'])){
            //     $data['last_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['last_name']) < 2 ){
                $data['last_nameError'] = 'name is too short';
            }

            if(empty($data['first_name'])){
                $data['first_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['first_name'])){
            //     $data['first_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['first_name']) < 2){
                $data['first_nameError'] = 'name is too short';
            }

            if(empty($data['middle_name'])){
                $data['middle_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['middle_name'])){
            //     $data['middle_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['middle_name']) < 2){
                $data['middle_nameError'] = 'name is too short';
            }

            if($data['contact_number']){
                if(!preg_match('/^[0-9]*$/', $data['contact_number'])){
                    $data['contact_numberError'] = 'invalid number';
                }else if( strlen($data['contact_number']) != 11) {
                    $data['contact_numberError'] = 'invalid number';
                }
            }

            if(empty($data['address'])){
                $data['addressError'] = 'required';
            }


            if(empty($data['business_name'])){
                $data['business_nameError'] = 'required';
            }

            if(empty($data['business_address'])){
                $data['business_addressError'] = 'required';
            }

            if(empty($data['business_type'])){
                $data['business_typeError'] = 'required';
            }

            if(empty($data['category'])){
                $data['categoryError'] = 'required';
            }


            if(empty($data['purpose'])){
                $data['purposeError'] = 'required*';
            }
            if(empty($data['qty'])){
                $data['qtyError'] = 'required*';
            }



            if(empty($data['last_nameError']) && empty($data['first_nameError']) && empty($data['middle_nameError']) && empty($data['contact_numberError']) && empty($data['business_nameError']) && empty($data['business_addressError']) && empty($data['business_typeError']) && empty($data['categoryError']) && empty($data['purposeError']) && empty($data['qtyError'])){
                // Add the data to indigency table
                if($this->certificateModel->addPermit($data)) {
                    // getFormId - get the id of permit and set it to $formId
                    $formId = $this->certificateModel->getFormId($data)->id;

                    if($_SESSION['account_type'] != 1){
                        $tableType = 'request';
                    }else{
                        $tableType = 'walk_in';
                    }

                    $data = [
                        'form_type' => trim($_POST['formType']),
                        'purpose' => trim($_POST['purpose']),
                        'qty' => trim($_POST['qty']),
                        'form_type' => 'Barangay Permit',
                        'formId' => $formId,
                        'table_name' => $tableType
                    ];
                    // Add the data to walk_in table
                    if($this->certificateModel->addCertificate($data)){

                        // get the id of walk_in and set it to $formId
                        $formId = $this->certificateModel->getFormId($data)->id;

                        $data = [
                            'table_name' => 'permit',
                            'formId' => $formId
                        ];

                        if($this->certificateModel->addIdControl($data)){

                            $lastId = $this->certificateModel->getLastId($data);

                            if($_SESSION['account_type'] != 1){
                                $this->session->setFlash('status', 'Request Submitted');
                                $this->session->setFlash('status_text', 'Please wait for approval');
                                $this->session->setFlash('status_icon', 'success');
                                header("Location: " .URLROOT . "/users/myrequest");
                            }

                        }  
                    }
                }else {
                    die("Something went wrong, please try again!");
                }
            }

        }

        $this->view('users/request_permit', $data);
    }


    public function request_residency() {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        $data = [
            'id' => $_SESSION['user_id']
        ];
        $status = $this->userModel->getUserDetailsById($data);
        if($status->status != 'Verified'){
            $this->session->setFlash('status', 'Account not verified');
            $this->session->setFlash('status_icon', 'warning');
            $this->session->setFlash('status_text', 'Verify your account first to request cerficicate!');
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'lastName' => $_SESSION['lastname'],
            'firstName' => $_SESSION['firstname'],
            'middleName' => $_SESSION['middlename'],
            'suffix' => $_SESSION['suffix']
        ];

        $myData = $this->userModel->checkResidentList($data);

        $data = [
            'last_name' => '',
            'first_name' => '',
            'middle_name' => '',
            'suffix' => '',
            'contact_number' => '',
            'postal_address' => '',
            'resident_since' => '',
            'form_type' => '',
            'purpose' => '',
            'qty' => '',
            
            'last_nameError' => '',
            'first_nameError' => '',
            'middle_nameError' => '',
            'suffixError' => '',
            'contact_numberError' => '',
            'postal_addressError' => '',
            'resident_sinceError' => '',
            'form_typeError' => '',
            'purposeError' => '',
            'qtyError' => '',
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'postal_address' => trim($_POST['postalAddress']),
                'resident_since' => trim($_POST['residentSince']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'residency',

                'last_nameError' => '',
                'first_nameError' => '',
                'middle_nameError' => '',
                'suffixError' => '',
                'contact_numberError' => '',
                'postal_addressError' => '',
                'resident_sinceError' => '',
                'form_typeError' => '',
                'purposeError' => '',
                'qtyError' => '',
                
            ];

            if(empty($data['last_name'])){
                $data['last_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['last_name'])){
            //     $data['last_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['last_name']) < 2 ){
                $data['last_nameError'] = 'name is too short';
            }

            if(empty($data['first_name'])){
                $data['first_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['first_name'])){
            //     $data['first_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['first_name']) < 2){
                $data['first_nameError'] = 'name is too short';
            }

            if(empty($data['middle_name'])){
                $data['middle_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['middle_name'])){
            //     $data['middle_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['middle_name']) < 2){
                $data['middle_nameError'] = 'name is too short';
            }

            if($data['contact_number']){
                if(!preg_match('/^[0-9]*$/', $data['contact_number'])){
                    $data['contact_numberError'] = 'invalid number';
                }else if( strlen($data['contact_number']) != 11) {
                    $data['contact_numberError'] = 'invalid number';
                }
            }

            if(empty($data['postal_address'])){
                $data['postal_addressError'] = 'required*';
            }

            if(empty($data['purpose'])){
                $data['purposeError'] = 'required*';
            }
            if(empty($data['qty'])){
                $data['qtyError'] = 'required*';
            }
            
            if(empty($data['last_nameError']) && empty($data['first_nameError']) && empty($data['middle_nameError']) && empty($data['contact_numberError']) && empty($data['purposeError']) && empty($data['qtyError']) && empty($data['postal_addressError'])){
                            // Add the data to indigency table
                if($this->certificateModel->addResidency($data)) {
                    // getFormId - get the id of indigency and set it to $formId
                    $formId = $this->certificateModel->getFormId($data)->id;

                    if($_SESSION['account_type'] != 1){
                        $tableType = 'request';
                    }else{
                        $tableType = 'walk_in';
                    }

                    $data = [
                        'form_type' => trim($_POST['formType']),
                        'purpose' => trim($_POST['purpose']),
                        'qty' => trim($_POST['qty']),
                        'form_type' => 'Barangay Residency',
                        'formId' => $formId,
                        'table_name' => $tableType
                    ];
                        // Add the data to walk_in table
                        if($this->certificateModel->addCertificate($data)){
                    
                        // get the id of walk_in and set it to $formId
                        $formId = $this->certificateModel->getFormId($data)->id;

                        $data = [
                            'table_name' => 'residency',
                            'formId' => $formId
                        ];

                        if($this->certificateModel->addIdControl($data)){

                            $lastId = $this->certificateModel->getLastId($data);
  
                            // $_SESSION['status'] = "Submit Successfully!";
                            // $_SESSION['status_code'] = "success";
                            // session_start();

                            $this->session->setFlash('status', 'Request Submitted');
                            $this->session->setFlash('status_text', 'Please wait for approval');
                            $this->session->setFlash('status_icon', 'success');
                            header("Location: " .URLROOT . "/users/myrequest");
 
                        }  
                    }
                }else {
                    die("Something went wrong, please try again!");
                }
            }
            

        }
        $this->view('users/request_residency', $data);
    }

    public function request_id(){


        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        $data = [
            'id' => $_SESSION['user_id']
        ];
        $status = $this->userModel->getUserDetailsById($data);
        if($status->status != 'Verified'){
            $this->session->setFlash('status', 'Account not verified');
            $this->session->setFlash('status_icon', 'warning');
            $this->session->setFlash('status_text', 'Verify your account first to request cerficicate!');
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'lastName' => $_SESSION['lastname'],
            'firstName' => $_SESSION['firstname'],
            'middleName' => $_SESSION['middlename'],
            'suffix' => $_SESSION['suffix']
        ];

        $myData = $this->userModel->checkResidentList($data);

        $data = [
            'id_pic' => '',
            'last_name' => '',
            'first_name' => '',
            'middle_name' => '',
            'suffix' => '',
            'birth_date' => '',
            'contact_number' => '',
            'form_type' => '',
            'street' => '',
            'precinct_no' => '',
            'purpose' => '',
            'qty' => '',

            'id_picError' => '',
            'last_nameError' => '',
            'first_nameError' => '',
            'middle_nameError' => '',
            'suffixError' => '',
            'birth_dateError' => '',
            'contact_numberError' => '',
            'form_typeError' => '',
            'streetError' => '',
            'precinct_noError' => '',
            'purposeError' => '',
            'qtyError' => '',

            'myData' => $myData
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data =[
                'table_name' => 'clearance_id'
            ];

            $lastId = $this->certificateModel->getLastId($data);

 

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($lastId->id_no != false){
                $lastHolder = $lastId->id_no;
                $dateId = date('Y');
                

                $fourDigit = $lastHolder[0].$lastHolder[1].$lastHolder[2].$lastHolder[3];

                if($fourDigit != date('Y')){
                    $lastHolder = $lastId->id_no;
                    $dateId = date('Y') - 1;      
                }
            }else{
                $dateId = date('Y');

                echo $lastHolder = date('Y'). '-' . '00000';
            }


            $get_number = str_replace($dateId.'-', '', $lastHolder);
            $get_increase = $get_number+1;
            $get_string = str_pad($get_increase, '5', '0', STR_PAD_LEFT);

            $data = [
                'id_no' =>  date('Y').'-'.$get_string,
                'id_pic' => time() . '_' . $_FILES['idPic']['name'],
                'street' => trim($_POST['street']),
                'birth_date' => trim($_POST['birthDate']),
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'precinct_no' => trim($_POST['precinctNo']),
                'form_type' => trim($_POST['formType']),
                'purpose' => '',
                'qty' => trim($_POST['qty']),
                'table_name' => 'clearance_id',

                'id_picError' => '',
                'last_nameError' => '',
                'first_nameError' => '',
                'middle_nameError' => '',
                'suffixError' => '',
                'birth_dateError' => '',
                'contact_numberError' => '',
                'form_typeError' => '',
                'streetError' => '',
                'precinct_noError' => '',
                'purposeError' => '',
                'qtyError' => '',
                'myData' => $myData
                
            ];

            $target = '../public/img/id/' . $data['id_pic'];

            
            if(move_uploaded_file($_FILES['idPic']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }


            if(empty($data['last_name'])){
                $data['last_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['last_name'])){
            //     $data['last_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['last_name']) < 2 ){
                $data['last_nameError'] = 'name is too short';
            }

            if(empty($data['first_name'])){
                $data['first_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['first_name'])){
            //     $data['first_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['first_name']) < 2){
                $data['first_nameError'] = 'name is too short';
            }

            if(empty($data['middle_name'])){
                $data['middle_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['middle_name'])){
            //     $data['middle_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['middle_name']) < 2){
                $data['middle_nameError'] = 'name is too short';
            }

            if(empty($data['street'])){
                $data['streetError'] = 'required';
            }
            if(empty($data['birth_date'])){
                $data['birth_dateError'] = 'required';
            }

            if(empty($data['precinct_no'])){
                $data['precinct_noError'] = 'required';
            }

            if($data['contact_number']){
                if(!preg_match('/^[0-9]*$/', $data['contact_number'])){
                    $data['contact_numberError'] = 'invalid number';
                }else if( strlen($data['contact_number']) != 11) {
                    $data['contact_numberError'] = 'invalid number';
                }
            } 
            


            if(empty($data['last_nameError']) && empty($data['first_nameError']) && empty($data['middle_nameError']) && empty($data['precinct_noError']) && empty($data['birth_dateError']) && empty($data['streetError']) && empty($data['contact_numberError']) && empty($data['purposeError'])){

                if($this->certificateModel->addClearanceId($data)){

                    $formId = $this->certificateModel->getFormId($data)->id;
    
                    if($_SESSION['account_type'] != 1){
                        $tableType = 'request';
                    }else{
                        $tableType = 'walk_in';
                    }
    
                    $data = [
                        'form_type' => trim($_POST['formType']),
                        'qty' => trim($_POST['qty']),
                        'form_type' => 'Barangay Clearance-ID',
                        'formId' => $formId,
                        'table_name' => $tableType
                    ];
                    if($this->certificateModel->addCertificate($data)){
                        $formId = $this->certificateModel->getFormId($data)->id;
    
                        $data = [
                            'table_name' => 'clearance_id',
                            'formId' => $formId
                        ];
    
                        if($this->certificateModel->addIdControl($data)){
    
                            $lastId = $this->certificateModel->getLastId($data);
    
                            if($_SESSION['account_type'] != 1){
                                $this->session->setFlash('status', 'Request Submitted');
                                $this->session->setFlash('status_text', 'Please wait for approval');
                                $this->session->setFlash('status_icon', 'success');
                                header("Location: " .URLROOT . "/users/myrequest");
                            }
    
                        }  
                    }
                }else {
                    die("Something went wrong, please try again!");
                }

            }
            

        }
        $this->view('users/request_id', $data);
    }


    public function request_clearance(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 1) {
            header("Location: " .URLROOT . "/admins/index");
        }

        $data = [
            'id' => $_SESSION['user_id']
        ];
        $status = $this->userModel->getUserDetailsById($data);
        if($status->status != 'Verified'){
            $this->session->setFlash('status', 'Account not verified');
            $this->session->setFlash('status_icon', 'warning');
            $this->session->setFlash('status_text', 'Verify your account first to request cerficicate!');
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'last_name' => '',
            'first_name' => '',
            'middle_name' => '',
            'suffix' => '',
            'contact_number' => '',
            'address' => '',
            'tax_cert_no' => '',
            'form_type' => '',
            'purpose' => '',
            'qty' => '',
            
            'last_nameError' => '',
            'first_nameError' => '',
            'middle_nameError' => '',
            'suffixError' => '',
            'contact_numberError' => '',
            'addressError' => '',
            'tax_cert_noError' => '',
            'form_typeError' => '',
            'purposeError' => '',
            'qtyError' => '',
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'last_name' => trim($_POST['lastName']),
                'first_name' => trim($_POST['firstName']),
                'middle_name' => trim($_POST['middleName']),
                'suffix' => trim($_POST['suffix']),
                'contact_number' => trim($_POST['contactNum']),
                'address' => trim($_POST['address']),
                'tax_cert_no' => trim($_POST['taxCertNo']),
                'form_type' => trim($_POST['formType']),
                'purpose' => trim($_POST['purpose']),
                'qty' => trim($_POST['qty']),
                'table_name' => 'clearance',

                'last_nameError' => '',
                'first_nameError' => '',
                'middle_nameError' => '',
                'suffixError' => '',
                'contact_numberError' => '',
                'addressError' => '',
                'tax_cert_noError' => '',
                'form_typeError' => '',
                'purposeError' => '',
                'qtyError' => '',
                
            ];

            if(empty($data['last_name'])){
                $data['last_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['last_name'])){
            //     $data['last_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['last_name']) < 2 ){
                $data['last_nameError'] = 'name is too short';
            }

            if(empty($data['first_name'])){
                $data['first_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['first_name'])){
            //     $data['first_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['first_name']) < 2){
                $data['first_nameError'] = 'name is too short';
            }

            if(empty($data['middle_name'])){
                $data['middle_nameError'] = 'required*';
            // }else if(!preg_match('/^[a-zA-Z-" ]*$/',$data['middle_name'])){
            //     $data['middle_nameError'] = 'Only letters and white space allowed';
            }else if(strlen($data['middle_name']) < 2){
                $data['middle_nameError'] = 'name is too short';
            }

            if($data['contact_number']){
                if(!preg_match('/^[0-9]*$/', $data['contact_number'])){
                    $data['contact_numberError'] = 'invalid number';
                }else if( strlen($data['contact_number']) != 11) {
                    $data['contact_numberError'] = 'invalid number';
                }
            }

            if(empty($data['address'])){
                $data['addressError'] = 'required*';
            }

            if(empty($data['tax_cert_no'])){
                $data['tax_cert_noError'] = 'required*';
            }

            if(empty($data['purpose'])){
                $data['purposeError'] = 'required*';
            }
            if(empty($data['qty'])){
                $data['qtyError'] = 'required*';
            }
            
            if(empty($data['last_nameError']) && empty($data['first_nameError']) && empty($data['middle_nameError']) && empty($data['contact_numberError']) && empty($data['purposeError']) && empty($data['qtyError']) && empty($data['addressError']) && empty($data['tax_cert_noError'])){
                            // Add the data to indigency table
                if($this->certificateModel->addClearance($data)) {
                    // getFormId - get the id of indigency and set it to $formId
                    $formId = $this->certificateModel->getFormId($data)->id;

                    if($_SESSION['account_type'] != 1){
                        $tableType = 'request';
                    }else{
                        $tableType = 'walk_in';
                    }

                    $data = [
                        'form_type' => trim($_POST['formType']),
                        'purpose' => trim($_POST['purpose']),
                        'qty' => trim($_POST['qty']),
                        'form_type' => 'Barangay Clearance',
                        'formId' => $formId,
                        'table_name' => $tableType
                    ];
                        // Add the data to walk_in table
                        if($this->certificateModel->addCertificate($data)){
                    
                        // get the id of walk_in and set it to $formId
                        $formId = $this->certificateModel->getFormId($data)->id;

                        $data = [
                            'table_name' => 'clearance',
                            'formId' => $formId
                        ];

                        if($this->certificateModel->addIdControl($data)){

                            $lastId = $this->certificateModel->getLastId($data);
  
                            // $_SESSION['status'] = "Submit Successfully!";
                            // $_SESSION['status_code'] = "success";
                            // session_start();

                            $this->session->setFlash('status', 'Request Submitted');
                            $this->session->setFlash('status_text', 'Please wait for approval');
                            $this->session->setFlash('status_icon', 'success');
                            header("Location: " .URLROOT . "/users/myrequest");
 
                        }  
                    }
                }else {
                    die("Something went wrong, please try again!");
                }
            }

        }

        $this->view('users/request_clearance', $data);

    }




    // public function requestVerifyAccount() {

    //     $data =  [
    //         'username' => $_SESSION['username']
    //     ]; 
    //     $detail = $this->userModel->getUserDetails($data);

    //     if(!isLoggedIn()) {
    //         header("Location: " .URLROOT . "/users/login");
    //     }else if( $_SESSION['account_type'] == 1) {
    //         header("Location: " .URLROOT . "/admins/index");
    //     }

    //     // $data = [
    //     //     'detail' => $detail,
    //     //     'title' => 'Barangay Details',
    //     //     'brgy_name' => '',
    //     //     'address' => '',
    //     //     'mobile_number' => '',
    //     //     'brgy_captain' => '',
    //     //     'pic_logo' => ''
    //     // ];

    //     if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //         $data = [

    //             'sup_document' => 'docu.' . pathinfo($_FILES['frontId']['name'], PATHINFO_EXTENSION)
    //         ];



    //         if($data['sup_document'] == 'docu.'){
    //             $data['sup_document'] = $detail->sup_document;
    //         }else{
    //             if($oldDocument = '../public/img/' . $detail->sup_document){
    //                 unlink($oldDocument);
    //                 $target = '../public/img/' . $data['sup_document'];
    //             }
    //         }

            
    //         if(move_uploaded_file($_FILES['frontId']['tmp_name'], $target)){
    //             $_SESSION['msg'] = "Image uploaded";
    //             $_SESSION['css_class'] = "alert-success";
    //         }else {
    //             $_SESSION['msg'] = "Failed to upload";
    //             $_SESSION['css_class'] = "alert-danger";
    //         }
    //         if($this->usersModel->requestVerifyAccount($data)) {
    //             header("Location: " .URLROOT . "/users/profile");
    //         }else {
    //             die("Something went wrong, please try again!");
    //         }
            

    //     }

    //     $this->view('users/profile', $data);
    // }


    public function requestVerifyAccount($username = ''){

        $username = $_SESSION['username'];

        $data = [
            'username' => $username
        ];
        $myDetails = $this->userModel->getUserDetails($data);

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => $_SESSION['username'],
                'sup_document' => $myDetails->username .'sup.' . pathinfo($_FILES['frontId']['name'], PATHINFO_EXTENSION)
            ];

            if($data['sup_document'] == $myDetails->username.'sup.'){
                $data['sup_document'] = $myDetails->sup_document;
            }else{
                if($oldSupDocument = '../public/img/' . $myDetails->sup_document){
                    unlink($oldSupDocument);
                    $target = '../public/img/' . $data['sup_document'];
                }
            }

            if(move_uploaded_file($_FILES['frontId']['tmp_name'], $target)){
                // $_SESSION['msg'] = "Image uploaded";
                // $_SESSION['css_class'] = "alert-success";
            }else {
                // $_SESSION['msg'] = "Failed to upload";
                // $_SESSION['css_class'] = "alert-danger";
            }            

            if($this->userModel->requestVerifyAccount($data)){
                $this->session->setFlash('status', 'Verification Request Submitted!');
                $this->session->setFlash('status_text', 'Please wait for verification approval');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/users/profile");
            }
            
        }


        $data = [
            'myDetails' => $myDetails
        ];


        $this->view('users/profile', $data);
    }




    
}