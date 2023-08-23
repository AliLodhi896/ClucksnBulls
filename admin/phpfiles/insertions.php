<?php

    require_once("../connection.php");


     // create_menu.php

     if(isset($_POST["create_deals_btn"]))
     {
         $deal_name = $_POST["deal_name"];
         $description = $_POST["description"];
         $deal_number = $_POST["deal_number"];
         $long_description = $_POST["long_description"];
         
         
         
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      $insert = "INSERT INTO `deals`( `long_description`,`deal_number`,`deal_name`, `deal_description`,`deal_image`) VALUES ('$long_description','$deal_number','$deal_name','$description','$target_file')";
                     $excec = mysqli_query($conn,$insert);
                     if($excec)
                     {
                         ?>
                             <script>
                                 alert("Record has been Saved");window.location.href = "../create_deals.php";
                             </script>
                         <?php
                     }
                     else
                     {
                         echo mysqli_error($conn);
                     }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
                // echo $target_file; die;
  
                
          
 
         
         
 
     }













     if(isset($_POST["create_menu_btn"]))
     {
         $dish_name = $_POST["dish_name"];
         $description = $_POST["description"];
         $price = $_POST["price"];
         $category_id = $_POST["category_id"];
         
         
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                      $insert = "INSERT INTO `menu`( `name`, `description`, `price`,`image`,`category_id`) VALUES ('$dish_name','$description','$price','$target_file','$category_id')";
                     $excec = mysqli_query($conn,$insert);
                     if($excec)
                     {
                         ?>
                             <script>
                                 alert("Record has been Saved");window.location.href = "../create_menu.php";
                             </script>
                         <?php
                     }
                     else
                     {
                         echo mysqli_error($conn);
                     }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
                // echo $target_file; die;
  
                
          
 
         
         
 
     }




// 


     if(isset($_POST["create_category_btn"]))
     {
         $category_name = $_POST["category_name"];
         $category_description = $_POST["category_description"];

                     $insert = "INSERT INTO `categories`( `category_name`, `category_description`) VALUES ('$category_name','$category_description')";
                     $excec = mysqli_query($conn,$insert);
                     if($excec)
                     {
                         ?>
                             <script>
                                 alert("Record has been Saved");window.location.href = "../create_category.php";
                             </script>
                         <?php
                     }
                     else
                     {
                         echo mysqli_error($conn);
                     }

                // echo $target_file; die;  
                
          
 
         
         
 
     }











     // add_jobs_btn.php

     if(isset($_POST["add_jobs_btn"]))
     {
            $job_name = $_POST["job_name"];

            $target_dir = "../upload/";
            $job_image = $_FILES['job_image']['name'];
            $target_file = $target_dir . basename($job_image);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $filewithnewname = date("Ymdis")."CAT.".$imageFileType;

            $image_size = $_FILES['job_image']['size'];
            $image_type = $_FILES['job_image']['type'];
            $image_tmp = $_FILES['job_image']['tmp_name'];
        

            if($image_size <= 5000000) /*image 5mb*/
            {
                if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/jpeg" || strtolower($image_type) == "image/png" || strtolower($image_type) == "image/jfif")
                {

                    $insert = "INSERT INTO `categories`(`cat_name`, `cat_image`) VALUES ('$job_name','$filewithnewname')";
                    $excec = mysqli_query($conn,$insert);
                    if($excec)
                    {
                        move_uploaded_file($image_tmp,$target_dir.$filewithnewname);
                        ?>
                            <script>
                                alert("Record has been Inserted");
                                window.location.href = "../add_jobs.php";
                            </script>
                        <?php
                    }
                    else
                    {
                        echo mysqli_error($conn);
                    }

                }
                else
                {
                    ?>
                    <script>
                        alert("Failed || Image type should be jpg, jpeg, jfif and png");
                        window.location.href = "../add_jobs.php";
                    </script>
                    <?php
                }

            }
            else
            {
                ?>
                <script>
                    alert("Failed || Image size should be less than or equal to 5mb");
                    window.location.href = "../add_jobs.php";
                </script>
                <?php
            }
         
 
     }



?>