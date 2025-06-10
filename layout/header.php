<header>
    <div class="logo">
        <img src="assets/img/Le grimoire du vivant magique.png" alt="">
    </div>
    <h1>Le Grimoire du Vivant Magique</h1>
    <nav>
        <?php
        if (isset($_SESSION['users'])) {
            echo '<ul class="menu">';
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="deconnection.php">Deconnection</a></li>';
            echo '<li><a href="sort.php">Sorts</a></li>';
            echo '<li><a href="bestiaire.php">Bestiaire</a></li>';
            echo '</ul>';
            echo '<div class="burger">';
            echo '<div class="burger-menu">';
            echo '<i class="fa-solid fa-bars"></i>';
            echo '</div>';
            echo '<ul class="burger-contenue">';
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="deconnection.php">Deconnection</a></li>';
            echo '<li><a href="sort.php">Sorts</a></li>';
            echo '<li><a href="bestiaire.php">Bestiaire</a></li>';
            echo '</ul>';
            echo '</div>';
        } else {
            echo '<ul class="menu">';
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="Connection.php">Connection</a></li>';
            echo '<li><a href="inscription.php">Inscription</a></li>';
            echo '<li><a href="sort.php">Sorts</a></li>';
            echo '<li><a href="bestiaire.php">Bestiaire</a></li>';
            echo '</ul>';
            echo '<div class="burger">';
            echo '<div class="burger-menu">';
            echo '<i class="fa-solid fa-bars"></i>';
            echo '</div>';
            echo '<ul class="burger-contenue">';
            echo '<li><a href="index.php">Acceuil</a></li>';
            echo '<li><a href="Connection.php">Connection</a></li>';
            echo '<li><a href="inscription.php">Inscription</a></li>';
            echo '<li><a href="sort.php">Sorts</a></li>';
            echo '<li><a href="bestiaire.php">Bestiaire</a></li>';
            echo '</ul>';
            echo '</div>';
        }
        ?>
    </nav>
</header>