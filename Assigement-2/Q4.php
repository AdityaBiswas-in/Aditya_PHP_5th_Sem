<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Last 3 Characters to Uppercase</title>
</head>
<body>
    <h2>Convert Last 3 Characters to Uppercase</h2>
    <form action="" method="post">
        <label>Enter String:</label>
        <input type="text" name="str" required><br><br>

        <input type="submit" value="Convert"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $len = strlen($str);

    if ($len < 3) {
        $result = strtoupper($str);
    } else {
        $result = substr($str, 0, $len - 3) . strtoupper(substr($str, -3));
    }
    echo "<b>Original String:</b> " . htmlspecialchars($str) . "<br>";
    echo "<b>Result:</b> " . htmlspecialchars($result);
}
?>
