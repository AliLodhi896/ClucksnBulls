<!-- connection open -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wetecsol_clucksnbulls";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!-- End connection open -->