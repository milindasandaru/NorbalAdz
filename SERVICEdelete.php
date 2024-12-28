<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<?php
include "config.php";

if(isset($_GET['phoneNo'])) {
    $phoneNo = $_GET['phoneNo'];

    $sql = "DELETE FROM `purchase` WHERE `phoneNo`='$phoneNo'";

    $result = $conn->query($sql);

    if($result == TRUE) {
        
        echo "Record deleted successfully.";
        
        echo '<script>setTimeout(function(){ window.location.href = "view.php"; }, 2000);</script>';
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
}
?>
