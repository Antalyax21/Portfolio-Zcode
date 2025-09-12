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
        
        window.onscroll = function() {
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
        
        const observer = new IntersectionObserver(function(entries) {
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

      