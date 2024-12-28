<!-- S.A.Milinda Sandaruwan	IT23284784  -->

<?php
    include "config.php";

    if(isset($_GET['email'])) {
        $email = $_GET['email'];
        $sql = "SELECT * FROM purchase WHERE email = '$email'";
        $result = $conn->query($sql);
    } else {
        $sql = "SELECT * FROM purchase";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/view.css">

    <style>
        body{
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
    <div class="container">
        <h2>User Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phoneNo']; ?></td>
                            <td><?php echo $row['service']; ?></td>

                            <td>
                                <a class="btn btn-info" href="SERVICEUpdate.php?email=<?php echo $row['email']; ?>">Edit</a>
                                <a class="btn btn-danger" href="SERVICEdelete.php?phoneNo=<?php echo $row['phoneNo']; ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                        }
                    } else {
                        echo "<tr><td colspan='4'>No users found</td></tr>";
                    }
                ?>
            </tbody>    
        </table>
       
   
</body>
</html>
