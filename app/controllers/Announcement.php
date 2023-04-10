<?php 
class Announcement extends Controller {

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

        //return "ayy lmao";

        $this->view('announcement/index', []);
    }



    public function add_product() {

    if(isset($_POST['add_product'])){

        $title = $_POST['title'];
        $price = $_POST['price'];
    
        $description = $_POST['description'];
        $faculty_images = $_FILES["faculty_images"]['name'];
        $faculty_images_2 = $_FILES["faculty_images_2"]['name'];
    
    
       
            $query = "INSERT INTO announcement (title,price,product_image,descriptions,modal_images)
             VALUES('$title', '$price','$faculty_images','$description','$faculty_images_2')";
    
            $query_run = mysqli_query($connection, $query);
            if($query_run){
                move_uploaded_file($_FILES["faculty_images"]["tmp_name"], ".../product_img/".$_FILES["faculty_images"]["name"]);
                move_uploaded_file($_FILES["faculty_images_2"]["tmp_name"], ".../product_img/".$_FILES["faculty_images_2"]["name"]);
                header('location: index.php?alert=success');
            }else{
                header('location: index.php?error=didntsubmit');
            }
        }   
    
    }
    
    public function updatebtn() {

    if(isset($_POST['updatebtn'])){
        $id = $_POST['edit_id'];
        $edit_title = $_POST['edit_title'];
        $edit_price = $_POST['edit_price'];
        $edit_description = $_POST['edit_description'];
        $edit_faculty_images = $_FILES["faculty_images"]['name']; 
        $edit_faculty_images_2 = $_FILES["edit_faculty_images_2"]['name']; 
        
      
            $query = "UPDATE announcement SET 
            title='$edit_title', 
            price='$edit_price',
            descriptions = '$edit_description',
            product_image='$edit_faculty_images',
            modal_images='$edit_faculty_images_2'
            WHERE id='$id'";
            $query_run = mysqli_query($connection,$query);
            if($query_run){
                    move_uploaded_file($_FILES["faculty_images"]["tmp_name"], "../product_img/".$_FILES["faculty_images"]["name"]);
                    move_uploaded_file($_FILES["edit_faculty_images_2"]["tmp_name"], "../product_img/".$_FILES["edit_faculty_images_2"]["name"]);
     
                    header('location: index.php?alert=dataupdated');
              
            }else{
               
                header('location: index.php?alert=didntdataupdated');
            }
        
    }
}
public function delete_btn() {

    if(isset($_POST['delete_btn'])){
        $id = $_POST['delete_id'];
        $query = "DELETE  FROM announcement WHERE id ='$id'";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            header('location: index.php?alert=datadeleted');
           
        }else{
          
            header('location: index.php?alert=error');
        }
    }

}
}

