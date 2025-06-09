<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('./layout/header.php'); ?>
    <main>
        <?php if (isset($_SESSION['users'])) {
            echo '<h2>bienvenue ' . $_SESSION['users']['names'] . '</h2>';
        }
        ?>
    </main>
</body>

</html>