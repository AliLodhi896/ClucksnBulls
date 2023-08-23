<?php

    require_once("connection.php");
    $Id = $_GET["id"];
    
    $delete = "DELETE FROM `deals` WHERE id = '$Id'";
    mysqli_query($conn,$delete);
    header("location:manage_deals.php");

?>
