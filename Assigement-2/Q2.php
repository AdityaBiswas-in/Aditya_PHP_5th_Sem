<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearest to 100</title>
</head>
<body>

    <form action="Q2.php" method="post">
        <label>1st Number:</label>
        <input type="number" name="Num1" required><br><br>

        <label>2nd Number:</label>
        <input type="number" name="Num2" required><br><br>

        <input type="submit" value="Check"><br><br>
    </form>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['Num1'];
    $num2 = $_POST['Num2'];

    $diff1 = abs($num1 - 100);
    $diff2 = abs($num2 - 100);

    if ($num1 == $num2 || $diff1 == $diff2) {
        echo 0;
    } elseif ($diff1 < $diff2) {
        echo $num1;
    } else {
        echo $num2;
    }
}

?>
