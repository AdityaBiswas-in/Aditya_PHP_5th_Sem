<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parse URL Components</title>
</head>
<body>

    <h2>Parse URL Components</h2>

    <form method="POST">
        <label>Enter URL:</label><br>
        <input type="text" name="url" value="" style="width: 350px;" required><br><br>
        <input type="submit" name="submit" value="Parse URL">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {
    $url = trim($_POST['url']);
    $parsed_url = parse_url($url);

    echo "<b>Scheme :</b> " . ($parsed_url['scheme'] ?? 'N/A') . "<br>";
    echo "<b>Host :</b> " . ($parsed_url['host'] ?? 'N/A') . "<br>";
    echo "<b>Path :</b> " . ($parsed_url['path'] ?? 'N/A') . "<br>";
}
?>

</body>
</html>
