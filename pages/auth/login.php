<!-- SECTION : BIG TITLE -->
<section class="big_title d-flex align-items-center">
    <p class="title_text_form text-white text-center fs-2 mx-auto">
        Bienvenue sur votre <br>
        espace de connexion.
    </p>
</section>

<?php

$errors = [];

if (isset($_POST['loginUser'])) {
    $monUser = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if ($monUser) {
        // Se connecter à la session
        $_SESSION['user'] = $monUser;
        header('location:sessionAdmin.php');
    } else {
        // Afficher une erreur
        $errors[] = "Email ou mot de passe incorrect";
    }
}
?>

<!-- SECTION : CONTAINER CONNEXION -->
<section class="container_bg_secondary1 container p-5">
    <div class="container_form_style w-75">
        <div>
            <h4>CONNEXION</h4>

            <?php foreach ($errors as $error) { ?>

                <div class="alert alert-danger role=" alert">
                    <?= $error; ?>
                </div>

            <?php } ?>

            <form action="/pages/auth/loginPost.php" method="POST">
                <div class="row mt-5 mb-3">
                    <label for="emailInputCo" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="emailInputCo" required>
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse e-mail valide.
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <label for="passwordInputCo" class="col-sm-2 col-form-label">Mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="passwordInputCo" required>
                        <div class="invalid-feedback">
                            Le mot de passe doit contenir au moins 8 caractères comprenant une lettre majuscule, une
                            minuscule, un chiffre et un caractère
                            spécial.
                        </div>
                        <div class="valid-feedback">
                            Le mot de passe est valide.
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-bg-dark" id="btn-validCo">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</section>