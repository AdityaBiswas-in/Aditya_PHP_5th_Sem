<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Range</title>
</head>
<body>

    <form action="Q1.php" method="post">
        <label>1st Number:</label>
        <input type="number" name="Num1" required><br><br>

        <label>2nd Number:</label>
        <input type="number" name="Num2" required><br><br>

        <label>3rd Number:</label>
        <input type="number" name="Num3" required><br><br>

        <input type="submit" value="Check"><br><br>
    </form>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['Num1'];
    $num2 = $_POST['Num2'];
    $num3 = $_POST['Num3'];

    if (
        ($num1 >= 20 && $num1 <= 50) &&
        ($num2 >= 20 && $num2 <= 50) &&
        ($num3 >= 20 && $num3 <= 50)
    ) {
        echo "true";
    } else {
        echo "false";
    }
}

?>