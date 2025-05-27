<?php
session_start();
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM users WHERE username = '$username' AND role = 'admin'");
    $admin = $result->fetch_assoc();

    if ($admin && password_verify($password, $admin["password"])) {
        $_SESSION["user"] = $admin;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<p style='color:red;'>Login admin gagal. Periksa username dan password.</p>";
    }
}
?>

<link rel="stylesheet" href="../assets/style.css">
<h2>Login Admin</h2>
<form method="POST">
    <input name="username" required placeholder="Username">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Login</button>
</form>