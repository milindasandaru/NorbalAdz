<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<?php
include "config.php";

if(isset($_POST['update'])) {

    $email = $_POST['email'];
    $phone_no = $_POST['phoneNo'];
    $services = $_POST['service'];

    $service = implode(',', $services);

    $sql = "UPDATE purchase SET phoneNo='$phone_no', service='$service' WHERE email='$email'";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "<script>alert('Record Updated Successfully');</script>";
    } else {
        echo "<script>alert('Error : ". $sql . "\\n" . $conn->error."');</script>";
    }
}

if(isset($_GET['email'])) {
    $email = $_GET['email'];

    $sql = "SELECT * FROM purchase WHERE email='$email'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $email = $row['email'];
            $phone_no = $row['phoneNo'];
            $services = explode(',', $row['service']);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/form.css">

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
        <form action="SERVICEUpdate.php" method="POST"> 
            <h2>Update User</h2>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Phone number" name="phoneNo" value="<?php echo $phone_no; ?>" required>
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
            <button type="submit" class="btn" name="update">Update</button>
            <div class="register-link">
                <p><br>Need to see updated file?<a href="view.php">View Details</a></p>
                
            </div>
        </form>
    </div>

</body>
</html>
