<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Rotate Array (Length 4)</title>
</head>
<body>
    <h2>Left Rotate Array of Length 4</h2>
    <form action="" method="post">
        <label>Enter 4 Integers (comma-separated):</label><br>
        <input type="text" name="array" placeholder="e.g. 10, 20, 30, 40" required><br><br>
        <input type="submit" value="Rotate Left"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['array'];
    $arr = array_map('intval', array_map('trim', explode(',', $input)));
    if (count($arr) != 4) {
        echo "<b>Error:</b> Please enter exactly 4 integers.";
    } else {

        $rotated = [$arr[1], $arr[2], $arr[3], $arr[0]];
        echo "<b>Original Array:</b> [" . implode(', ', $arr) . "]<br>";
        echo "<b>Rotated Array:</b> [" . implode(', ', $rotated) . "]";
    }
}
?>
