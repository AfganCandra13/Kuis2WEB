<?php
session_start();
include '../db.php';

$user = $_SESSION['user'];
$id = $user['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];

    $profile_pic = $user['profile_pic'];
    if ($_FILES['profile_pic']['name']) {
        $profile_pic = uniqid() . "_" . $_FILES['profile_pic']['name'];
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], "../uploads/" . $profile_pic);
    }

    $stmt = $conn->prepare("UPDATE users SET username=?, email=?, profile_pic=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $email, $profile_pic, $id);
    $stmt->execute();

    $_SESSION['user'] = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

    header("Location: profile.php");
}
?>

<link rel="stylesheet" href="../assets/style.css">
<h2>Edit User</h2>
<form method="POST" enctype="multipart/form-data">
    <input name="username" value="<?= $user['username'] ?>" required>
    <input name="email" value="<?= $user['email'] ?>" required>
    <input type="file" name="profile_pic">
    <button type="submit">Simpan</button>
</form>