<?php 

    require APPROOT . '/views/announcement/security.php';
  

  
if(isset($_POST['add_product'])){

    $title = $_POST['title'];
    $price = $_POST['price'];

    $description = $_POST['description'];
    $faculty_images = $_FILES["faculty_images"]['name'];
   

   
        $query = "INSERT INTO announcement (title,price,product_image,descriptions,modal_images)
         VALUES('$title', '$price','$faculty_images','$description')";

        $query_run = mysqli_query($connection, $query);
        if($query_run){
            move_uploaded_file($_FILES["faculty_images"]["tmp_name"], "../product_img/".$_FILES["faculty_images"]["name"]);
            
            header('location: index.php?alert=success');
        }else{
            header('location: index.php?error=didntsubmit');
        }
    }   




if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $edit_title = $_POST['edit_title'];
    $edit_price = $_POST['edit_price'];
    $edit_description = $_POST['edit_description'];
    $edit_faculty_images = $_FILES["faculty_images"]['name']; 
    
    
        $query = "UPDATE announcement SET 
        title='$edit_title', 
        price='$edit_price',
        descriptions = '$edit_description',
        product_image='$edit_faculty_images',
        
        WHERE id='$id'";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
                move_uploaded_file($_FILES["faculty_images"]["tmp_name"], "../product_img/".$_FILES["faculty_images"]["name"]);
                
 
                header('location: index.php?alert=dataupdated');
          
        }else{
           
            header('location: index.php?alert=didntdataupdated');
        }
    
}

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
 

