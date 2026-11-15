<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <!-- Hyperlink the external CSS stylesheet -->
    <link rel="stylesheet" href="Q1.css">
</head>
<body>

<div class="container">
    <h2>Submission Result</h2>

    <?php
    // Check if data is received via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Retrieve and sanitize inputs
        $fullname = htmlspecialchars(trim($_POST['fullname']));
        $email = htmlspecialchars(trim($_POST['email']));

        echo '<div class="result-box">';
        echo '<h3>Submitted Details:</h3>';
        echo '<p><strong>Full Name:</strong> ' . $fullname . '</p>';
        echo '<p><strong>Email Address:</strong> ' . $email . '</p>';
        echo '</div>';
    } else {
        echo '<p style="color: red;">No form data submitted. Please fill out the form first.</p>';
    }
    ?>

    <!-- Hyperlink back to HTML Form -->
    <a href="Q1.html" class="back-link">&larr; Back to Form</a>
</div>

</body>
</html>
