<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
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
            color: #2aabd2; /* Dark blue color */
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            display: block;
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #2aabd2;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #15769e; 
        }

        .results {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .results p {
            margin: 0 0 10px 0;
        }

        .results strong {
            font-weight: bold;
        }

        .button-con {
            margin-top: 20px;
        }

        .button-con button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #2aabd2;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .button-con button:hover {
            background-color: #15769e;
        }
    </style>
</head>
<body>

<?php
  include './header.php';
?>

<div class="container">
    <h2>Do you want to see your inquiry?</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="number">Enter a Phone number:</label>
            <input type="number" name="number" id="number" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        // Database connection
        $conn = mysqli_connect('localhost', 'root', '', 'dbcrud');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to check the number
        $sql = "SELECT * FROM inquiry WHERE phone_number = '$number'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='results'>" .
                "<p><strong>Name:</strong> " . $row["Name"] . "</p>" .
                "<p><strong>Phone Number:</strong> " . $row["phone_number"] . "</p>" .
                "<p><strong>Description:</strong> " . $row["description"] . "</p>" .
                "</div>" .
                "<div class='button-con'>" .
                "<button type='button' onclick=\"window.location.href='edit.php'\">Edit</button>" .
                "</div>";
        } else {
            echo "<div class='results'>No results found.</div>";
        }

        // Close the connection
        mysqli_close($conn);
    }
    ?>

</div>

<?php
  include './footer.php';
?>
</body>
</html>
