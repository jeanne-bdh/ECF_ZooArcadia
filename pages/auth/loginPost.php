<?php

require_once __DIR__ . "/session.php";

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=zooArcadia';
$username = 'user_php_arcadia';
$password = 'G-m1mdppmu_pA';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire de connexion
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    // Récupérer les utilisateurs 
    $query = "SELECT * FROM user WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    // Est-ce que l’utilisateur (email) existe ?
    if ($stmt->rowCount() == 1) {
        $monUser = $stmt->fetch(PDO::FETCH_ASSOC);

        // Se connecter à la session
        if (password_verify($passwordForm, $monUser['password'])) {
            $_SESSION['monUser'] = $monUser;
            header('location: /../pages/admin/sessionAdmin.php');
        } else {
            // Le mot de passe est incorrect
            $errors[] = "Mot de passe incorrect (à changer)";
        }
    } else {
        // L'email n'existe pas
        $errors[] = "Utilisateur introuvable, êtes-vous sûr de votre mail ? (à changer)";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
