<?php
session_start();

if (!isset($_SESSION['nickname'])) 
{
    header("Location: login.php");
    exit;
}

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

$nickname = htmlspecialchars($_SESSION['nickname']);
$email = htmlspecialchars($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>My Garden - <?php echo $nickname; ?></title>
</head>
<body>
    <div class="top-bar">
        <button onclick="window.location.href='logout.php'">-Logout-</button>
    </div>

    <p><strong>Nickname:</strong> <?php echo $nickname; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
</body>
</html>