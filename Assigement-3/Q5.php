<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "workspace";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $raw_gender = strtolower($_POST['gender'] ?? '');
    $mobile = trim($_POST['mobile']);
    $country = trim($_POST['country']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Map gender to database enum values ('m', 'f', 'o')
    if ($raw_gender === 'male' || $raw_gender === 'm') {
        $gender = 'm';
    } elseif ($raw_gender === 'female' || $raw_gender === 'f') {
        $gender = 'f';
    } else {
        $gender = 'o';
    }

    // Verify required fields and password match
    if (!empty($username) && !empty($email) && !empty($password) && ($password === $confirm_password)) {
        // Insert values into registration table
        $sql = "INSERT INTO registration (username, email, gender, mobile, country, password) 
                VALUES ('$username', '$email', '$gender', '$mobile', '$country', '$password')";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            // Redirect to login.php on success
            header("Location: login.php");
            exit();
        }
    }
}

// Redirect back to registration.php on failure or direct access
mysqli_close($conn);
header("Location: registration.php");
exit();
?>
