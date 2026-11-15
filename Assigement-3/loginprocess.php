<?php
// Database connection details
$host = "localhost";
$user = "root";
$pass = "";
$db   = "workspace";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if username and password exist in the registration table
    $sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        mysqli_close($conn);
        // User found: redirect to home.php
        header("Location: home.php");
        exit();
    }
}

// User not found or invalid access: redirect back to login.php
mysqli_close($conn);
header("Location: login.php?error=1");
exit();
?>
