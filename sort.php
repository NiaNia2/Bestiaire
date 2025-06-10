<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');
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
    <h2>Joue avec tes sorts</h2>

    <main>
        <!-- Air -->
        <div class="">
            <h3>air</h3>
            <div class="box-cards">
                <div class="card">
                    <div class="card-img"><img src="assets/img/Eclair.webp" alt=""></div>
                    <div>
                        <p>Eclair</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>

                <div class="card">
                    <div class="card-img"><img src="assets/img/Elementair d'air.webp" alt=""></div>
                    <div>
                        <p>elementaire d'air</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>

                <div class="card">
                    <div class="card-img"><img src="assets/img/Vent violent.webp" alt=""></div>
                    <div>
                        <p>Vent violent</p>
                    </div>
                    <a href="" class="btn">Voir plus</a>
                </div>
            </div>
            *
            <!--Eau  -->
            <div class="">
                <h3>eau</h3>
                <div class="box-cards">
                    <div class="card">
                        <div class="card-img"><img src="assets/img/Armure de glace.webp" alt=""></div>
                        <div>
                            <p>Armure de glace</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/Blizzard.webp" alt=""></div>
                        <div>
                            <p>Blizzard</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/Cercle de l'hiver.webp" alt=""></div>
                        <div>
                            <p>Cercle d'hivers</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/Elementaire d'eau.webp" alt=""></div>
                        <div>
                            <p>elementaire d'eau</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>

                    <div class="card">
                        <div class="card-img"><img src="assets/img/mur_de_glace.webp" alt=""></div>
                        <div>
                            <p>Mur de glace</p>
                        </div>
                        <a href="" class="btn">Voir plus</a>
                    </div>
                </div>
                <!-- feu -->
                <div class="">
                    <h3>feu</h3>
                    <div class="box-cards">
                        <div class="card">
                            <div class="card-img"><img src="assets/img/bouclier_de_feu.webp" alt=""></div>
                            <div>
                                <p>bouclier de feu</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/boule_de_feu.webp" alt=""></div>
                            <div>
                                <p>boule de feu</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/Elementaire de feu.webp" alt=""></div>
                            <div>
                                <p>elementaire de feu</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/Immolation.webp" alt=""></div>
                            <div>
                                <p>Immolation</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>

                        <div class="card">
                            <div class="card-img"><img src="assets/img/Tempête de feu.webp" alt=""></div>
                            <div>
                                <p>Tempete de feu</p>
                            </div>
                            <a href="" class="btn">Voir plus</a>
                        </div>
                    </div>
                    <!-- Lumiere -->
                    <div class="">
                        <h3>lumiere</h3>
                        <div class="box-cards">
                            <div class="card">
                                <div class="card-img"><img src="assets/img/armure_celeste.webp" alt=""></div>
                                <div>
                                    <p>armure celeste</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/Elementaire de lumière.webp" alt=""></div>
                                <div>
                                    <p>elementaire de lumiere</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/Purification.webp" alt=""></div>
                                <div>
                                    <p>purification</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>

                            <div class="card">
                                <div class="card-img"><img src="assets/img/Retribution.webp" alt=""></div>
                                <div>
                                    <p>retribution</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>
                            <div class="card">
                                <div class="card-img"><img src="assets/img/soin.webp" alt=""></div>
                                <div>
                                    <p>soinsn</p>
                                </div>
                                <a href="" class="btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
</body>

</html>