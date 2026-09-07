<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Page Protocol</title>
</head>
<body>

    <h2>Check Page Protocol</h2>

    <form method="POST">
        <button type="submit" name="check_protocol">Check Protocol</button>
    </form>
    <br>

<?php
if (isset($_POST['check_protocol'])) {
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        echo "Page is called from 'https'";
    } else {
        echo "Page is called from 'http'";
    }
}
?>

</body>
</html>
