<!DOCTYPE html>
<html>
<head>
    <title>Client IP Address</title>
</head>
<body>

    <h2>Get Client IP Address</h2>

    <form method="POST">
        <button type="submit" name="get_ip">Get IP Address</button>
    </form>
    <br>

<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    echo "Client IP Address is : " . $ip;
?>

</body>
</html>