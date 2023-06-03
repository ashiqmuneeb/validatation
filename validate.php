<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate username
    if (empty($username)) {
        echo "Username is required.<br>";
    } elseif (!preg_match("/^[a-zA-Z0-9_]{5,20}$/", $username)) {
        echo "Username must be alphanumeric and between 5 to 20 characters.<br>";
    }

    // Validate email
    if (empty($email)) {
        echo "Email is required.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    }

    // Validate password
    if (empty($password)) {
        echo "Password is required.<br>";
    } elseif (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.<br>";
    }
}
?>
