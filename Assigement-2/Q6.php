<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number in Array</title>
</head>
<body>
    <h2>Check Number in Array</h2>
    <form action="" method="post">
        <label>Enter Array Elements (comma-separated):</label><br>
        <input type="text" name="array" placeholder="e.g. 10, 25, 40, 55" required><br><br>
        <label>Enter Number to Search:</label><br>
        <input type="number" name="search" required><br><br>
        <input type="submit" value="Check"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['array'];
    $search = (int)$_POST['search'];
    $arr = array_map('intval', array_map('trim', explode(',', $input)));
    if (in_array($search, $arr, true)) {
        echo "<b>Result:</b> " . $search . " is present in the array.";
    } else {
        echo "<b>Result:</b> " . $search . " is NOT present in the array.";
    }
}
?>
