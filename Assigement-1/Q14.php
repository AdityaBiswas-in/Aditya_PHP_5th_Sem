<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculations</title>
</head>
<body>

    <h2>Calculate Circumference and Area of a Circle</h2>

    <form method="POST">
        Enter Radius: <input type="number" step="any" name="radius" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {

    $radius = $_POST['radius'];

    $circumference = 2 * pi() * $radius;
    $area = pi() * $radius * $radius;

    echo "Radius: " . $radius . "<br>";
    echo "Circumference: " . round($circumference, 2) . "<br>";
    echo "Area: " . round($area, 2) . "<br>";
}
?>

</body>
</html>