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
    
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format');</script>";
    } else {
        
        $email = $conn->real_escape_string($email);

        
        $check_sql = "SELECT * FROM newsletter WHERE email = '$email'";
        $result = $conn->query($check_sql);
        if ($result->num_rows > 0) {
            echo "<script>alert('Email already subscribed');</script>";
        } else {
        
            $insert_sql = "INSERT INTO newsletter (email) VALUES ('$email')";
            if ($conn->query($insert_sql) === TRUE) {
                echo "<script>alert('Subscription successful'); window.location.href = window.location.href;</script>";
                
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }
        }
    }
}


$conn->close();
?>
