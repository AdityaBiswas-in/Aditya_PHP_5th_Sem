<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }
        .container {
            width: 360px;
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 8px;
        }
        label {
            font-weight: bold;
            font-size: 14px;
            color: #444;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="checkbox"] {
            margin-top: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .msg-error {
            margin-top: 15px;
            padding: 10px;
            background-color: #ffe6e6;
            color: #cc0000;
            border-left: 4px solid #cc0000;
            border-radius: 4px;
            font-size: 14px;
        }
        .msg-success {
            margin-top: 15px;
            padding: 10px;
            background-color: #e6ffed;
            color: #008822;
            border-left: 4px solid #008822;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>User Registration</h2>

        <form method="POST">
            <label>Full Name:</label>
            <input type="text" name="name" required><br><br>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required><br><br>

            <label>Email ID:</label>
            <input type="text" name="email" required><br><br>

            <label>Mobile:</label>
            <input type="text" name="mobile" required><br><br>

            <input type="checkbox" name="terms"> Agree to terms and conditions<br><br>

            <input type="submit" name="submit" value="Register">
        </form>

<?php
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $age = date_diff(date_create($dob), date_create('today'))->y;

    if (count(explode(" ", $name)) != 2) {
        echo "<div class='msg-error'>Error: Full name must be two words.</div>";
    } elseif ($age < 18) {
        echo "<div class='msg-error'>Error: Age must be above 18.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='msg-error'>Error: Invalid Email ID.</div>";
    } elseif (strlen($mobile) != 10 || !is_numeric($mobile)) {
        echo "<div class='msg-error'>Error: Mobile must be a 10-digit number.</div>";
    } elseif (!isset($_POST['terms'])) {
        echo "<div class='msg-error'>Error: You must agree to terms and conditions.</div>";
    } else {
        echo "<div class='msg-success'>Successful Registration</div>";
    }
}
?>
    </div>

</body>
</html>
