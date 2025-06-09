<header>
    <div class="logo">
        <img src="assets/img/Le grimoire du vivant magique.png" alt="">
    </div>
    <h1>Le Grimoire du Vivant Magique</h1>
    <nav>
        <?php
        if (isset($_SESSION['users'])) {
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="deconnection.php">Deconnection</a></li>';
            echo '<li><a href="#">Sorts</a></li>';
            echo '<li><a href="#">Bestiaire</a></li>';
        } else {
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="Connection.php">Connection</a></li>';
            echo '<li><a href="inscription.php">Inscription</a></li>';
            echo '<li><a href="#">Sorts</a></li>';
            echo '<li><a href="#">Bestiaire</a></li>';
        }
        ?>
    </nav>
</header>