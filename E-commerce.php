<!-- M.S.Umair Salih  	IT23274716  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
    <link rel="stylesheet" href="./css/servicepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<?php
  include './header.php';
  ?>
<div class="spacer"></div>    
    <nav class="main-nav" id="primary-nav">
    <ul>
            <li><a href="./web_design.php">Web Design</a></li>
            <li><a href="./E-commerce.php" class="active">E-commerce</a></li>
            <li><a href="./PPC.php">PPC</a></li>
            <li><a href="./Display Adv.php" >Display Advertising</a></li>
            <li><a href="./Content.php">Content Marketing</a></li>
            <li><a href="./Social Media Mar.php">Social Media Marketing</a></li>
        </ul>
    </nav>
    <div class="mainhead">
        <h1>E-commerce</h1>
    </div>
    <div class="container">
        <div class="text-box">
            <img src="./Image/e1.png" alt="Image description" class="image">
            <p class="text">Product Listing Ads (PLAs) Management</p>
            <button class="read-more">Read More</button>
            <div class="details">
                <p>Buying and selling online, including retail stores, marketplaces, and electronic payments.</p>
            </div>
        </div>

        <div class="text-box">
            <img src="./Image/e2.png" alt="Image description" class="image">
            <p class="text">Dynamic Remarketing Campaigns </p>
            <button class="read-more">Read More</button>
            <div class="details">
                <p>Buying and selling online, including retail stores, marketplaces, and electronic payments.</p>
            </div>
        </div>

        <div class="text-box">
            <img src="./Image/e3.jpg" alt="Image description" class="image">
            <p class="text">Shopping Feed Optimization </p>
            <button class="read-more">Read More</button>
            <div class="details">
                <p>Buying and selling online, including retail stores, marketplaces, and electronic payments.</p>
            </div>
        </div>

        <div class="text-box">
            <img src="./Image/e3.png" alt="Image description" class="image">
            <p class="text">Promotion and Discount Campaigns </p>
            <button class="read-more">Read More</button>
            <div class="details">
                <p>Buying and selling online, including retail stores, marketplaces, and electronic payments.</p>
            </div>
        </div>

        <div class="text-box">
            <img src="./Image/e5.jpg" alt="Image description" class="image">
            <p class="text">Cross-Channel Advertising </p>
            <button class="read-more">Read More</button>
            <div class="details">
                <p>Buying and selling online, including retail stores, marketplaces, and electronic payments.</p>
            </div>
        </div>

      



    </div>
    <script src="./js/servicepage.js"></script>
    <div class="container">
        <a href="./create.php" class="purchers-button">Purchers</a>
      </div>
    
    <?php
  include './footer.php';
  ?>
   
</body>
</html>
