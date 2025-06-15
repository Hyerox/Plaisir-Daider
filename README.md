# 🧹 Plaisir d'Aider

Site vitrine développé pour une entreprise de services à la personne, permettant de présenter ses prestations et recueillir les demandes de contact.
## 🌐 Lien en ligne

🔗 [https://plaisir-daider.onrender.com](https://plaisir-daider.onrender.com)

## 🛠️ Technologies utilisées

- PHP (MVC)
- MySQL
- Tailwind CSS
- JavaScript
- Docker
- VSCode
- Git / GitHub
- AlwaysData (hébergement base de données)

## 📁 Architecture du projet

```
/PlaisirDaider
│
├── config/             → Fichiers de configuration 
├── controllers/        → Contrôleurs PHP
├── models/             → Modèles de données (PDO, requêtes)
├── views/              → Fichiers HTML avec Tailwind (frontend)
├── images/             → Toutes les images utile au projet
├── src/                → fichier js
├── dockerfile          → Image Docker pour l’environnement PHP
├── .env                → Variables d’environnement (HOST, DBNAME, USERNAME, PASSWORD)
├── .htaccess           → Configuration Apache (URL rewriting, cache, sécurité)
├── db.php              → Classe de connexion PDO à la base de données
├── index.php           → Page accueil
├── README.md           → Documentation du projet (présentation, installation, utilisation)
└── sql.sql             → Script SQL de création de la base de données et des tables


## ✅ Fonctionnalités principales

- Affichage des services proposés
- Formulaire de contact
- Interface d'administration (connexion sécurisée)
- Consultation et gestion des requêtes utilisateurs
- Édition dynamique de certains contenus (texte/image)

## ⚙️ Installation en local

1. Cloner le dépôt :
   ```bash
   git clone https://github.com/Hyerox/plaisir-daider.git
   ```

2. Copier le fichier `.env.example` et le renommer en `.env`, puis le compléter :

   ```
   HOST=localhost
   DBNAME=nom_base
   USERNAME=root
   PASSWORD=motdepasse
   ```

3. Lancer le conteneur Docker :
   ```bash
   docker-compose up --build
   ```

4. Accéder à l’application :
   ```
   http://localhost:8080/PlaisirDaider
   ```

## 🔐 Authentification

L'accès à l'interface d'administration est sécurisé par identifiants (hashés en BDD via `password_hash()`).

## 🧪 Fonctionnalités futures possibles

- Base de données plus détaillées
- Gestion des utilisateurs avec rôles
- Interface de back-office plus évoluée

## 👨‍💻 Réalisé par

**Nathan Didier**  
Projet encadré par l’AFPA Saint-Jérôme (2024–2025)  
Formation Développeur Web et Web Mobile 
