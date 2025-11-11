<?php
session_start();

require_once("database_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) 
{
    $user = $result->fetch_assoc();

    //if (password_verify($password, $user['password'])) {
    if ($user && $password === $user['password']) 
    {
        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['email'] = $user['email'];
        header("Location: user_main_page.php");
        exit;
    } 
    else 
    {
        header("Location: login.php?error=1&email=" . urlencode($email));
    }
} 
else 
{
    header("Location: login.php?error=1&email=" . urlencode($email));
}

$conn->close();
?>