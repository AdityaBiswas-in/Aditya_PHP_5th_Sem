<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

    <h2>User Registration</h2>

    <form method="POST">
        Full Name: <input type="text" name="name" required><br><br>
        Date of Birth: <input type="date" name="dob" required><br><br>
        Email ID: <input type="text" name="email" required><br><br>
        Mobile: <input type="text" name="mobile" required><br><br>
        <input type="checkbox" name="terms"> Agree to terms and conditions<br><br>
        <input type="submit" name="submit" value="Register">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $age = date_diff(date_create($dob), date_create('today'))->y;

    if (count(explode(" ", $name)) != 2) {
        echo "Error: Full name must be two words.";
    } elseif ($age < 18) {
        echo "Error: Age must be above 18.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Invalid Email ID.";
    } elseif (strlen($mobile) != 10 || !is_numeric($mobile)) {
        echo "Error: Mobile must be a 10-digit number.";
    } elseif (!isset($_POST['terms'])) {
        echo "Error: You must agree to terms and conditions.";
    } else {
        echo "Successful Registration";
    }
}
?>

</body>
</html>
