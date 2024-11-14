<!-- SECTION : BIG TITLE -->
<section class="big_title d-flex align-items-center">
    <p class="title_text_form text-white text-center fs-2 mx-auto">
        Rédigez un avis
    </p>
</section>

<!-- SECTION : CONTAINER FORMULAIRE AVIS -->
<section class="container_bg_secondary1 container p-5">
    <div class="container_form_style" id="container_form_contact">
        <form>
            <div class="mb-3">
                <label for="InputPseudo" class="form-label">Pseudo :</label>
                <input type="text" name="pseudo" class="form-control" id="InputPseudo" placeholder="pseudo">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <!-- 5 ETOILES-->
            <div>
                <label for="InputTitle" class="form-label">Votre note :</label>
                <div class="container_stars d-flex mb-3">
                    <div class="form-check">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label for="flexRadioDefault1"><i class="bi bi-star"></i></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label for="flexRadioDefault2"><i class="bi bi-star"></i></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                        <label for="flexRadioDefault3"><i class="bi bi-star"></i></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                        <label for="flexRadioDefault4"><i class="bi bi-star"></i></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                        <label for="flexRadioDefault5"><i class="bi bi-star"></i></label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="FormControlMessageAvis" class="form-label">Votre avis :</label>
                <textarea class="form-control" name="textavis" id="FormControlMessageAvis" rows="3"
                    placeholder="Racontez-nous votre expérience"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-bg-dark mt-4 px-3 py-2" id="btn-avis">Soumettre</button>
            </div>
        </form>
    </div>
</section>