<?php 
  
    require_once("../connection.php");
         $name = $_POST["name"];
         $email = $_POST["email"];
         $message = $_POST["message"];
         
         $insert = "INSERT INTO `reviews`( `review_by`, `email`, `review`) VALUES ('$name','$email','$message')";
                     $excec = mysqli_query($conn,$insert);
                     if($excec)
                     {
                         ?>
                             <script>
                                 alert("Record has been Saved");window.location.href = "../index.php";
                             </script>
                         <?php
                     }
                     else
                     {
                         echo mysqli_error($conn);
                     }
  

?>