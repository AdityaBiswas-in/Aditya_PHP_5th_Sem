<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz String Check</title>
</head>
<body>
    <h2>FizzBuzz String Check</h2>
    <form action="" method="post">
        <label>Enter String:</label><br>
        <input type="text" name="str" required><br><br>
        <input type="submit" value="Check"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $startsWithF = (substr($str, 0, 1) === 'F');
    $endsWithB = (substr($str, -1) === 'B');
    if ($startsWithF && $endsWithB) {
        $result = "FizzBuzz";
    } elseif ($startsWithF) {
        $result = "Fizz";
    } elseif ($endsWithB) {
        $result = "Buzz";
    } else {
        $result = $str;
    }
    echo "<b>Input:</b> " . htmlspecialchars($str) . "<br>";
    echo "<b>Result:</b> " . htmlspecialchars($result);
}
?>
