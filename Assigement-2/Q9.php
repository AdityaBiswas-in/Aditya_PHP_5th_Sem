<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Long Short Long String</title>
</head>
<body>
    <h2>Combine Strings (Long + Short + Long)</h2>
    <form action="" method="post">
        <label>1st String:</label><br>
        <input type="text" name="str1" required><br><br>
        <label>2nd String:</label><br>
        <input type="text" name="str2" required><br><br>
        <input type="submit" value="Combine"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    if (strlen($str1) > strlen($str2)) {
        $long = $str1;
        $short = $str2;
    } else {
        $long = $str2;
        $short = $str1;
    }
    $result = $long . $short . $long;
    echo "<b>1st String:</b> " . htmlspecialchars($str1) . "<br>";
    echo "<b>2nd String:</b> " . htmlspecialchars($str2) . "<br>";
    echo "<b>Result:</b> " . htmlspecialchars($result);
}
?>