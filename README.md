# Portfolio CodeZ

Portfolio personnel en ligne développé en HTML, CSS, JavaScript et PHP, avec déploiement automatisé via Docker et GitHub Actions.

Site en production : https://zcode-digital-solutions.fr

---

 Technologies utilisées

Frontend
- HTML5 & CSS3 (Flexbox, Grid, animations)
- JavaScript (animations et validations)
- Bootstrap (design responsive)
- Font Awesome (icônes)

Backend
- PHP 8.2
- Mailgun API (envoi d'emails)
- Composer (gestion des dépendances)

Infrastructure
- Docker & Docker Compose
- Nginx (reverse proxy)
- Apache (serveur PHP)
- Let's Encrypt (certificats SSL)
- GitHub Actions (déploiement automatique)

---

 Fonctionnalités

- Section héro avec dégradé et overlay
- Cartes "glass" avec effet de flou et animations hover
- Boutons personnalisés et liens néon
- Alertes et notifications stylisées
- **Formulaire de contact** avec validation JS et envoi via Mailgun
- Design responsive pour mobile et desktop
- **Déploiement automatique** à chaque push sur `main`
- **HTTPS sécurisé** avec certificats auto-renouvelés

---

 Architecture

```
Internet (HTTPS)
    ↓
Nginx Proxy (ports 80, 443) - SSL/TLS
    ↓
Apache + PHP 8.2 (port 8080 interne)
    ↓
Application PHP
```

Conteneurs Docker : portfolio_app, nginx_proxy, certbot

---

Installation locale

```bash
# Cloner le repository
git clone https://github.com/Antalyax21/Portfolio-Zcode.git
cd Portfolio-Zcode

configurer les variables d'environnement

#lancer avec Docker
docker compose up -d --build
```

Accès : http://localhost:8080

---

 Déploiement en production

 GitHub Actions

Chaque `git push` sur la branche `main` déclenche automatiquement :
1. Connexion SSH au VPS
2. Pull du code depuis GitHub
3. Rebuild des conteneurs Docker
4. Redémarrage de l'application

Secrets GitHub requis (Settings → Secrets → Actions) :
- `VPS_HOST` : IP du serveur
- `VPS_USER` : Utilisateur SSH (ubuntu)
- `SSH_PRIVATE_KEY` : Clé privée SSH

 SSL/HTTPS avec Let's Encrypt

Les certificats SSL sont automatiquement :
- Générés gratuitement via Let's Encrypt
- Renouvelés tous les 60 jours par le conteneur certbot
- Valides pendant 90 jours
- HTTP redirige automatiquement vers HTTPS

---

 Structure du projet

```
Portfolio-Zcode/
├── .github/workflows/deploy.yml    # GitHub Actions
├── certbot/                        # Certificats SSL
├── nginx/conf.d/default.conf       # Config Nginx
├── includes/                       # Templates PHP
├── public/                         # Pages et assets
├── vendor/                         # Dépendances (ignoré Git)
├── .env                            # Variables sensibles (ignoré Git)
├── docker-compose.yml              # Services Docker
├── Dockerfile                      # Image PHP + Apache
└── apache-config.conf              # Config Apache
```

---

 Sécurité

Fichiers ignorés dans Git pour la sécurité :
- `.env` (clés API, mots de passe)
- `public/traitement_formulaire.php` (configuration Mailgun)
- `vendor/` (dépendances Composer)
- `certbot/conf/` (certificats SSL)

---

---

 Licence

MIT License

Copyright (c) 2025 CodeZ

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

---

**Développé par CodeZ**
