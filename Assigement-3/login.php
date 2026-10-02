<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="Q2.css">
    <style>
        .error-msg {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <div class="error-msg">Invalid username or password!</div>
    <?php endif; ?>

    <!-- Form submitting login data to loginprocess.php -->
    <form method="POST" action="loginprocess.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
        </div>

        <input type="submit" name="login" value="Login">
    </form>
</div>

</body>
</html>
