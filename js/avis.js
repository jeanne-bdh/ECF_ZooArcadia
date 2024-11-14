const pseudoInput = document.getElementById("InputPseudo");
const btnAvis = document.getElementById("btn-avis");

pseudoInput.addEventListener("keyup", validateAvis);


// Fonction valide le formulaire
function validateAvis() {
    const pseudoOk = validateText(pseudoInput);

    // Pour que le bouton soit cliquable
    if (pseudoOk) {
        btnAvis.disabled = false;
    }
    else {
        btnAvis.disabled = true;
    }
}

// Fonction valide le texte requis (titre & message)
function validateText(input) {
    const textAvisRegex = /.+/;
    const textAvisUser = input.value;
    if (textAvisUser.match(textAvisRegex)) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    }
    else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}
