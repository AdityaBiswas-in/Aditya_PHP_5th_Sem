
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Redirection</title>
</head>
<body>

    <h2>Page Redirection</h2>

    <form method="POST">
        <button type="submit" name="redirect">Redirect</button>
    </form>

</body>
</html>

<?php

if (isset($_POST['redirect'])) {
    header("Location: Q1.php");
    exit();
}
?>
