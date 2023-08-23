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
                                <h1 class="page-title">Category Edit</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Category Edit</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW OPEN -->
                            <div class="row">

                            <?php

                                    require_once("connection.php");
                                    $Id = $_GET["id"];
                                    $select = "SELECT * FROM `categories` WHERE id = '$Id'";
                                    $exec = mysqli_query($conn,$select);
                                    $rec = mysqli_fetch_array($exec);
                                    
                                   

                            ?>

                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="POST">
                                            <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Id</label>
                                                        <input type="text" class="form-control" id="validationDefault01" value="<?php echo "$rec[id]" ?>" readonly>
                                                    </div>
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault02">Name</label>
                                                        <input type="text" class="form-control" name="category_name" id="validationDefault02" value="<?php echo "$rec[category_name]" ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="validationDefault01">Description</label>
                                                        <input type="text" class="form-control" name="category_description" id="validationDefault01" value="<?php echo "$rec[category_description]" ?>" >
                                                    </div>
                                                    
                                                </div>
                                                
                                                <button class="btn btn-primary" type="submit" name="update_btn_category">Update </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php

                                        if(isset($_POST["update_btn_category"]))
                                        {
                                            $name = $_POST["category_name"];
                                            $description = $_POST["category_description"];
                                            $price = $_POST["price"];
                                        
                                                $update = "UPDATE `categories` SET `category_name`='$name',`category_description`='$description'WHERE id = '$Id'";
                                                $update_excec = mysqli_query($conn,$update);
                                                if($update_excec)
                                                {
                                                    ?>
                                                        <script>
                                                            alert("Record has been updated");window.location.href = "manage_category.php";
                                                        </script>
                                                    <?php
                                                }
                                                else
                                                {
                                                    echo mysqli_error($conn);
                                                }  
                                           
                                            
                                            
                                            
                                        }

                                ?>
                                
                            </div>
                            <!-- ROW CLOSED -->
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- MAIN-CONTENT CLOSED -->
            </div>

















<?php
require_once("footer.php");
?>