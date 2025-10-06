<?php
include '../includes/header.php';
?>

<body class="bg-dark text-light">
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center position-relative">
        <div class="hero-overlay"></div>
        <div class="container position-relative z-index-2">
            <div class="hero-content">
                <h1 class="display-3 mb-4 text-gradient">Politique de Confidentialité</h1>
                <p class="lead mb-4">Protection de vos données personnelles</p>
                <p class="small">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Responsable de traitement -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-user-shield me-2"></i>1. Responsable du traitement
                    </h2>
                    <div class="content-box">
                        <p class="mb-2"><strong>Lylia Franchet Sioua | Code z Digitales Solutions</strong> – Développeuse Fullstack</p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            Email : <a href="mailto:Code.z27@hotmail.com" class="neon-link">Code.z27@hotmail.com</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            Téléphone : 06 52 82 63 64
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Adresse : France
                        </p>
                    </div>
                </section>

                <!-- Données collectées -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-database me-2"></i>2. Données personnelles collectées
                    </h2>
                    <div class="content-box">
                        <h5 class="text-light mb-3">Données collectées directement :</h5>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Formulaire de contact :</strong> nom, prénom, adresse email, message</li>
                        </ul>

                        <h5 class="text-light mb-3">Données collectées automatiquement :</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Données de navigation :</strong> adresse IP, type de navigateur, pages visitées</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Données techniques :</strong> date et heure de connexion, durée de visite</li>
                        </ul>
                    </div>
                </section>

                <!-- Finalités -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-bullseye me-2"></i>3. Finalités du traitement
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">Vos données personnelles sont collectées et traitées pour les finalités suivantes :</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i><strong>Répondre à vos demandes :</strong> traitement et réponse aux messages via le formulaire de contact</li>
                            <li class="mb-2"><i class="fas fa-arrow-right text-primary me-2"></i><strong>Amélioration du site :</strong> analyse des statistiques de fréquentation</li>
                            <li class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i><strong>Sécurité :</strong> prévention des abus et protection contre les attaques</li>
                        </ul>
                    </div>
                </section>

                <!-- Base légale -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-balance-scale me-2"></i>4. Base légale du traitement
                    </h2>
                    <div class="content-box">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Consentement :</strong> pour l'envoi de messages via le formulaire de contact</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i><strong>Intérêt légitime :</strong> pour les statistiques de fréquentation et la sécurité du site</li>
                        </ul>
                    </div>
                </section>

                <!-- Destinataires -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-users me-2"></i>5. Destinataires des données
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">Vos données personnelles sont destinées à :</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-user text-info me-2"></i><strong>Le responsable du traitement :</strong> Lylia Franchet Sioua (accès complet)</li>
                            <li class="mb-2"><i class="fas fa-server text-warning me-2"></i><strong>L'hébergeur :</strong> [...] (données techniques uniquement)</li>
                            <li class="mb-0"><i class="fas fa-shield-alt text-danger me-2"></i><strong>Aucun tiers commercial :</strong> vos données ne sont ni vendues, ni louées, ni transmises</li>
                        </ul>
                    </div>
                </section>

                <!-- Durée de conservation -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-clock me-2"></i>6. Durée de conservation
                    </h2>
                    <div class="content-box">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-envelope text-primary me-2"></i><strong>Messages de contact :</strong> 2 ans maximum après la dernière interaction</li>          
                        </ul>
                    </div>
                </section>

                <!-- Droits des utilisateurs -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-key me-2"></i>7. Vos droits
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">Conformément au RGPD et à la loi Informatique et Libertés, vous disposez des droits suivants :</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-eye text-info me-2"></i><strong>Droit d'accès :</strong> consulter vos données</li>
                                    <li class="mb-2"><i class="fas fa-edit text-warning me-2"></i><strong>Droit de rectification :</strong> corriger vos données</li>
                                    <li class="mb-2"><i class="fas fa-trash text-danger me-2"></i><strong>Droit d'effacement :</strong> supprimer vos données</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-download text-success me-2"></i><strong>Droit à la portabilité :</strong> récupérer vos données</li>
                                    <li class="mb-2"><i class="fas fa-hand-paper text-secondary me-2"></i><strong>Droit d'opposition :</strong> refuser le traitement</li>
                                    <li class="mb-2"><i class="fas fa-pause text-primary me-2"></i><strong>Droit de limitation :</strong> limiter le traitement</li>
                                </ul>
                            </div>
                        </div>
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Comment exercer vos droits :</strong> Contactez-nous à <a href="mailto:Code.z27@hotmail.com" class="neon-link">Code.z27@hotmail.com</a> en précisant votre demande.
                        </div>
                    </div>
                </section>

                <!-- Sécurité -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-lock me-2"></i>8. Sécurité des données
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">Nous mettons en œuvre des mesures techniques et organisationnelles appropriées :</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-certificate text-success me-2"></i><strong>Chiffrement HTTPS :</strong> sécurisation des échanges</li>
                            <li class="mb-2"><i class="fas fa-shield-alt text-info me-2"></i><strong>Accès restreint :</strong> limitation de l'accès aux seules personnes autorisées</li>
                            <li class="mb-2"><i class="fas fa-save text-warning me-2"></i><strong>Sauvegardes régulières :</strong> protection contre la perte de données</li>
                            <li class="mb-0"><i class="fas fa-bug text-danger me-2"></i><strong>Mise à jour :</strong> maintenance régulière des systèmes</li>
                        </ul>
                    </div>
                </section>

                <!-- Cookies -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-cookie-bite me-2"></i>9. Politique des cookies
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">Ce site peut utiliser des cookies techniques nécessaires au fonctionnement,
                            mais aucun cookie publicitaire ou de tracking.</p>
                </section>

                <!-- Réclamations -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-exclamation-circle me-2"></i>10. Réclamations
                    </h2>
                    <div class="content-box">
                        <p class="mb-3">En cas de difficulté dans l'exercice de vos droits, vous pouvez :</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-phone text-info me-2"></i><strong>Nous contacter directement :</strong> Code.z27@hotmail.com</li>
                            <li class="mb-0"><i class="fas fa-landmark text-warning me-2"></i><strong>Saisir la CNIL :</strong> <a href="https://www.cnil.fr/fr/plaintes" target="_blank" class="neon-link">www.cnil.fr/fr/plaintes</a></li>
                        </ul>
                    </div>
                </section>

                <!-- Modifications -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-sync-alt me-2"></i>11. Modifications de la politique
                    </h2>
                    <div class="content-box">
                        <p class="mb-2">Cette politique de confidentialité peut être mise à jour pour refléter les changements dans nos pratiques ou la réglementation.</p>
                        <p class="mb-0">Les modifications importantes vous seront notifiées par email ou via un avis sur le site web.</p>
                    </div>
                </section>

                <!-- Contact -->
                <section class="glass-card p-4 mb-4">
                    <h2 class="text-gradient mb-3">
                        <i class="fas fa-envelope me-2"></i>12. Contact
                    </h2>
                    <div class="content-box">
                        <p class="mb-2">Pour toute question concernant cette politique de confidentialité ou le traitement de vos données personnelles :</p>
                        <div class="contact-info">
                            <p class="mb-2"><i class="fas fa-envelope me-2"></i>Email : <a href="mailto:Code.z27@hotmail.com" class="neon-link">Code.z27@hotmail.com</a></p>
                            <p class="mb-0"><i class="fas fa-phone me-2"></i>Téléphone : 06 52 82 63 64</p>
                        </div>
                    </div>
                </section>

                <!-- Back to home button -->
                <div class="text-center mt-5">
                    <a href="../index.php" class="btn-custom me-3">
                        <i class="fas fa-home me-2"></i>Retour à l'accueil
                    </a>
                    <a href="mentions-legales.php" class="btn-custom">
                        <i class="fas fa-gavel me-2"></i>Mentions légales
                    </a>
                </div>
            </div>
        </div>
    </main>

    
    <?php
    include '../includes/footer.php';
    ?>