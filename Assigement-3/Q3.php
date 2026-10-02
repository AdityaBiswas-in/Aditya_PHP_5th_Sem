<?php
// Initialize variables for inputs and error messages
$username = $email = $gender = $mobile = $country = "";
$password = $confirm_password = "";
$agree = false;

$err_username = $err_email = $err_gender = $err_mobile = "";
$err_country = $err_password = $err_confirm_password = $err_agree = "";

$is_submitted = false;
$has_errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $is_submitted = true;

    // 1. Username: not empty, alphanumeric data and space only
    if (empty(trim($_POST["username"] ?? ""))) {
        $err_username = "* Username is required.";
    } else {
        $username = trim($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
            $err_username = "* Username should contain only alphanumeric data and space.";
        }
    }

    // 2. Email: not empty and as per email format
    if (empty(trim($_POST["email"] ?? ""))) {
        $err_email = "* Email is required.";
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "* Invalid email format.";
        }
    }

    // 3. Gender: must be selected
    if (empty($_POST["gender"])) {
        $err_gender = "* Gender must be selected.";
    } else {
        $gender = $_POST["gender"];
    }

    // 4. Mobile no: not empty, numeric and plus symbol allowed
    if (empty(trim($_POST["mobile"] ?? ""))) {
        $err_mobile = "* Mobile number is required.";
    } else {
        $mobile = trim($_POST["mobile"]);
        if (!preg_match("/^\+?[0-9]+$/", $mobile)) {
            $err_mobile = "* Mobile no should only contain digits and optional '+' prefix.";
        }
    }

    // 5. Country: must be selected
    if (empty($_POST["country"])) {
        $err_country = "* Country must be selected.";
    } else {
        $country = $_POST["country"];
    }

    // 6. Password: at least 8 characters long
    $password = $_POST["password"] ?? "";
    if (empty($password)) {
        $err_password = "* Password is required.";
    } elseif (strlen($password) < 8) {
        $err_password = "* Password should be at least 8 characters long.";
    }

    // 7. Confirm password: same as Password
    $confirm_password = $_POST["confirm_password"] ?? "";
    if (empty($confirm_password)) {
        $err_confirm_password = "* Confirm password is required.";
    } elseif ($confirm_password !== $password) {
        $err_confirm_password = "* Confirm password should be same as Password.";
    }

    // Terms & condition agreement
    if (empty($_POST["agree"])) {
        $err_agree = "* You must agree to the terms and condition.";
    } else {
        $agree = true;
    }

    // Check overall error status
    if (
        !empty($err_username) || !empty($err_email) || !empty($err_gender) ||
        !empty($err_mobile) || !empty($err_country) || !empty($err_password) ||
        !empty($err_confirm_password) || !empty($err_agree)
    ) {
        $has_errors = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration with Server-side Validation</title>
    <!-- Hyperlinking external CSS stylesheet -->
    <link rel="stylesheet" href="Q3.css">
</head>
<body>

<div class="container">
    <h2>User Registration</h2>

    <?php if ($is_submitted && !$has_errors): ?>
        <!-- Display registration results if validation passes -->
        <div class="result-box">
            <h3>Registration Successful!</h3>
            <div class="result-row"><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></div>
            <div class="result-row"><strong>Email Address:</strong> <?php echo htmlspecialchars($email); ?></div>
            <div class="result-row"><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></div>
            <div class="result-row"><strong>Mobile No:</strong> <?php echo htmlspecialchars($mobile); ?></div>
            <div class="result-row"><strong>Country:</strong> <?php echo htmlspecialchars($country); ?></div>
            <div class="result-row"><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></div>
            <div class="result-row"><strong>Terms & Conditions:</strong> Agreed</div>
        </div>
        <a href="Q3.php" class="back-link">&larr; Register Another User</a>
    <?php else: ?>
        <!-- Registration Form with Red Asterix Prefix Error Messages -->
        <form method="POST" action="Q3.php" novalidate>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="Enter username">
                <?php if (!empty($err_username)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_username); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter email address">
                <?php if (!empty($err_email)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_email); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female</label>
                    <label><input type="radio" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>> Other</label>
                </div>
                <?php if (!empty($err_gender)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_gender); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>" placeholder="e.g. +919876543210">
                <?php if (!empty($err_mobile)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_mobile); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="">-- Select Country --</option>
                    <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
                    <option value="United States" <?php if ($country == "United States") echo "selected"; ?>>United States</option>
                    <option value="United Kingdom" <?php if ($country == "United Kingdom") echo "selected"; ?>>United Kingdom</option>
                    <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
                    <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>>Australia</option>
                </select>
                <?php if (!empty($err_country)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_country); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="At least 8 characters">
                <?php if (!empty($err_password)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_password); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
                <?php if (!empty($err_confirm_password)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_confirm_password); ?></span>
                <?php endif; ?>
            </div>

            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="agree" value="1" <?php if ($agree) echo "checked"; ?>>
                    I agree to the terms and condition
                </label>
                <?php if (!empty($err_agree)): ?>
                    <span class="error-msg"><?php echo htmlspecialchars($err_agree); ?></span>
                <?php endif; ?>
            </div>

            <input type="submit" name="register" value="Submit">
        </form>
    <?php endif; ?>
</div>

</body>
</html>
