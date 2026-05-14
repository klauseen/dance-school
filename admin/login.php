<?php
session_start();
require_once '../config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = isset($_POST['password']) ? MD5($_POST['password']) : '';

    $sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
    $_SESSION['admin'] = $username;
    header('Location: dashboard.php');
    } else{
        $error = "Username or password incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <nav>
            <div class="logo">Dance School Dancers</div>
            <ul>
                <li><a href="../index.html">Home</a></li>
            </ul>
        </nav>

        <section class="login">
            <h2>Administrare</h2>
            <?php if(isset($error)) echo "<p class='error'>$error</p>";?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required/>
                <input type="password" name="password" placeholder="Parola" required/>
                <button type="submit">Conecteaza-te</button>
            </form>
        </section>
    </body>

    <footer>
        <p>&copy; 2026 Dance School Dancers</p>
    </footer>
</html>