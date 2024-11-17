const inputEmailCo = document.getElementById("emailInputCo");
const inputPasswordCo = document.getElementById("passwordInputCo");
const btnValidCo = document.getElementById("btn-validCo");

inputEmailCo.addEventListener("keyup", validateFormCo);
inputPasswordCo.addEventListener("keyup", validateFormCo);

// Fonction valide le formulaire
function validateFormCo() {
    const emailCoOk = validateEmailCo(inputEmailCo);
    const passwordCoOk = validatePasswordCo(inputPasswordCo);

    // Pour que le bouton soit cliquable
    if (emailCoOk && passwordCoOk) {
        btnValidCo.disabled = false;
    }
    else {
        btnValidCo.disabled = true;
    }
}

// Fonction valide l'email
function validateEmailCo(input) {
    const emailCoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailCoUser = input.value;
    if (mailCoUser.match(emailCoRegex)) {
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

// Fonction valide le mot de passe
function validatePasswordCo(input) {
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    const passwordUser = input.value;
    if (passwordUser.match(passwordRegex)) {
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
