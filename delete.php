<!-- M.S.Umair Salih  	IT23274716  -->

<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'dbcrud';


$conn = new mysqli($db_host, $db_username, $db_password, $db_name);


if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}


if (isset($_POST['phone-number'])) {
    $phone_number = $_POST['phone-number'];

    $sql = "DELETE FROM inquiry WHERE phone_number = '$phone_number'";
    $result = $conn->query($sql);

    if ($result) {
        echo "<script>alert('Successfully deleted your inquiry!');</script>";
    } else {
        echo "<script>alert('Error deleting inquiry: ". $conn->error. "');</script>";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

     .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #052558;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-top: 30px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #ac1417;
            font-weight: bold;
        }

        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #289faa;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #af0e0e;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius:50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #2aabd2;
        }

     .error-message {
            color: red;
            margin-top: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php
  include './header.php';
  ?>

<div class="container">
    <h2>Do you want to delete your inquiry?</h2>

    <form id="phone-form" action="delete.php" method="post">
        <label for="phone-number">Enter your 10-digit phone number:</label>
        <input type="tel" id="phone-number" name="phone-number" pattern="[0-9]{10}" required>
        <br><br>
        <button type="submit" style="background-color: #007bff; color: #fff;">Delete</button>
        <p class="error-message" id="error-message"></p>
    </form>
</div>

<script>
   phoneForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const phoneNumber = document.getElementById('phone-number').value;

    if (phoneNumber.length === 10) {
       
        phoneForm.submit();
    } else {
        errorMessage.textContent = 'Please enter a valid 10-digit phone number.';
    }
});
</script>



<?php
  include './footer.php';
  ?>
</body>
</html>