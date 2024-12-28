<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<?php

include "config.php";

$email = $phone_no = $service = '';

if(isset($_POST['submit'])) {
    
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone_no = preg_replace('/\D/', '', $_POST['phoneNo']);
    $service = implode(',', $_POST['service']); 

    if(empty($email) || empty($phone_no) || empty($service)) {
        echo "Please fill in all fields";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO purchase (email, phoneNo, service) VALUES (?,?,?)");
    $stmt->bind_param("sss", $email, $phone_no, $service);
    $stmt->execute();

    
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Document</title>

    <style>
        body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('./Image/132100371_9dafa5a4-0b32-46da-97f6-397d1999b795.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}
    </style>
</head>
<body>

<?php
  include './header.php';
  ?>
    <div class="wrapper">
        <form action="" method="post">
            <h2>Request for Services</h2>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Phone number" name="phoneNo" required>
                <i class='bx bxs-phone'></i>
            </div>
            <p>Service : <br><br></p>
            <div class="services">
                <label>
                    <input type="checkbox" id="Web Design" name="service[]" value="Web Design">
                    <label for="Web Design">Web Design</label><br>
                    <input type="checkbox" id="E-commerce" name="service[]" value="E-commerce">
                    <label for="E-commerce">E-commerce</label><br>
                    <input type="checkbox" id="Mobile Apps" name="service[]" value="Mobile Apps">
                    <label for="Mobile Apps">Mobile Apps</label><br>
                </label>
                <label>
                    <input type="checkbox" id="Software Development" name="service[]" value="Software Development">
                    <label for="Software Development">Software Development</label><br>
                    <input type="checkbox" id="Analysis" name="service[]" value="Analysis">
                    <label for="Analysis">Analysis</label><br>
                    <input type="checkbox" id="Social Media Marketing" name="service[]" value="Social Media Marketing">
                    <label for="Social Media Marketing">Social Media Marketing</label><br>
                </label>
            </div>
            <br>
            <button type="submit" name="submit" class="btn">Submit</button>
            <div class="register-link">
                <p><br>Need to update file?<a href="view.php">View Details</a></p>
                
            </div>
        </form>
    </div>

</body>
</html>
