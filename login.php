<?php
session_start();
if(isset($_SESSION['email'])) {
    header("Location: dashboard.php");
    exit();
}

$error = '';
if(isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Caramel Cloud Coffee</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f0e1; }
        .login-container { width: 300px; margin: 100px auto; padding: 30px; background: #fff3e6; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
        input { width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { width: 100%; padding: 10px; background: #d2691e; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #b35f1b; }
        .error { color: red; text-align: center; }
        h2 { text-align: center; color: #8b4513; }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to Caramel Cloud Coffee</h2>
    <?php if($error) echo "<p class='error'>$error</p>"; ?>
    <form action="process.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>

