<?php

require_once __DIR__ . "/../pages/auth/session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/scss/main.css">

    <title>ZOO ARCADIA</title>
</head>

<body>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <img src="/public/assets/css/images/Logo Arcadia.svg" alt="Logo Arcadia : un rhinocéros dans un soleil levant">
                <a class="navbar-brand ms-2" href="/">ZOO ARCADIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/habitats">Nos habitats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['monUser'])) { ?>
                                <a class="btn btn-primary me-2" href="/pages/auth/logout.php">Déconnexion</a>
                            <?php } else { ?>
                                <a class="btn btn-outline-primary me-2" href="/login">Connexion</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>