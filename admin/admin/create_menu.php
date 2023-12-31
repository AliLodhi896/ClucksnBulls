<?php
require_once("header.php");

?>







 <!-- MAIN-CONTENT -->
 <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Create Menu</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Create Menu</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW OPEN -->
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Create</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="phpfiles/insertions.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-row">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Dish name</label>
                                                        <input type="text" class="form-control" name="dish_name" id="validationDefault01" value="" required>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Description</label>
                                                        <input type="text" class="form-control" name="description" id="validationDefault01" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault02">Price</label>
                                                        <input type="text" class="form-control" name="price" id="validationDefault02" value="" required>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="formFileSm" class="form-label">Upload Image</label>
                                                      <input class="form-control form-control-sm" name="fileToUpload" id="formFileSm" type="file">
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <div class="controls">
                                                      <select name="category_id" class="form-control" >
                                                        <?php 
                                                        include('connection.php');
                                                        $sql = "SELECT `id`, `category_name` FROM `categories`";
                                                        $execute = mysqli_query($conn,$sql);
                                                        while($row = mysqli_fetch_array($execute)){
                                                           echo "<option value={$row['id']}>{$row['category_name']}</option>"; 
                                                        }
                                                        ?>  
                                                      </select>
                                                    </div>
                                                 </div>
                                                
                                            
                                                <button class="btn btn-primary" type="submit" name="create_menu_btn">Create</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                            <!-- ROW CLOSED -->
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- MAIN-CONTENT CLOSED -->
            </div>









            <script>
        function myFunction() {
        var x = document.getElementById("validate");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
        </script>






<?php
require_once("footer.php");
?>