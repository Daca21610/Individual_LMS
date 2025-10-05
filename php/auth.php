<?php
include '../config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember-me']);

    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $username;
            if ($remember_me) {
                $token = bin2hex(random_bytes(50));
                setcookie('remember_me', $token, time() + (30 * 24 * 60 * 60), "/");
                $stmt_update = $conn->prepare("UPDATE users SET remember_token = ? WHERE user_id = ?");
                $stmt_update->bind_param("si", $token, $row['user_id']);
                $stmt_update->execute();
            }
            header("Location: ../pages/dashboard/index.html");
            exit();
        }
    }
    echo "<div class='alert alert-danger text-center mt-3' role='alert'>Invalid credentials</div>";
    $stmt->close();
}
?>