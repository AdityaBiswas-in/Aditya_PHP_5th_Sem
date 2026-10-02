<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <!-- Hyperlink the external CSS stylesheet -->
    <link rel="stylesheet" href="Q2.css">
</head>
<body>

<div class="container">
    <h2>Registration Status</h2>

    <?php
    // Check if form is submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
        $username = htmlspecialchars(trim($_POST['username'] ?? ''));
        $email = htmlspecialchars(trim($_POST['email'] ?? ''));
        $gender = htmlspecialchars(trim($_POST['gender'] ?? 'Not specified'));
        $mobile = htmlspecialchars(trim($_POST['mobile'] ?? ''));
        $country = htmlspecialchars(trim($_POST['country'] ?? ''));
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
        $agree = isset($_POST['agree']) ? 'Agreed' : 'Not Agreed';

        // Check if passwords match
        if ($password !== $confirm_password) {
            echo '<div class="error">Error: Passwords do not match!</div>';
        } else {
            echo '<div class="result-box">';
            echo '<h3>Registration Successful!</h3>';
            echo '<div class="result-row"><strong>Username:</strong> ' . $username . '</div>';
            echo '<div class="result-row"><strong>Email Address:</strong> ' . $email . '</div>';
            echo '<div class="result-row"><strong>Gender:</strong> ' . $gender . '</div>';
            echo '<div class="result-row"><strong>Mobile No:</strong> ' . $mobile . '</div>';
            echo '<div class="result-row"><strong>Country:</strong> ' . $country . '</div>';
            echo '<div class="result-row"><strong>Password:</strong> ' . htmlspecialchars($password) . '</div>';
            echo '<div class="result-row"><strong>Terms & Conditions:</strong> ' . $agree . '</div>';
            echo '</div>';
        }
    } else {
        echo '<p style="color: red;">No registration data submitted. Please fill out the registration form.</p>';
    }
    ?>

    <!-- Hyperlink back to HTML Form -->
    <a href="Q2.html" class="back-link">&larr; Back to Registration Form</a>
</div>

</body>
</html>
