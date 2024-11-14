<?php

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
        if (password_verify($passwordForm, $monUser['password'])) {
            echo "Connexion réussie ! Bienvenue " . $monUser['firstname'] . " " . $monUser['lastname'];
        } else {
            echo "Email ou mot de passe incorrect";
        }
    } else {
        echo "Email ou mot de passe incorrect";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}