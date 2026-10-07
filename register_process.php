<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request method.");
}

$fullname = trim($_POST["fullname"] ?? "");
$password = $_POST["password"] ?? "";
$confirm_password = $_POST["confirm_password"] ?? "";

$errors = [];

if ($password !== $confirm_password) {
    $errors[] = "Password and Confirm Password do not match.";
}

$pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z0-9]{5,20}$/';

if (!preg_match($pattern, $password)) {
    $errors[] = "Password does not meet requirements. Must be 5-20 characters with 1 uppercase, 1 lowercase, 1 number, and no spaces or special characters.";
}

if (!empty($errors)) {

    echo "<h3 style='color:red;'>Errors Found:</h3>";
    echo "<ul>";

    foreach ($errors as $err) {
        echo "<li>" . htmlspecialchars($err) . "</li>";
    }

    echo "</ul>";

    echo "<a href='register.php'>Go Back</a>";

} else {

    echo "<h3>Registration Successful!</h3>";

    echo "<p><strong>Full Name:</strong> "
        . htmlspecialchars($fullname)
        . "</p>";

    echo "<p><strong>Password:</strong> [hidden for security]</p>";

    echo "<br>";

    echo "<a href='register.php'>Register Another</a>";
}

?>