<!-- SECTION : BIG TITLE -->
<section class="big_title d-flex align-items-center">
    <h1>CONTACT</h1>
</section>

<!-- SECTION : CONTAINER CONTACT -->
<section class="container_bg_secondary1 container p-5">
    <div class="container_form_style container_form_contact">
        <form>
            <div class="mb-3">
                <label for="InputTitle" class="form-label">Titre :</label>
                <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Sujet">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3"">
                <label for=" InputEmail" class="form-label">Email :</label>
                <input type="email" name="emailform" class="form-control" id="InputEmail" placeholder="votre.email@gmail.com">
                <div class="invalid-feedback">
                    Veuillez entrer une adresse e-mail valide.
                </div>
            </div>
            <div class="mb-3">
                <label for="FormControlMessageContact" class="form-label">Message :</label>
                <textarea class="form-control" name="message" id="FormControlMessageContact" rows="3" placeholder="..."></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="text-center">
                <button type="submit" id="btn-contact-form" class="btn btn-bg-dark mt-4 px-3 py-2">Soumettre</button>
            </div>
        </form>
    </div>
</section>