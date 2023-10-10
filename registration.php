<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="page-header">
                <h2>Registration Form</h2>
            </div>
            <!-- Check if the user is logged in -->
            <?php if (isset($_SESSION['user_id'])): ?>
                <p>Welcome, <?php echo $_SESSION['user_name']; ?>!</p>
                <p>Email: <?php echo $_SESSION['user_email']; ?></p>
                <p><a href="logout.php">Logout</a></p>
            <?php else: ?>
                <!-- Registration form -->
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" name="register" value="Register">
                </form>
                <!-- Link to login form -->
                <p>Already have an account? <a href="login.php">Login</a></p>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>