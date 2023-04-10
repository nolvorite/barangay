<?php
    require APPROOT . '/views/includes/head.php';
?>


<?php
    require APPROOT . '/views/announcement/security.php';
    $page = 'MenuPage';
?>
<?php
    require APPROOT . '/views/announcement/header.php';
?>
<?php
 require APPROOT . '/views/includes/admin/navigation.php'; 
 ?>

<div class="container-fluid">
    <div class="main-container">
        <h1>Barangay Announcement</h1>
        <hr>

        <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModalCenter">
            Add New Announcement</button>
        <br>
        <br>

        <div class="input-images"></div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="announce_function.php" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="modal-body">
                            <div>
                                <label for="image">Upload Image</label>
                                <br>
                                <input type="file" name="faculty_images" id="faculty_images" require>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" require placeholder="Title..">
                            </div>

                            <div class="form-group">
                                <textarea type="text" name="description" class="form-control" require
                                    placeholder="Description.."></textarea>
                            </div>
                         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_product" class="btn btn-primary">Save</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="table-container">
            <?php   
                      $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);


                        $query = "SELECT * FROM announcement";
                        $query_run = mysqli_query($connection, $query);
                      
                      
                      ?>
                            <table class="table">
                                <thead>
                                    <tr class="text-center">

                                        <th scope="col">ID</th>
                                        <th scope="col">Image-1</th>
                                        <th scope="col">Title</th>
                                       
                                        <th scope="col">Description</th>
                                       
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                      if(mysqli_num_rows($query_run) >0){
                        while($row=mysqli_fetch_assoc($query_run)){
                        
                          ?>
                                    <tr class="">
                                        <td> <?php  echo $row['id'];?></td>
                                        <td> <?php echo'<img src=".../product_img/'.$row['product_image'].'" width="100px" height="100px" alt="image"/>' ?>
                                        </td>

                                        <td><?php  echo $row['title'];?></td>
                                    
                                        <td><?php  echo $row['descriptions'];?></td>
                                       
                                        <td>
                                            <form action="announce_edit.php" method="POST" class="text-center">
                                                <input type="hidden" name="edit_id" value="<?php  echo $row['id'];?>">
                                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="announce.function.php" method="post">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                        }
                       }else{
                         echo"No record found";
                       }
                       ?>

                </tbody>
            </table>

        </div>
    </div>
</div>



<script>

    $(document).ready(function(){

        $('.input-images').imageUploader();
    });

    function toggleCheckbox(box) {
        var id = $(box).attr("value");

        if ($(box).prop("checked") == true) {
            var visible = 1;
            var delete_btn = document.getElementById("form_delete_btn");
            delete_btn.classList.add("btn-danger");
            delete_btn.classList.remove("btn-primary");
        } else {
            var visible = 0;
            var delete_btn = document.getElementById("form_delete_btn");
            delete_btn.classList.add("btn-primary");
            delete_btn.classList.remove("btn-danger");
        }
        var data = {
            "search_data": 1,
            "id": id,
            "visible": visible
        };

        $.ajax({
            type: "post",
            url: "code.php",
            data: data,
            success: function(response) {

            }

        });

    }
</script>


