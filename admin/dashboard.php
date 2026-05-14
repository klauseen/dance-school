<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard Admin</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <nav>
            <div class="logo">Dance School "Dancers" - Admin</div>
            <ul>
                <li><a href="../index.html">Site</a></li>
                <li><a href="instructori.php">Instructori</a></li>
                <li><a href="cursuri.php">Cursuri</a></li>
                <li><a href="evenimente.php">Evenimente</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
        </nav>
        <section class="dashboard">
            <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
            <p>Ce poti gestiona</p>
            <div class="dashboard-grid">
                <a href="instructori.php" class="dashboard-card">
                    <h3>Cursuri</h3>
                    <p>Adauga, modifica sau sterge cursuri</p>
                </a>
                <a href="evenimente.php" class="dashboard-card">
                    <h3>Evenimente</h3>
                    <p>Adauga, modifica sau sterge evenimente</p>
                </a>
            </div>
        </section>
        <footer>
        <p>&copy; 2026 Dance School Dancers</p>
    </footer>
    </body>
</html>