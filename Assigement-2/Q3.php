<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range Check (40..50 or 50..60)</title>
</head>
<body>

    <h2>Check Integers in Range (40..50 or 50..60)</h2>

    <form action="" method="post">
        <label>1st Number:</label>
        <input type="number" name="num1" required><br><br>

        <label>2nd Number:</label>
        <input type="number" name="num2" required><br><br>

        <input type="submit" value="Check"><br><br>
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Check if both are in range 40..50 inclusive OR both are in range 50..60 inclusive
    $range40_50 = ($num1 >= 40 && $num1 <= 50) && ($num2 >= 40 && $num2 <= 50);
    $range50_60 = ($num1 >= 50 && $num1 <= 60) && ($num2 >= 50 && $num2 <= 60);

    if ($range40_50 || $range50_60) {
        echo "<b>Result:</b> True (Both numbers are in the same range).";
    } else {
        echo "<b>Result:</b> False (Numbers are not both in 40..50 or both in 50..60).";
    }
}
?>
