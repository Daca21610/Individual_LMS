<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Check if username or email already exists
    $check_stmt = $conn->prepare("SELECT user_id FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    if ($check_stmt->get_result()->num_rows > 0) {
        echo "<div class='alert alert-danger text-center mt-3' role='alert'>Username or email already exists.</div>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $password, $email, $role);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success text-center mt-3' role='alert'>Registration successful! <a href='login.html' class='link-primary'>Login here</a>.</div>";
        } else {
            echo "<div class='alert alert-danger text-center mt-3' role='alert'>Registration failed. Please try again.</div>";
        }
        $stmt->close();
    }
    $check_stmt->close();
}
?>