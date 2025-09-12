<?php
include '../includes/header.php';
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
                    <div class="profile-card">
                        <img src="images/robot.png" class="profile-avatar" alt="Lylia - Développeuse Fullstack">

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
                        <i class="fas fa-laptop-code fa-2x mb-3" style="color: #3b82f6;"></i>
                        <h5>Front-End</h5>
                        <p style="font-size: 0.9rem;">HTML5, CSS3, JavaScript, Bootstrap</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-database fa-2x mb-3" style="color: #f59e0b;"></i>
                        <h5>Back-End</h5>
                        <p style="font-size: 0.9rem;">PHP, SQL, Architecture MVC</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-shield-alt fa-2x mb-3" style="color: #10b981;"></i>
                        <h5>Cybersécurité</h5>
                        <p style="font-size: 0.9rem;">Sécurité web, chiffrement, bonnes pratiques</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="carte text-center p-3 border-dashed">
                        <i class="fas fa-code fa-2x mb-3" style="color: #9333ea;"></i>
                        <h5>Technologies en cours de maîtrise</h5>
                        <p style="font-size: 0.9rem;">Symfony, React, Laravel, PostgreSQL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Projets -->
    <section id="projets">
        <div class="container">
            <h2 class="titre-section">Projets</h2>
            <div class="row g-4">

                <div class="col-md-6 col-lg-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-gavel fa-2x mb-3" style="color: #3b82f6;"></i>
                        <h5>Site vitrine Avocat</h5>
                        <p>Site professionnel pour un cabinet d’avocat.</p>
                        <a href="https://antalyax21.github.io/Vitrine-Avocat/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir le
                            site</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-tools fa-2x mb-3" style="color: #f59e0b;"></i>
                        <h5>Site vitrine Plombier</h5>
                        <p>Présentation des services et contact facile pour un plombier.</p>
                        <a href="https://antalyax21.github.io/Vitrine-Plombier-/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir
                            le site</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-heart fa-2x mb-3" style="color: #663540;"></i>
                        <h5>Site vitrine Wedding Planner</h5>
                        <p>Portfolio et services d’organisation de mariage.</p>
                        <a href="https://antalyax21.github.io/Wedding-planner/" target="_blank" class="btn btn-primary btn-sm mt-2">Voir
                            le site</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="carte text-center p-3">
                        <i class="fas fa-robot fa-2x mb-3" style="color: #9333ea;"></i>
                        <h5>Mon site portfolio</h5>
                        <p>Mon propre site vitrine pour présenter mes projets et compétences.</p>
                        <a href="https://monportfolio.com" target="_blank" class="btn btn-primary btn-sm mt-2">Voir le
                            site</a>
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
                        <form>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" placeholder="votre@email.com"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Décrivez votre projet ou votre demande..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primaire w-100">
                                <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    include '../includes/footer.php';
    ?>

