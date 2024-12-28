
<?php

    require 'config.php';
    $email = $_POST["emailUsername"];
    $password = $_POST["password"];

    $user = "SELECT * from user where (email = '$email' || userName ='$email') AND password = '$password'";
    $user_result = mysqli_query($conn,$user);
    $count_user = mysqli_num_rows($user_result);

    if($count_user == 1)
    {
        session_start();
        $_SESSION['role'] = 'user';
        $_SESSION['email'] =  $email;
        header("Location:Home_Page.php");
        exit;
    }


    $admin = "SELECT * FROM administrator WHERE email = '$email' AND password = '$password'" ;
    $admin_result = mysqli_query($conn, $admin);
    $count_admin = mysqli_num_rows($admin_result);

    if($count_admin == 1)
    {
        session_start();
        $_SESSION['role'] = 'admin';
        $_SESSION['email'] =  $email;
        header("Location: Adminpage/admin.php");
        exit;
    }

    else
    {
        echo '<script> 
                window.location.href="login.php";
                alert("Invalid username or password!");
              </script>';
            }

?>