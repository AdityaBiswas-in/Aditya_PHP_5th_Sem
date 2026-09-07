<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validation</title>
</head>
<body>

    <h2>Validate Email Address</h2>

    <form method="POST">
        <label>Enter Email:</label><br>
        <input type="text" name="email" required><br><br>
        <input type="submit" name="validate" value="Check Email">
    </form>
    <br>

<?php
if (isset($_POST['validate'])) {
    $email = trim($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<b>" . htmlspecialchars($email) . "</b> is a valid email address.";
    } else {
        echo "<b>" . htmlspecialchars($email) . "</b> is an invalid email address.";
    }
}
?>

</body>
</html>
