<?php

require '../config.php';
session_start();

if(empty($_SESSION['role']) || empty($_SESSION['email']))
{
    header('location:../login.php');
}

    $fname = $_POST['new_name'];
    $phone = $_POST['new_phone_number'];
    $email = $_POST['new_email'];
    $password = $_POST['password'];
    

        $query = "INSERT INTO administrator(admin_ID, name,  email, password, contact_No)  VALUES('','$fname', '$email', '$password','$phone')";
        
        if ( $conn -> query ($query))
    {
        echo "<script>
                    alert('Signup successful');
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