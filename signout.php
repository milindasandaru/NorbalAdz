<?php
require 'config.php';
session_start();

if (empty($_SESSION['role']) || empty($_SESSION['email'])) {
    header('location:login.php');
    exit; // Add exit to prevent further execution
}

$role = $_SESSION['role'];
$email = $_SESSION['email'];

if (isset($_POST["signout"]) && $_POST["signout"] == 'signout') {
    session_unset();
    session_destroy();
    echo "<script>
            alert('Signed out succesfully');
          </script>";
    header('location:Home_Page.php');
    exit; // Add exit to prevent further execution
}