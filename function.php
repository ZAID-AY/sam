<?php
session_start();

include 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $password = $_POST['password'];

    if ($stmt = $conn->prepare('SELECT id, password FROM admin WHERE Nom = ?')) {
        $stmt->bind_param('s', $nom);
        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $dbPassword);
            $stmt->fetch();
            if ($password === $dbPassword) {
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['nom'] = $nom;
                $_SESSION['id'] = $id;
                header('Location: Dashboard/index.php');
                exit();
            } else {
                echo "<script>";
                echo "alert('Mot de passe incorrecte!');";
                echo "window.location.href = 'login.php';";
                echo "</script>";
            }
        } else {

            header('refresh:1;url=login.php');
        }

        $stmt->close();
    } else {
        $error = 'Une erreur s\'est produite lors de l\'exécution de la requête.';
    }
}
?>













