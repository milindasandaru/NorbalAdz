<?php
require 'config.php';
session_start();
if(empty($_SESSION['role']) || empty($_SESSION['email']))
{
    header('location:login.php');
}
$role = $_SESSION['role'];
$email = $_SESSION['email'];

$userid_sql = mysqli_query($conn,"SELECT * FROM registered_user WHERE Email = '$email';");

$result = mysqli_fetch_assoc($userid_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="images/logotransparent.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./css/profilepage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>

body{
    justify-content: center;
    text-align: center;
    align-items: center;
    min-height: 100vh;
    background: url('15151445_5559852.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}
    </style>

</head>

<body>

    <div class="profile-details">
        <img src="./Image/profilepic.webp">
        <?php
        echo "<ul>
            <li>
                <b>User ID : </b>".$result['User_Id']."
            </li>
            <li>
            <b>User Name : </b>".$result['Name']."
            </li>
            <li>
            <b>Email : </b>".$result['Email']."
            </li>
            <li>
            <b>Address : </b>".$result['Address']."
            </li>
            <li>
            <b>Contact number : </b>".$result['Phone_number']."
            </li>
        </ul>";
        ?>
        <div class="signout">
            <form action="signout.php" method="post">
                <p> <b>Sign out from your account</b></p>
                <input type="submit" class="signout-btn" name="signout" value="signout">
            </form>
        </div>
    </div>


    <div class="edit-details">

        <form action="edituser.php" method="post" onsubmit="return validatePassword()">
            <h2>Edit Account Details</h2><br>
            <span>Enter new account details</span><br>

            <div class="infield">
                <input type="text" placeholder=" New Name" name="new_name" />

            </div>
            <div class="infield">
                <input type="text" placeholder=" New Address" name="new_address" />

            </div>
            <div class="infield">
                <input type="tel" placeholder=" New Phone Number" name="new_phone_number" />

            </div>
            <div class="infield">
                <input type="password" placeholder="New Password" name="new_password" id="password" />

            </div>
            <div class="infield">
                <input type="password" placeholder="Re-Enter New Password" name="new_password2" id="confirmPassword" />

            </div>
            <script>
                function validatePassword() {
                    var password = document.getElementById("password").value;
                    var confirmPassword = document.getElementById("confirmPassword").value;

                    if (password.length < 8) {
                        alert("Password must be at lease 8 characters long");
                        return false;
                    }
                    if (password !== confirmPassword) {
                        alert("Passwords do not match");
                        return false;
                    }
                    return true;
                }
            </script>
            <button type="submit">Save Changes</button>
        </form>

    </div>


    </div>

    <div class="del">
        <form action="deleteuser.php" method="post">
            <p> Are you sure you want to delete your account?</p>
            <input type="submit" class="del-btn" name="delete" value="delete">
        </form>
    </div>
    </div>
</body>

</html>