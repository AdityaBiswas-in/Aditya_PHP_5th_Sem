<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert String in Middle</title>
</head>
<body>
    <h2>Insert String into Middle of Length 4 String</h2>
    <form action="" method="post">
        <label>String of Length 4 (e.g. [[ ]] or &lt;&lt; &gt;&gt;):</label><br>
        <input type="text" name="base" maxlength="4" placeholder="e.g. [[]]" required><br><br>
        <label>String to Insert:</label><br>
        <input type="text" name="insert" placeholder="e.g. PHP" required><br><br>
        <input type="submit" value="Insert"><br><br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $insert = $_POST['insert'];

    if (strlen($base) != 4) {
        echo "<b>Error:</b> Base string must be exactly 4 characters long.";
    } else {
        $result = substr($base, 0, 2) . $insert . substr($base, 2);
        echo "<b>Base String:</b> " . htmlspecialchars($base) . "<br>";
        echo "<b>Inserted String:</b> " . htmlspecialchars($insert) . "<br>";
        echo "<b>Result:</b> " . htmlspecialchars($result);
    }
}
?>
