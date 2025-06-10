<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');

if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $name = htmlspecialchars($_POST['name']);

    $password = htmlspecialchars($_POST['password']);

    $requestcreate = $bdd->prepare("SELECT id,names,user_role,pass FROM users WHERE names = ?");
    $requestcreate->execute(array($name));
    $data = $requestcreate->fetch();
    if (password_verify($password, $data['pass'])) {
        $_SESSION['users'] = ['id' => $data['id'], 'names' => $data['names'], 'role' => $data['user_role'], 'elements' => $array_element];
        header('location:index.php');
    } else {
        echo '<p class="error">Mot de passe ou nom d\'utilisateur incorrect<p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/img/lib/font-awesome/all/all.css.css">
</head>

<body>
    <?php include('./layout/header.php'); ?>
    <main>
        <div class="form">
            <form action="connection.php" method="post">
                <label for="names"> Nom: </label>
                <input type="text" name="name">
                <label for="password">Mot de passe: </label>
                <input type="password" name="password">
                <button class="btn">Envoyer</button>
            </form>
        </div>
    </main>
</body>

</html>