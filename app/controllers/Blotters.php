<?php 
class Blotters extends Controller {

    public $session;
    public function __construct() {
        $this->blotterModel = $this->model('Blotter');
        $this->adminModel = $this->model('Admin');
        $this->session = new Session;
    }

    public function index() {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 0) {
            header("Location: " .URLROOT . "/users/index");
        }

        $blotterRecords = $this->blotterModel->findAllRecords();

        $data = [
            'blotterRecords' => $blotterRecords
        ];

        $this->view('blotters/index', $data);
    }


    public function modalAddBlotter()  {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 0) {
            header("Location: " .URLROOT . "/users/index");
        }


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'complainant' => trim($_POST['complainant']),
                'accusation' => trim($_POST['accusation']),
                'status' => trim($_POST['status']),
                'date_time' => trim($_POST['date_time']),
                // 'document' => date('Y-m-d-H-i-s').'.' . pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION),
                'document' => time() . '_' . $_FILES['document']['name'],

            ];

            $target = '../public/img/blotter/' . $data['document'];

            if(move_uploaded_file($_FILES['document']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }

            if($this->blotterModel->addBlotter($data)){
                $this->session->setFlash('status', 'Added Successfully!');
                $this->session->setFlash('status_icon', 'success');
                header('location: '. URLROOT . '/blotters/index');
            }else {
                die("Something went wrong, please try again!");
            } 
        }
        
    }


    public function view_blotter($id = '') {
        $data = [
            'id' => $id,
        ];


        $blotter = $this->blotterModel->findBlotterById($data);

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'blotter' => $blotter,
            
        ];
         echo json_encode($blotter);
    }

    public function modalEditBlotter()  {

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 0) {
            header("Location: " .URLROOT . "/users/index");
        }


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'id' => trim($_POST['editBlotterId']),
            ];
            $blotterDetails = $this->blotterModel->findBlotterById($data);

            $data = [
                'id' => trim($_POST['editBlotterId']),
                'complainant' => trim($_POST['complainant']),
                'accusation' => trim($_POST['accusation']),
                'document' => time() . '_' . $_FILES['document']['name'],
                'status' => trim($_POST['status']),
                'date_time' => trim($_POST['date_time']),
            ];

            $target = '../public/img/blotter/' . $data['document'];
            if(strlen($data['document']) < 12){
                $data['document'] = $blotterDetails->document;
            }      



            if($this->blotterModel->editBlotter($data)){
                if(move_uploaded_file($_FILES['document']['tmp_name'], $target)){
                    $_SESSION['msg'] = "Image uploaded";
                    $_SESSION['css_class'] = "alert-success";
                }else {
                    $_SESSION['msg'] = "Failed to upload";
                    $_SESSION['css_class'] = "alert-danger";
                }
                $this->session->setFlash('status', 'Update Successfully!');
                $this->session->setFlash('status_icon', 'success');
                header('location: '. URLROOT . '/blotters/index');
            }else {
                die("Something went wrong, please try again!");
            } 
        }
        
    }


    public function generate_blotters(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] == 0) {
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'title' => 'Home page',
        ];

        $blotters = $this->blotterModel->findAllRecords();
        $details = $this->adminModel->getBrgyDetail();

        $data = [
            'blotters' => $blotters,
            'detail' => $details,
        ];

        



        $this->view('blotters/generate_blotters', $data);
    }

}




?>