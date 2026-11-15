<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count "aa" in String</title>
</head>
<body>
    <h2>Count "aa" in a Given String</h2>
    <form action="" method="post">
        <label>Enter String:</label>
        <input type="text" name="str" required><br><br>

        <input type="submit" value="Count"><br><br>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $count = 0;
    $len = strlen($str);

    for ($i = 0; $i < $len - 1; $i++) {
        if (substr($str, $i, 2) == "aa") {
            $count++;
        }
    }
    echo "<b>String:</b> " . htmlspecialchars($str) . "<br>";
    echo "<b>Occurrences of 'aa':</b> " . $count;
}
?>
