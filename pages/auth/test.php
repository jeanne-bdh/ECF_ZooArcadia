<?php
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=zooArcadia';
$username = 'user_php_arcadia';
$password = 'G-m1mdppmu_pA';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM user";
    $stmt = $pdo->query($query);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Afficher les utilisateurs
    foreach ($user as $singleUser) {
        echo "ID : " . $singleUser['id_user'] . "<br>";
        echo "Nom : " . $singleUser['lastname'] . "<br>";
        echo "Prenom : " . $singleUser['firstname'] . "<br>";
        echo "email : " . $singleUser['email'] . "<br>";
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
