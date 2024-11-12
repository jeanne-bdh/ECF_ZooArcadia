<?php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=zooArcadia';
$username = 'user_php_arcadia';
$password = 'G-m1mdppmu_pA';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire d’inscription 
    $lastnameForm = $_POST['lastname'];
    $firstnameForm = $_POST['firstname'];
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    // Récupérer les utilisateurs 
    $query = "SELECT * FROM user WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    // Est-ce que l’utilisateur (email) existe ?
    if ($stmt->rowCount() > 0) {
        die("Cette adresse email est déjà utilisée");
    }

    // Hashage (encryptage)
    $hashedPassword = password_hash($passwordForm, PASSWORD_BCRYPT);

    // Insérer les données dans la base 
    $insertQuery = "INSERT INTO user (lastname, firstname, email, password) VALUES (:lastname, :firstname, :email, :password)";
    $stmt = $pdo->prepare($insertQuery);
    $stmt->bindParam(':lastname', $lastnameForm);
    $stmt->bindParam(':firstname', $firstnameForm);
    $stmt->bindParam(':email', $emailForm);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->execute();

    echo "Inscription réussie";
} catch (PDOException $e) {
    echo "Erreur lors de l’inscription : " . $e->getMessage();
}
