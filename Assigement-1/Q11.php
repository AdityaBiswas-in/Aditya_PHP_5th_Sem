<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operating System Information</title>
</head>
<body>

    <h2>Get Operating System Information</h2>

    <form method="POST">
        <button type="submit" name="get_os">Get OS Info</button>
    </form>
    <br>

<?php
if (isset($_POST['get_os'])) {
    echo "<h3>Operating System Information</h3>";
    echo "<b>System Details (php_uname):</b> " . php_uname() . "<br><br>";
    echo "<b>Operating System (PHP_OS):</b> " . PHP_OS . "<br><br>";

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        echo "This is a server using Windows!";
    } else {
        echo "This is a server not using Windows!";
    }
}
?>

</body>
</html>
