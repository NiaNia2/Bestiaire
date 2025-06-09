<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');

$total_element = $bdd->prepare("SELECT id,name_element 
                                FROM element");
$total_element->execute(array());

if (!empty($_POST['names']) && !empty($_POST['pass']) && !empty($_POST['elements'])) {
    $name = htmlspecialchars($_POST['names']);
    $elements = $_POST['elements'];
    $password = password_hash(htmlspecialchars($_POST['pass']), PASSWORD_ARGON2I);

    $requestCreate = $bdd->prepare('INSERT INTO users(names,user_role,pass) 
                                   VALUES(?,?,?)');
    $requestCreate->execute(array($name, 'gens', $password));

    $requestSelect = $bdd->prepare("SELECT id,names,user_role 
                                    FROM users 
                                    WHERE names = ?");
    $requestSelect->execute(array($name));
    $data = $requestSelect->fetch();

    $requestLink = $bdd->prepare('INSERT INTO userElement (users_id, element_id) 
                                  VALUES (?,?)');
    $array_element = [];
    foreach ($elements as $element) {
        list($element_id, $element_name) = explode(',', $element);
        $array_element = [(int)$element_id, $element_name];
        $requestLink->execute(array($data['id'], (int)$element_id));
    }

    $_SESSION['users'] = ['id' => $data['id'], 'names' => $data['names'], 'role' => $data['user_role'], 'elements' => $array_element];

    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include('./layout/header.php'); ?>
    <main>
        <div class="form">
            <form action="inscription.php" method="post">
                <label for="names"> Nom: </label>
                <input type="text" name="names" required>
                <label for="pass">Mot de passe: </label>
                <input type="pass" name="pass" required>
                <?php
                while ($elements = $total_element->fetch()) {
                    echo '<label>' . $elements['name_element'] . '</label>';
                    echo '<input type="checkbox" name="elements[]" value="' . $elements['id'] . ',' . $elements['name_element'] . '" >';
                }
                ?>
                <button class="btn">Envoyer</button>
            </form>
        </div>
    </main>
</body>

</html>