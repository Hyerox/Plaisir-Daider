# 🌿 Plaisir d'Aider

Site vitrine pour une entreprise de services à la personne (ménage, jardinage, transport, bricolage, débarras…) basée à Rocbaron (Var, France).

## 🚀 Objectifs

- Présenter les prestations proposées par l’entreprise.
- Permettre à l'utilisateur d’envoyer des demandes via un formulaire de contact.
- Fournir les coordonnées de l’entreprise.
- Offrir une interface d’administration sécurisée pour gérer les requêtes et modifier le contenu du site.

---

## 🧱 Architecture technique

- **Langages** : PHP (MVC), HTML, CSS (Tailwind), JavaScript
- **Base de données** : MySQL (hébergée sur AlwaysData)
- **Gestion des dépendances** : Composer (PHP) & npm (Tailwind)
- **Environnement de développement** : Docker (PHP + MySQL)
- **Hébergement** : Render

---

## 📁 Arborescence

📦 plaisir-daider
├── config/ # Fichiers de config (connexion DB, variables d’environnement…)
├── controllers/ # Contrôleurs PHP
├── models/ # Modèles PHP (classes métier + base de données)
├── views/ # Vues HTML + Tailwind
│ └── partials/ # Header, footer, etc.
├── public/ # Contenu public (images, CSS, JS)
├── .env # Variables d’environnement (non versionné)
├── docker-compose.yml # Configuration Docker
├── tailwind.config.js # Config Tailwind
├── README.md # Ce fichier
└── ...

yaml
Copier
Modifier

---

## 🔧 Installation (en local)

1. **Cloner le dépôt** :

```bash
git clone https://github.com/votre-utilisateur/plaisir-daider.git
cd plaisir-daider
Configurer l’environnement :

Créer un fichier .env à la racine avec vos variables :

env
Copier
Modifier
HOST=localhost
DBNAME=plaisir
USERNAME=root
PASSWORD=root
Lancer Docker :

bash
Copier
Modifier
docker-compose up -d
Installer les dépendances (si besoin) :

bash
Copier
Modifier
composer install
npm install
npm run dev    # Pour compiler Tailwind
