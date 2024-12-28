





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <title>Login</title>

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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

       .form-container h1 {
            margin-bottom: 20px;
            text-align: center;
        }

       .form-container input[type="text"],
       .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

       .form-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

       .form-container button:hover {
            background-color: #0056b3;
        }

        #message {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }

      
        @media screen and (max-width: 768px) {
           .form-container {
                width: 80%;
            }
        }
    </style>
</head>

<body>
<?php
  include './header.php';
  ?>

    <div class="container">
        <div class="form-container sign-in">
            <form method="post" action="logins.php">
                <h1>Log in</h1>
                <input type="text" name="emailUsername" placeholder="Enter Email/Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <?php if (isset($error)) :?>
                    <div id="message"><?php echo $error;?></div>
                <?php endif;?>
                <button type="submit" name="submit">Log in</button>
            </form>
        </div>
    </div>

    <?php
  include './footer.php';
  ?>
</body>

</html>
