<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Name Form</title>
</head>
<body>
    <h2>User Name Form</h2>
    
<form action="Q2.php" method="POST">
    Enter Name: <input type="text" name="name"><br><br>
    <input type="submit" value="Submit"><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['name'];
echo "Hello, " . $name;
}
?>

</body>
</html>