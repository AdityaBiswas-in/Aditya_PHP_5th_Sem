<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
</head>
<body>

    <h2>Calculate Student Grade</h2>

    <form method="POST">
        Enter Marks: <input type="number" name="marks" required><br><br>
        <input type="submit" name="submit" value="Calculate Grade">
    </form>
    <br>

<?php
if (isset($_POST['submit'])) {

    $marks = $_POST['marks'];

    if ($marks > 800 && $marks <= 1000) {
        echo "Marks: " . $marks . "<br>Result: Class I";
    } elseif ($marks > 600 && $marks <= 800) {
        echo "Marks: " . $marks . "<br>Result: Class II";
    } elseif ($marks > 400 && $marks <= 600) {
        echo "Marks: " . $marks . "<br>Result: Class III";
    } elseif ($marks >= 0 && $marks <= 400) {
        echo "Marks: " . $marks . "<br>Result: Fail";
    } else {
        echo "Invalid Marks! Please enter marks between 0 and 1000.";
    }
}
?>

</body>
</html>
