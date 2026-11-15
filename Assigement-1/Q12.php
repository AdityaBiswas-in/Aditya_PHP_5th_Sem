<!DOCTYPE html>
<html>
<head>
    <title>Get Last Error</title>
</head>
<body>

    <h2>Get Last Occurred Error</h2>

    <form method="POST">
        <button type="submit" name="submit">Get Last Error</button>
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {
    echo $x;
    print_r(error_get_last());
}
?>

</body>
</html>
