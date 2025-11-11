<?php
require_once "database_connect.php";

$email = $_POST['email'] ?? '';
$nickname = $_POST['nickname'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR nickname = ?");
$stmt->bind_param("ss", $email, $nickname);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $existing = $result->fetch_assoc();

    if ($existing['email'] === $email) {
        header("Location: create_account.php?error=email_taken");
        exit;
    } elseif ($existing['nickname'] === $nickname) {
        header("Location: create_account.php?error=nickname_taken");
        exit;
    }
}

$stmt = $conn->prepare("INSERT INTO users (email, nickname, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $nickname, $password);
$stmt->execute();

header("Location: create_account.php?success=1");
exit;
?>
