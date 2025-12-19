<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Caramel Cloud Coffee</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff8f0; }
        header { background: #d2691e; color: white; padding: 15px; text-align: center; }
        main { margin: 50px auto; width: 80%; text-align: center; }
        a { color: #d2691e; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <header>
        <h1>Caramel Cloud Coffee</h1>
        <p>Welcome, <?php echo $_SESSION['email']; ?>!</p>
    </header>
    <main>
        <h2>Dashboard</h2>
        <p>Check your latest coffee orders or enjoy our specials!</p>
        <a href="logout.php">Logout</a>
    </main>
</body>
</html>
