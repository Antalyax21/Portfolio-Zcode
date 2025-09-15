CodeZ Portfolio

Bienvenue sur mon portfolio en ligne ! 🌐
Ce repository contient le code source de mon portfolio personnel, développé en HTML, CSS, JavaScript et PHP, avec une architecture moderne et un déploiement via Docker pour plus de fiabilité que XAMPP.

📌 Objectifs

Présenter mes projets et réalisations en développement web.

Montrer mes compétences techniques : HTML, CSS, JS, PHP, SQL, etc.

Fournir une interface responsive et moderne pour toutes les plateformes.

Permettre un déploiement simple et stable grâce à Docker.

Envoyer des emails via Mailgun pour les formulaires de contact.

------------------------------------------------------------------------------------------------

💻 Technologies utilisées

HTML5 & CSS3 (Flexbox, Grid, animations)

JavaScript pour les animations et validations côté client

PHP pour le traitement dynamique des formulaires

Docker & Docker Compose pour le conteneur web (PHP + Apache)

Mailgun pour l’envoi sécurisé des emails

Bootstrap pour le design responsive

Font Awesome pour les icônes

------------------------------------------------------------------------------------------------

🚀 Fonctionnalités principales

Section héro avec dégradé et overlay

Cartes "glass" avec effet de flou et hover animations

Boutons personnalisés et liens néon

Alertes et messages stylisés (notifications flottantes)

Formulaire de contact avec validation JS et envoi via Mailgun

Design responsive pour mobile et desktop

Déploiement facile grâce à Docker, pour éviter les problèmes de SSL et XAMPP

------------------------------------------------------------------------------------------------

📂 Structure du projet

/includes         -> Header, footer et templates
/public/style     -> Fichiers CSS
/public/Js        -> Scripts JavaScript
/public           -> Pages principales et sections, formulaire PHP
/Dockerfile       -> Conteneur PHP + Apache + Composer
/docker-compose.yml -> Configuration Docker pour le projet
/vendor           -> Dépendances Composer (ignoré dans Git)
/public/traitement_formulaire.php -> Traitement des formulaires (ignoré dans Git)

⚡ Installation & Déploiement avec Docker

1.Cloner le repository :
git clone https://github.com/Antalyax21/Portfolio-Zcode.git

2.Lancer le conteneur Docker :
docker-compose up -d --build

3.Accéder au site depuis le navigateur :
http://localhost:8080

------------------------------------------------------------------------------------------------

✉️ Formulaire Contact et Mailgun

Le formulaire utilise JS pour la validation côté client et PHP pour l’envoi via Mailgun.

La clé API Mailgun doit être configurée dans traitement_formulaire.php (ce fichier est ignoré dans Git pour la sécurité).

Exemple de configuration Mailgun :
$mgClient = Mailgun\Mailgun::create('VOTRE_API_KEY');
$domain = "votredomaine.mailgun.org";
$mgClient->messages()->send($domain, [
    'from'    => 'contact@votredomaine.com',
    'to'      => 'moi@example.com',
    'subject' => 'Nouveau message du portfolio',
    'text'    => $_POST['message']
]);


------------------------------------------------------------------------------------------------

📌 Notes importantes

Le fichier public/traitement_formulaire.php est ignoré dans Git pour éviter de pousser la clé Mailgun.

Le dossier vendor/ est ignoré dans Git et installé via Composer dans le conteneur Docker.

L’utilisation de Docker résout les problèmes de certificats SSL rencontrés avec XAMPP.


------------------------------------------------------------------------------------------------

🎯 Objectifs atteints aujourd’hui

Passage du projet XAMPP → Docker pour éviter les soucis SSL et Composer.

Mise en place de Mailgun pour le formulaire de contact.

Optimisation du formulaire avec validation JS et messages stylisés.

Préparation du .gitignore pour ignorer les fichiers sensibles (traitement_formulaire.php et vendor/).
