 <!--Sayumi Halwala  	IT23280656 -->


<?php

require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $firstName = $_POST['firstName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $stmt = $conn->prepare("INSERT INTO user (firstName, userName, email, password) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $firstName, $userName, $email, $password);

 
    if ($stmt->execute()) {
        echo "New record created successfully";
       
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

  
    $stmt->close();
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   
    <title>Sign Up</title>
    <style>
       

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-container button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-container button:hover {
    background-color: #0056b3;
}


@media (max-width: 768px) {
    .container {
        padding: 0 15px;
    }

    .form-container {
        width: 100%;
    }
}

    </style>
</head>

<body>
<?php
  include './header.php';
  ?>

    <div class="container">
        <div class="form-container sign-up">
            <form method="post" action="signup.php">
                <h1>Sign up</h1>
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="userName" placeholder="User Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </div>

  

    <?php
  include './footer.php';
  ?>
</body>

</html>
