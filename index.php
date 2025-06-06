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
    <header>
        <div class="logo">
            <img src="assets/img/Le grimoire du vivant magique.png" alt="">
        </div>
        <h1>Le Grimoire du Vivant Magique</h1>
        <nav>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="Connection.php">Connection</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="#">Sorts</a></li>
            <li><a href="#">Bestiaire</a></li>
        </nav>
    </header>
    <main>
        <?php if (isset($_SESSION['users'])) {
            $nameUser = $_SESSION['users']['names'];
            echo '<p>bienvenue ' . $nameUser . '</p>';
        }
        ?>
    </main>
</body>

</html>