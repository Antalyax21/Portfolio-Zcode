<?php
include 'includes/header.php';
?>

<!-- Accueil -->
<section id="accueil" class="accueil d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h1 class="accueil-titre">
                    <span class="text-first">Bonjour ! Je suis</span>
                    <span class="sec-text" data-text="Lylia"></span>
                </h1>
                <h3 class="accueil-subtitle">Créatrice de solutions digitales</h3>
                <p class="accueil-description">Développeuse Fullstack passionnée par la création d'applications web
                    innovantes et performantes.</p>

                <!-- Boutons d'action -->
                <div class="accueil-buttons mt-4">
                    <a href="#contact" class="btn btn-primary me-3 mb-2">Me Contacter</a>
                    <a href="#projets" class="btn btn-outline-secondary mb-2">Voir mes Projets</a>
                </div>
            </div>
            <div class="col-md-6 text-center w-50">
                <img src="images/robot.png" class="img-fluid rounded-4 shadow-lg w-75" alt="Développeur Fullstack">

            </div>
        </div>
    </div>
</section>

<!-- À propos -->
<section id="apropos">
    <div class="container">
        <h2 class="titre-section">À propos</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="profile-card text-center">
                    <img src="images/robot.png" class="profile-avatar mx-auto d-block mb-4" alt="Lylia - Développeuse Fullstack">
                    <h3 class="mb-3" style="color: #9333ea; font-family: 'Poppins', sans-serif; font-weight: 600;">
                        Développeuse Passionnée
                    </h3>
                    <p class="lead mb-3" style="font-size: 1.1rem; line-height: 1.8;">
                        Je conçois des applications web modernes, élégantes et fonctionnelles, adaptées aux besoins
                        de mes clients.
                    </p>
                    <p>
                        Spécialisée dans les technologies modernes, je maîtrise le développement <strong>front-end
                            et back-end</strong>,
                        avec une attention particulière portée à l'expérience utilisateur et à la sécurité. Mon
                        objectif : créer des applications web robustes et esthétiques.
                        En parallèle, je me forme sur d'autre technologies pour enrichir mes
                        compétences et proposer des projets encore plus complets.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Compétences -->
<section id="competences">
    <div class="container">
        <h2 class="titre-section">Compétences</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <div class="carte text-center p-3">
                    <div class="competence-logos mb-3">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="tech-logo">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="tech-logo">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="tech-logo">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="tech-logo">
                    </div>
                    <h5>Front-End</h5>
                    <p style="font-size: 0.9rem;">HTML5, CSS3, JavaScript, Bootstrap, SEO technique</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="carte text-center p-3">
                    <div class="competence-logos mb-3">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="tech-logo">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="tech-logo">
                    </div>
                    <h5>Back-End</h5>
                    <p style="font-size: 0.9rem;">PHP, SQL, Architecture MVC</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="carte text-center p-3">
                    <div class="competence-logos mb-3">
                        <i class="fas fa-shield-alt fa-2x" style="color: #10b981;"></i>
                    </div>
                    <h5>Cybersécurité</h5>
                    <p style="font-size: 0.9rem;">Sécurité web, chiffrement, bonnes pratiques</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="carte text-center p-3 border-dashed">
                    <div class="competence-logos mb-3">
                        <div class="logo-wrapper">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original.svg" alt="Symfony" class="tech-logo learning symfony-logo">
                        </div>
                        <div class="logo-wrapper">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="tech-logo learning">
                        </div>
                        <div class="logo-wrapper">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" class="tech-logo learning">
                        </div>
                        <div class="logo-wrapper">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="tech-logo learning">
                        </div>
                    </div>
                    <h5>Technologies en cours de maîtrise</h5>
                    <p style="font-size: 0.9rem;">Symfony, React, Laravel, PostgreSQL</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Projets -->
<section id="projets">
    <div class="container ">
        <h2 class="titre-section">Projets</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/avocat.png" alt="Site vitrine Avocat" class="img-fluid rounded">
                    </div>
                    <h5>Site vitrine Avocat</h5>
                    <p>Site professionnel pour un cabinet d'avocat.</p>
                    <a href="https://antalyax21.github.io/Vitrine-Avocat/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir le
                        site</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/plombier.png" alt="Site vitrine Plombier" class="img-fluid rounded">
                    </div>
                    <h5>Site vitrine Plombier</h5>
                    <p>Présentation des services et contact facile pour un plombier.</p>
                    <a href="https://antalyax21.github.io/Vitrine-Plombier-/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir
                        le site</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/wedding.png" alt="Site vitrine Wedding Planner" class="img-fluid rounded">
                    </div>
                    <h5>Site vitrine Wedding Planner</h5>
                    <p>Portfolio et services d'organisation de mariage.</p>
                    <a href="https://antalyax21.github.io/Wedding-planner/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir
                        le site</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/mon-site.png" alt="Mon site portfolio" class="img-fluid rounded">
                    </div>
                    <h5>Mon site portfolio</h5>
                    <p>Mon propre site vitrine pour présenter mes projets et compétences.</p>
                    <a href="https://monportfolio.com" target="_blank" class="btn btn-primary btn-sm mt-2">Voir le
                        site</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/saas-gestion.png" alt="SaaS" class="img-fluid rounded">
                    </div>
                    <h5>SaaS Outils de gestion administrative</h5>
                    <p>Un outil d’assistance administrative en ligne destiné aux particuliers.
                        L’application propose un accompagnement simple et rapide via visio ou prise en main à distance, sans collecte ni stockage de données sensibles.
                        <span class="badge bg-warning text-dark">En développement</span>
                    </p>
                    <button class="btn btn-secondary btn-sm mt-2" disabled>Aperçu bientôt</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/saas-analytics.png" alt="SaaS" class="img-fluid rounded">
                    </div>
                    <h5>SaaS Mise en relation prestation</h5>
                    <p>Développement d’un site destiné à faciliter la mise en relation entre professionnels et clients. <span class="badge bg-warning text-dark">En développement</span></p>
                    <button class="btn btn-secondary btn-sm mt-2" disabled>Aperçu bientôt</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 fad-in-up" style="animation-delay: 0.2s;">
                <div class="carte text-center p-3">
                    <div class="projet-image mb-3">
                        <img src="images/app-gestion-perso.png" alt="App Gestion Personnelle" class="img-fluid rounded">
                    </div>
                    <h5>App Gestion Business</h5>
                    <p>Application personnelle : devis, factures, planning et documents. <span class="badge bg-info text-white">Usage privé</span></p>
                    <button class="btn btn-outline-primary btn-sm mt-2" disabled>Projet personnel</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact -->
<section id="contact">
    <div class="container">
        <h2 class="titre-section">Contact</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="carte">
                    <div class="text-center mb-4">
                        <p class="lead">Vous avez un projet en tête ? Discutons-en !</p>
                    </div>
                    <!-- Formulaire CORRECT -->
                    <form class="form" method="post"id="contactForm">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required maxlength="30">
                            <span class="errorMessage" id="nomError"></span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                            <span class="errorMessage" id="emailError"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Décrivez votre projet..." required></textarea>
                            <div id="char-count">350 caractères restants</div>
                            <span class="errorMessage" id="messageError"></span>
                        </div>

                        <div id="successMessage" class="alert alert-success d-none" role="alert">
                            Merci pour votre message ! Je vous répondrai dans les plus brefs délais.
                        </div>

                        <!-- champ anti-spam caché -->
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                        <button type="submit" class="btn btn-primaire w-100">
                            <i class="fas fa-paper-plane me-2" style="color: white;"></i>Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>

