<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');

$total_element = $bdd->prepare("SELECT id,user_id,type_creature_id,description_creature,image_creature
                                FROM creature");
$total_element->execute(array());

if (!empty($_POST['type_creature_id']) && !empty($_POST['name_creature']) && !empty($_POST['description_creature'])) {
    $name = htmlspecialchars($_POST['names']);
    $elements = $_POST['elements'];
    $password = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_ARGON2I);

    $requestCreate = $bdd->prepare('INSERT INTO users(names,user_role,pass) 
                                   VALUES(?,?,?)');
    $requestCreate->execute(array($name, 'gens', $password));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('./layout/header.php'); ?>
    <h2>Bienvenue dans le bestiaire</h2>

    <main>
        <!-- Aquatique -->
        <div class="">
            <h3>aquatique</h3>
            <div class="box-cards">
                <div class="card">
                    <div class="card-img"><img src="assets/img/elementaire_d'eau.jpg" alt=""></div>
                    <div>
                        <p>Elémentaire d'eau</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>

                <div class="card">
                    <div class="card-img"><img src="assets/img/kappa.jpg" alt=""></div>
                    <div>
                        <p>Kappa</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>

                <div class="card">
                    <div class="card-img"><img src="assets/img/kirin.jpg" alt=""></div>
                    <div>
                        <p>Kirin</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>
            *
            <!--Demoniaque  -->
            <div class="">
                <h3>demoniaque</h3>
                <div class="box-cards">
                    <div class="card">
                        <div class="card-img"><img src="assets/img/cerbere.jpg" alt=""></div>
                        <div>
                            <p>Cerbere</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/seigneur des abimes.jpg" alt=""></div>
                        <div>
                            <p>Seigneur des abimes</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/succube.jpg" alt=""></div>
                        <div>
                            <p>Succube</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/tourmenteur.jpg" alt=""></div>
                        <div>
                            <p>tourmenteur</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>
                </div>
                <!-- mi-bete -->
                <div class="">
                    <h3>mi-bete</h3>
                    <div class="box-cards">
                        <div class="card">
                            <div class="card-img"><img src="assets/img/centaure.jpg" alt=""></div>
                            <div>
                                <p>centaure</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/cyclope.jpg" alt=""></div>
                            <div>
                                <p>cyclope</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/harpie.jpg" alt=""></div>
                            <div>
                                <p>hapie</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/minotaure.png" alt=""></div>
                            <div>
                                <p>minotaure</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>
                    </div>
                    <!-- mort-vivant -->
                    <div class="">
                        <h3>demoniaque</h3>
                        <div class="box-cards">
                            <div class="card">
                                <div class="card-img"><img src="assets/img/fantome.jpg" alt=""></div>
                                <div>
                                    <p>fantome</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/lamasu.jpg" alt=""></div>
                                <div>
                                    <p>lamasu</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/liche.jpg" alt=""></div>
                                <div>
                                    <p>liche</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/squelette.jpg" alt=""></div>
                                <div>
                                    <p>squelette</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>

    </main>
</body>

</html>