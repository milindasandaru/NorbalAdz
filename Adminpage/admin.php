<?php


require '../config.php';
session_start();

if(empty($_SESSION['role']) || empty($_SESSION['email']))
{
    header('location:../login.php');
}


$role = $_SESSION['role'];
$email = $_SESSION['email'];

$admin_sql = mysqli_query($conn,"SELECT * FROM administrator WHERE email = '$email';");

$result = mysqli_fetch_assoc($admin_sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link rel="stylesheet" href = "admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="main">
    <hr>
    

    <div class="profile-details">
        <img src="images/account.png">
        <?php
        echo "<ul>
            <li>
                <b>Admin ID : </b>".$result['admin_ID']."
            </li>
            <li>
            <b>Admin Name : </b>".$result['name']."
            </li>
            <li>
            <b>Email : </b>".$result['email']."
            </li>
            <li>
            <b>Contact number : </b>".$result['contact_No']."
            </li>
        </ul>";
        ?>
        <div class="signout">
        <form action = "../signout.php" method = "post">
        <p> <b>Sign out from your account</b></p>
        <input type = "submit" class = "signout-btn" name = "signout" value= "signout">
        </form>
        </div>
    </div>
    <hr>
    <br><br><br>
    <div class="inquries">
        <center><h2>Inquries</h2></center>
        <?php
            
$sql = "SELECT * FROM inquiry";

$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    $data = [];

    
    while($row = $result2->fetch_assoc()) {
        $data[] = $row;
    }
}
echo "<table><tr><th>Name</th><th>Contact number</th><th>description</th></tr>";
foreach ($data as $inquiry) {
    echo "<tr><td>".$inquiry['Name']."</td><td>".$inquiry['phone_number']."</td><td>".$inquiry['description']."</td></tr>";
}
       echo "</table>" ?>

    </div>
<hr>
    <br><br><br>
    <div class="inquries">
        <center><h2>Admin Accounts</h2></center>
        <?php
            
$sql2 = "SELECT * FROM administrator";

$result3 = $conn->query($sql2);

if ($result3->num_rows > 0) {
    $data2 = [];

    
    while($row2 = $result3->fetch_assoc()) {
        $data2[] = $row2;
    }
}
echo "<table><tr><th>Admin ID</th><th>Name</th><th>Email</th><th>Contact Number</th></tr>";
foreach ($data2 as $admin) {
    echo "<tr><td>".$admin['admin_ID']."</td><td>".$admin['name']."</td><td>".$admin['email']."</td><td>".$admin['contact_No']."</tr>";
}
       echo "</table>" ?>

    </div>
    <hr>
    <div class="add-admin">

            <form action="inputadmin.php" method="post" onsubmit="return validatePassword()">
               <h2>Add Admin Account</h2>
               <span>Enter admin details</span>

               <div class="infield">
                <input type="text" placeholder="User Name" name="new_name"/>
               </div>
               <div class="infield">
                <input type="mail" placeholder="Email" name="new_email"/>
               </div>
               <div class="infield">
                <input type="tel" placeholder="Phone Number" name="new_phone_number"/>
               </div>
               <div class="infield">
                <input type="password" placeholder="Password" name="password" id="password"/>
               </div>
               <div class="infield">
                <input type="password" placeholder="Re-Enter Password" name="new_password2" id="confirmPassword"/>
               </div>
               <script>
                function validatePassword()
                {
                    var password = document.getElementById ("password").value;
                    var confirmPassword = document.getElementById ("confirmPassword").value;

                    if (password.length < 8)
                    {
                        alert("Password must be at least 8 characters long");
                        return false;
                    }
                    if (password !== confirmPassword) 
                    {
                        alert("Passwords do not match");
                        return false;
                    }
                    return true;
                }
            </script>
            <button id="submit">Save Changes</button>
            
        </form>
           </div>

           <hr>
    <div class="add-admin">

            <form action="editadmin.php" method="post" onsubmit="return validatePassword()">
               <h2>Edit Current Admin Account</h2>
               <span>Enter new admin details</span>

               <div class="infield">
                <input type="text" placeholder="User Name" name="new_name"/>
               </div>
               <div class="infield">
                <input type="tel" placeholder="Phone Number" name="new_phone_number"/>
               </div>
               <div class="infield">
                <input type="password" placeholder="Password" name="password" id="password2"/>
               </div>
               <div class="infield">
                <input type="password" placeholder="Re-Enter Password" name="new_password2" id="confirmPassword2"/>
               </div>
               <script>
                function validatePassword()
                {
                    var password2 = document.getElementById ("password2").value;
                    var confirmPassword2 = document.getElementById ("confirmPassword2").value;

                    if (password2.length < 8)
                    {
                        alert("Password must be at least 8 characters long");
                        return false;
                    }
                    if (password2 !== confirmPassword2) 
                    {
                        alert("Passwords do not match");
                        return false;
                    }
                    return true;
                }
            </script>
            <button id="submit">Save Changes</button>
            
        </form>
           </div>

</div>
<?php

?>       
</body>
</html>

