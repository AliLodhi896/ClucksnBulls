<?php

$Host = 'localhost';
$DB_DATABASE='wetecsol_clucksnbulls';
$DB_USERNAME='wetecsol_clucksnbulls';
$DB_PASSWORD='clucksnbulls';

$conn = mysqli_connect($Host, $DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>