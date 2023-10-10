<?php
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            animation: backgroundTransition 10s infinite;
        }

        @keyframes backgroundTransition {
            0% { background-color: #ff5733; }
            25% { background-color: #33ff57; }
            50% { background-color: #5733ff; }
            75% { background-color: #33aaff; }
            100% { background-color: #ff33aa; }
        }

        .container {
            text-align: center;
            padding: 100px;
        }

        h1 {
            font-size: 36px;
            color: #333;
        }

        p {
            font-size: 18px;
            color: #777;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Dashboard</h1>
        <p>Hello, <?php echo $_SESSION['user_name']; ?>!</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>