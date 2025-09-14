const text = document.querySelector(".sec-text");
const textes = ["Lylia", "Développeuse Fullstack", "Freelance"];
let i = 0;

function textLoad() {
    const mot = textes[i];
    text.textContent = mot;

    // calcul de la largeur du texte
    text.style.setProperty("--characters", mot.length + "ch");

    // ptit rest pour l'animation
    text.style.animation = "none";
    void text.offsetWidth;
    text.style.animation = "typing 2s steps(" + mot.length + ", end), blink 0.7s step-end infinite";

    i = (i + 1) % textes.length;
}

textLoad();
setInterval(textLoad, 6000); // toutes les 6s

// Bouton pour remonter en haut

const scrollBtn = document.getElementById('scrollBtn');

window.onscroll = function () {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        scrollBtn.classList.add('show'); // afficher le bouton 
    } else {
        scrollBtn.classList.remove('show'); // cacher le bouton
    }
};

function scrollToTop() {
    window.scrollTo({
        top: 0, // tout la haut
        behavior: 'smooth' // pas rapide du coup en smooth
    });
}
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animationPlayState = 'running';
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in-up').forEach(el => {
    el.style.animationPlayState = 'paused';
    observer.observe(el);
});


// validation formulaire contact
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".form");
    const nom = document.getElementById("nom");
    const email = document.getElementById("email");
    const textarea = document.getElementById("message"); 
    const successMessage = document.getElementById("successMessage");
    const cCount = document.getElementById("char-count");
    const erreurs = {
        nom: document.getElementById("nomError"),
        email: document.getElementById("emailError"),
        message: document.getElementById("messageError")
    };

    const maxTextarea = 350;

    // au refresh
    form.reset();
    successMessage.classList.add("d-none");
    cCount.textContent = `${maxTextarea} caractères restants`;
    Object.values(erreurs).forEach(err => err.textContent = "");

    // fonction dimensionnement auto textarea
    function redimensionnerTextareaAuto(textarea) {
        const hauteurMin = 120; // minimum
        const hauteurMax = 300; // maximum


        textarea.style.resize = 'none';
        textarea.style.overflow = 'hidden';
        textarea.style.minHeight = hauteurMin + 'px';

        textarea.addEventListener('input', function () {
            // remettre la hauteur minimum
            this.style.height = hauteurMin + 'px';

            // calculer la nouvelle hauteur
            const nouvelleHauteur = Math.min(this.scrollHeight, hauteurMax);

            // applique la nouvelle hauteur
            this.style.height = nouvelleHauteur + 'px';

            //  on atteint la limite, permettre le défilement
            if (this.scrollHeight > hauteurMax) {
                this.style.overflow = 'auto';
            } else {
                this.style.overflow = 'hidden';
            }
        });
    }

    redimensionnerTextareaAuto(textarea);

    // majuscule auto nom
    nom.addEventListener("input", function () {
        this.value = this.value
            .toLowerCase()
            .replace(/\b\w/g, m => m.toUpperCase());
    });

    // restriction sur les champs
    const input = [nom, email, textarea];
    const interdit = /[";<>=]/g; // pour toutes les occurrences

    input.forEach(inputElement => {
        inputElement.addEventListener("input", function () {
            // supprimer les caractères interdits
            this.value = this.value.replace(interdit, "");

            // pour le textarea et le compteur
            if (this === textarea) {
                this.value = this.value.slice(0, maxTextarea);

                if (cCount) {
                    cCount.textContent = `${maxTextarea - this.value.length} caractères restants`;
                }
            }
        });
    });

    // validation au blur
    function validerInput(element, validationFn, errorMessage, inputId) {
        element.addEventListener("blur", function () {
            if (!this.value) {
                erreurs[inputId].textContent = "Ce champ est requis.";
            } else if (!validationFn(this.value)) {
                erreurs[inputId].textContent = errorMessage;
            } else {
                erreurs[inputId].textContent = "";
            }
        });
    }

    // regex
    function valideNom(valeur) {
        const regex = /^[A-Za-zÀ-ÖØ-öø-ÿ ]{5,}$/;
        return regex.test(valeur.trim());
    }

    function valideEmail(valeur) {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return regex.test(valeur);
    }

    function valideTextarea(valeur) {
        return valeur.trim().length >= 10;
    }

    validerInput(nom, valideNom, "Minimum 5 caractères alphabétiques.", "nom");
    validerInput(email, valideEmail, "Adresse email invalide.", "email");
    validerInput(textarea, valideTextarea, "le message doit faire minimum 10 caractères.", "message");

    // soumission du formulaire
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let isOk = true;

        // reinitialisation des erreurs
        Object.values(erreurs).forEach(err => err.textContent = "");

        if (!valideNom(nom.value)) {
            erreurs.nom.textContent = "Minimum 5 caractères alphabétiques.";
            isOk = false;
        }

        if (!valideEmail(email.value)) {
            erreurs.email.textContent = "Adresse email invalide.";
            isOk = false;
        }

        if (!valideTextarea(textarea.value)) {
            erreurs.message.textContent = "le message doit faire minimum 10 caractères.";
            isOk = false;
        }

        if (isOk) {
            // afficher message de succès
            successMessage.classList.remove("d-none");
            // réinitialiser le formulaire
            form.reset();
            cCount.textContent = `${maxTextarea} caractères restants`;
            // cacher le message après 5s
            setTimeout(() => {
                successMessage.classList.add("d-none");
            }, 5000);
        }
    });
}); 