<!-- SECTION : BIG TITLE -->
<section class="big_title d-flex align-items-center">
    <p class="title_text_form text-white text-center fs-2 mx-auto">
        Bienvenue sur le formulaire <br>
        de création de comptes utilisateurs
    </p>
</section>

<!-- SECTION : CONTAINER INSCRIPTION -->
<section class="container_bg_secondary1 container p-5">
    <div class="container_form_style w-75">
        <div>
            <h4>INSCRIPTION</h4>
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
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Confirmez votre mot de passe :</label>
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
                    <button type="submit" class="btn btn-bg-dark" id="btnValidRegister">Créer le compte</button>
                </div>
            </form>
        </div>
    </div>
</section>