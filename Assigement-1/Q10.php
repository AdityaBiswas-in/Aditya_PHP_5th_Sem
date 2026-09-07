<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Values in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 320px;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        th {
            background-color: #f4f4f4;
            text-align: left;
        }
        .name {
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Salary Information</h2>

<?php
$a = '1000$';
$b = '1200$';
$c = '1400$';

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Description</th><th>Amount</th></tr>";
echo "<tr><td class='name'>Salary of Mr. Aditya is</td><td>$a</td></tr>";
echo "<tr><td class='name'>Salary of Mr. Bisodip is</td><td>$b</td></tr>";
echo "<tr><td class='name'>Salary of Mr. Sujan is</td><td>$c</td></tr>";
echo "</table>";
?>

</body>
</html>
