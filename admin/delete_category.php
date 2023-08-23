<?php

    require_once("connection.php");
    $Id = $_GET["id"];
    
    $delete = "DELETE FROM `categories` WHERE id = '$Id'";
    mysqli_query($conn,$delete);
    header("location:manage_category.php");

?>
