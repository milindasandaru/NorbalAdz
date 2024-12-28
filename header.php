<!-- M.S.Umair Salih  	IT23274716  -->
<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NobelAdz</title>
    <meta name="title" content="BLOOMARK.com - Online Advertising Agency">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
   
</head>

<body>
   
    <header id="header" class="header">
        <nav class="navBar">
            <div class="nav-center">
                <a href="./web_design.php" class="nav-item">Service</a>
                <a href="./Ourstory.php" class="nav-item">Our Story</a>
                <a href="./Home_Page.php" class="logo-link"><img src="./Image/norbelAdz_HEADER.png" alt="logo" class="logo"></a>
                <a href="./contuctus.php" class="nav-item">Contact Us</a>
                <a href="./help_page.php" class="nav-item">Help</a>
            </div>
            <div class="auth-container">
            <?php 
            require 'config.php';

            session_start();
            if (isset($_SESSION['role']))
            {
                echo "<form action = 'signout.php' method = 'post'>
                <button class='btn sign-in-btn' type='submit' name='signout' value='signout'>Sign out</button>
        </form>
        <a href = 'profile.php'><button class='btn sign-btn'>Profile</button></a>";
            }
            else {
            echo "<a href = 'signup.php'><button class='btn sign-btn'>Sign Up</button></a>
            <a href = 'login.php'><button class='btn sign-in-btn'>login</button></a>";}
            ?>
            </div>
        </nav>
    </header>
    <div class="spacer"></div> 
    <script src="./js/header.js"></script>
</body>

</html>