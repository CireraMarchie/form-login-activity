<?php
session_start();

require_once "db.php";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']); // Add username field
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for security
    $hashedPassword = md5($password);

    // Insert user data into the database
    $query = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$hashedPassword')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registration successful, redirect to login page
        header("Location: login.php");
    } else {
        // Registration failed
        $error_message = "Registration failed. Please try again.";
    }
}
?>