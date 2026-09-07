<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>
</head>
<body>

    <h2>Check Even or Odd</h2>

    <form method="POST">
        Enter a Number: <input type="number" name="num" required><br><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {
    
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "$num is an Even number.";
    } else {
        echo "$num is an Odd number.";
    }
}
?>

</body>
</html>
