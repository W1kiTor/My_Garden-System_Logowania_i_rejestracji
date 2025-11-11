<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>My Garden - Create Account</title>

    <script>
    function RandomNickname() 
    {
        const names = ["Tiger", "Echo", "Shadow", "Nova", "Storm", "Moon"];
        const randomName = names[Math.floor(Math.random() * names.length)];
        const randomNum = Math.floor(Math.random() * 10000);
        document.getElementById('1').value = randomName + "-" + randomNum;
    }
</script>
</head>
<body>
    <div class="top-bar">
        <button onclick="window.location.href='Welcome_page.php'">-Back-</button>
    </div>

    <h2>Create Account</h2>

    <form action="database_auth&create_account.php" method="POST">
        <button onclick="RandomNickname()">Random Nickname</button>
        <input required type="name" name="nickname" id = "1" placeholder="Nickname"><br>
        <input required type="email" name="email" placeholder="Email"><br>
        <input required type="password" name="password" placeholder="Password"><br>

        <br><button type="submit">Create account</button>
    </form>

    
</body>
</html>

<?php if (isset($_GET['error'])): ?>
    <?php if ($_GET['error'] === 'email_taken'): ?>
        <p style="color:red;">Ten adres email jest już zajęty.</p>
    <?php elseif ($_GET['error'] === 'nickname_taken'): ?>
        <p style="color:red;">Ten nick jest już zajęty.</p>
    <?php endif; ?>
<?php elseif (isset($_GET['success'])): ?>
    <p style="color:green;">Konto zostało utworzone pomyślnie!</p>
<?php endif; ?>