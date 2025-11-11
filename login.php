<?php
    $error = $_GET['error'] ?? '';
    $email = $_GET['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>My Garden - Login</title>
</head>
<body>
    <div class="top-bar">
        <button onclick="window.location.href='Welcome_page.php'">-Back-</button>
    </div>

    <h2>Login</h2>

    <form action="login_user.php" method="POST">
        <input type="email" name="email" placeholder="Email" value = "<?php echo htmlspecialchars($email); ?>" required><br>
        <input type="password" name="password" placeholder="Password" required><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>

<?php if ($error): ?>
    <p style="color:red;">Nieprawidłowy e-mail lub hasło.</p>
<?php endif; ?>