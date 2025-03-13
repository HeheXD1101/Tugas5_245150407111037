<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: halaman2.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $domain = substr(strrchr($email, "@"), 1);
    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: halaman2.php"); 
        exit();
    } else {
        $error = "Email atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="post" action="">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login">
        </form>
    </body>
</html>