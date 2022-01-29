<?php

    require __DIR__ . '/credentials.php';

    if (isset($_POST['Envoyer'])) {
        $username = $_POST['username'] ?? '';
        $passwd = $_POST['password'] ?? '';
        if ($username === $login && $password === $passwd) {
            $_SESSION['connected'] = true;
            $_SESSION['username'] = $username;
            echo "Connexion ok";
            header('Location: /admin.php');
        }
        else {
            echo "Nom d'utilisateur ou mot de passe erroné";
        }
}

?>

<form action="login.php" method="post">

    <label for="username">Entrez votre nom ou pseudo </label>
    <input type="text" name="username" id="username">

    <label for="password">Votre mot de passe</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Envoyer" name="Envoyer" id="submit">
</form>


