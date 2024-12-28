<!--W.A.T Nethmini  	IT23269170-->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "dbcrud"; 
    
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
   
    $stmt = $conn->prepare("INSERT INTO contact (firstName, lastName, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $phone, $message);
    
  
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    if ($stmt->execute()) {
      echo "<script>alert('Please fill in all fields');</script>";
      
    } else {
        echo "Error: " . $stmt->error;
    }
    
    
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/contuctus.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
<?php include './header.php'; ?>
<div class="spacer"></div>
<section class="contact-section">
    <div class="contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>Contact Us</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="text">We would love to respond to your queries and help you succeed.
            Feel free to get in touch with us
        </p>
    </div>
    <div class="contact-body">
        <div class="contact-info">
            <div>
                <span><i class="fas fa-mobile-alt"></i></span>
                <span>Phone No.</span>
                <span class="text">+94 777 657 9234</span>
            </div>
            <div>
                <span><i class="fas fa-envelope-open"></i></span>
                <span>E-mail</span>
                <span class="text">nobleads@company.com</span>
            </div>
            <div>
                <span><i class="fas fa-map-marker-alt"></i></span>
                <span>Address</span>
                <span class="text">335 1/1 Old Moor Street, 12,Colombo</span>
            </div>
            <div>
                <span><i class="fas fa-clock"></i></span>
                <span>Opening Hours</span>
                <span class="text">Monday - Friday (9:00 AM to 5:00 PM)</span>
            </div>
        </div>
        <div class="contact-form">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div>
                    <input type="text" class="form-control" placeholder="First Name" name="firstName">
                    <input type="text" class="form-control" placeholder="Last Name" name="lastName">
                </div>
                <div>
                    <input type="email" class="form-control" placeholder="E-mail" name="email">
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                </div>
                <textarea rows="5" placeholder="Message" class="form-control" name="message"></textarea>
                <input type="submit" class="send-btn" value="Send Message">
            </form>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<?php include './footer.php'; ?>
</body>
</html>
