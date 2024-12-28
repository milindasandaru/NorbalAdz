<?php
    require 'config.php';

    session_start();
    if(empty($_SESSION['role']) || empty($_SESSION['email'])){
        header('location:login.php');
    }

    $role = $_SESSION['role'];
    $email = $_SESSION['email'];

    $name = $_POST["new_name"];
    $address = $_POST["new_address"];
    $phone_no = $_POST["new_phone_number"];
    $password1 = $_POST["new_password"];

    /*$edit_name = "UPDATE registered_user SET Name = '$name' WHERE Email = '$email';";
    mysqli_query($con,$edit_name);
    $edit_address = "UPDATE registered_user SET Address = '$address' WHERE Email = '$email';";
    mysqli_query($con,$edit_address);
    $edit_phone = "UPDATE registered_user SET Phone_number = '$phone_no' WHERE Email = '$email';";
    mysqli_query($con,$edit_phone);
    $edit_password = "UPDATE registered_user SET Password = '$password1' WHERE Email = '$email';";
    mysqli_query($con,$edit_password);*/

    $edit = "UPDATE registered_user SET Name = '$name' , Address = '$address' ,Phone_number = '$phone_no', Password = '$password1' WHERE Email = '$email';";
    mysqli_query($con,$edit);

    if ( $con -> query ($edit))
    {
        echo "<script>
                    alert('Updated Successfully');
              </script>";
        header ("Location:../index.php");   
    }
    else
    {
        echo "<script>
                alert('Error.$con->error;');
              </script>";
    }
    

?>