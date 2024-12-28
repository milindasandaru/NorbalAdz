<?php
    require 'config.php';
    session_start();
    if(empty($_SESSION['role']) || empty($_SESSION['email'])){
        header('location:login.php');
    }

    $role = $_SESSION['role'];
    $email = $_SESSION['email'];

    $delete = $_POST["delete"];

    if($delete == 'delete')
    {
        $delete2 = "DELETE FROM registered_user WHERE Email = '$email';";

    mysqli_query($con,$delete2);

    if ( $con -> query ($delete2))
    {
        echo "<script>
                    alert('Account deleted Successfully');
              </script>";
        header ("Location:../index.php");   
    }
    else
    {
        echo "<script>
                alert('Error.$con->error;');
              </script>";
    }
    session_unset();
    session_destroy();
    }
    
?>