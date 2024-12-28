<!-- M.S.Umair Salih  	IT23274716  -->
<!--W.A.T Nethmini  	IT23269170-->
<!-- S.A.Milinda Sandaruwan	IT23284784  -->
<!--Sayumi Halwala  	IT23280656 -->


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcrud";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>