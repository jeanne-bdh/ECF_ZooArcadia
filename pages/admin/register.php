<?php

require_once __DIR__ . "/sidebarAdmin.php";

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Créer un compte utilisateur</h1>
    </div>

    <!-- SECTION : CONTAINER INSCRIPTION -->
    <section class="container_form_style w-75 my-5">
        <div>
            <form action="/pages/admin/registerPost.php" method="post">
                <div class="row mt-5 mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom :</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastname" class="form-control" id="lastnameInput" required>
                        <div class="invalid-feedback">
                            Le nom est requis.
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Prénom :</label>
                    <div class="col-sm-10">
                        <input type="text" name="firstname" class="form-control" id="firstnameInput" required>
                        <div class="invalid-feedback">
                            Le prénom est requis.
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="emailInput" required>
                        <div class="invalid-feedback">
                            Veuillez entrer une adresse e-mail valide.
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="passwordInput" required>
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
                <div class="row mt-5 mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Confirmez le mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" name="validpassword" class="form-control" id="validatePasswordInput"
                            required>
                        <div class="invalid-feedback">
                            La confirmation du mot de passe est incorrecte.
                        </div>
                        <div class="valid-feedback">
                            Le mot de passe est validé.
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-bg-dark" id="btnValidRegister">Inscrire</button>
                </div>
            </form>
        </div>
    </section>
</main>
</div>
</div>