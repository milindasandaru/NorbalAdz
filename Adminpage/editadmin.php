<?php

require '../config.php';
session_start();

if(empty($_SESSION['role']) || empty($_SESSION['email']))
{
    header('location:../login.php');
}
    $email = $_SESSION['email'];
    $fname = $_POST['new_name'];
    $phone = $_POST['new_phone_number'];
    $password = $_POST['password'];
    

        $query = "UPDATE administrator SET  name = '$fname', password = '$password', contact_No = '$phone' WHERE email = '$email'";
        
        if ( $conn -> query ($query))
    {
        echo "<script>
                    alert('Updated successful');
              </script>";
        header ("Location:admin.php");   
    }
    else
    {
        echo "<script>
                alert('Error.$conn->error;');
              </script>";
}

?>