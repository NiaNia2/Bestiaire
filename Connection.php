<?php ob_start();
session_start();

$bdd = new PDO('mysql:host=mysql;dbname=Bestiaire;charset=utf8', 'root', 'root');

if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['pass'])) {
    $name = htmlspecialchars($_POST['names']);

    $password = htmlspecialchars($_POST['pass']);

    $requestcreate = $bdd->prepare("SELECT id,names,user_role,pass FROM users WHERE nom = ?");
    $requestcreate->execute(array($name));
    $data = $requestcreate->fetch();
    if (password_verify($password, $data['pass'])) {
        $_SESSION['users'] = ['id' => $data['id'], 'nom' => $data['nom']];
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
</head>

<body>

    <form action="connection.php" method="post">
        <label for="names"> Nom: </label>
        <input type="text" name="name">
        <label for="password">Mot de passe: </label>
        <input type="password" name="password">
        <button class="btn">Envoyer</button>
    </form>
</body>

</html>