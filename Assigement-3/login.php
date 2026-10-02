<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "workspace";

$conn = mysqli_connect($host, $user, $pass, $db);

$error_msg = "";
$login_success = false;
$logged_user = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username_or_email = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username_or_email) || empty($password)) {
        $error_msg = "Please enter both username/email and password.";
    } else {
        // Query to check matching credentials in the registration table
        $sql = "SELECT * FROM registration WHERE (username = '$username_or_email' OR email = '$username_or_email') AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $login_success = true;
            $logged_user = $user_data['username'];
        } else {
            $error_msg = "Invalid username/email or password!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="Q2.css">
    <style>
        .msg-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
        }
        .msg-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Login</h2>

    <?php if ($login_success): ?>
        <div class="msg-success">
            <h3>Login Successfully!</h3>
            <p>Welcome, <strong><?php echo htmlspecialchars($logged_user); ?></strong>!</p>
            <br>
            <a href="login.php" class="back-link">Logout / Login Again</a>
        </div>
    <?php else: ?>
        <?php if (!empty($error_msg)): ?>
            <div class="msg-error"><?php echo htmlspecialchars($error_msg); ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username / Email:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>" required placeholder="Enter username or email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter password">
            </div>

            <input type="submit" name="login" value="Login">
        </form>

        <p style="text-align: center; margin-top: 15px; font-size: 14px;">
            Don't have an account? <a href="Q2.html" style="color: #007bff; text-decoration: none;">Register here</a>
        </p>
    <?php endif; ?>
</div>

</body>
</html>
