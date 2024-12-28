<!-- M.S.Umair Salih  	IT23274716  -->

<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dbcrud"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['newsletterSubmit'])) {
     
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format";
      } else {
         
          $email = $conn->real_escape_string($email);

         
          $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
  }
}



$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NobelAdz</title>
    <meta name="title" content="BLOOMARK.com - Online Advertising Agency">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./Image/favicon.png"> 
</head>

<body>
<footer>
  <div class="footer-cover-image" style="background-image: url('./Image/backround_footer.png');"></div>
  <div class="footer-container">
    <div class="footer-row">
      <div class="footer-column">
        <img src="./Image/Norbaladz_footerlogo.png" alt="Norbal Adz logo" class="footer-logo">
        <p class="footer-slogan" >Unlock your brand's full potential with our cutting-edge digital marketing agency.</p>
      </div>
      <div class="footer-column">
        <h5>About</h5>
        <ul>
  <li><a href="./Ourstory.php" style="color: white;">Our Story</a></li>
  <li><a href="./web_design.php" style="color: white;">Services</a></li>
</ul>

      </div>
      <div class="footer-column">
        <h5>Useful Links</h5>
        <ul>
  <li><a href="./privacy.php" style="color: white;">Cookies Policy</a></li>
  <li><a href="./Term & Condition.php" style="color: white;">Terms of Services</a></li>
  <li><a href="./help_page.php" style="color: white;">FAQs</a></li>
  <li><a href="./edit.php" style="color: white;">Edit Inquiry</a></li>
  <li><a href="./delete.php" style="color: white;">Delete Inquiry</a></li>
  <li><a href="./read_inquary.php" style="color: white;">Read Inquiry</a></li>

</ul>

      </div>
      <div class="footer-column">
        <h5>Newsletter</h5>
        <form id="newsletterForm" method="post" action="subscribe.php">
    <div class="footer-mail-wrapper">
        <input type="email" name="email" placeholder="yourmail@gmail.com" required>
        <button type="submit">Subscribe</button>
        <i class="fas fa-envelope-circle-check"></i>
    </div>
</form>



        <h5>Follow us</h5>
        <div class="social-bar">
          <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
          <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter-square"></i></a>
          <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram-square"></i></a>
          <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
          <a href="https://wa.me/" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp-square"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-row">
      <p class="footer-copyright">&copy; Copyright 2024. All rights reserved. Developed by MLB_06.02_10 Group members</p>
    </div>
  </div>
</footer>
</body>

</html>