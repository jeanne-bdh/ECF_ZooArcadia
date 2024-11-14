const titleInput = document.getElementById("InputTitle");
const emailInput = document.getElementById("InputEmail");
const messageInput = document.getElementById("FormControlMessageContact");
const btnContactForm = document.getElementById("btn-contact-form");

titleInput.addEventListener("keyup", validateFormCo);
emailInput.addEventListener("keyup", validateFormCo);
messageInput.addEventListener("keyup", validateFormCo);

// Fonction valide le formulaire
function validateContact() {
    const titleContactOk = validateTitleContact(titleInput);
    const emailContactOk = validateEmailContact(emailInput);
    const messageContactOk = validateMessage(messageInput);

    // Pour que le bouton soit cliquable
    if (titleContactOk && emailContactOk && messageContactOk) {
        btnContactForm.disabled = false;
    }
    else {
        btnContactForm.disabled = true;
    }
}

// Fonction valide le titre
function validateTitleContact(input) {
    const titleContactRegex = /.+/;
    const titleContactUser = input.value;
    if (titleContactUser.match(titleContactRegex)) {
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

// Fonction valide l'email
function validateEmailContact(input) {
    const emailContactRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailContactUser = input.value;
    if (mailContactUser.match(emailContactRegex)) {
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
