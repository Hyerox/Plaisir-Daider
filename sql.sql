CREATE DATABASE plaisirdaider CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE plaisirdaider;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password)
VALUES (
    "test@test.com",
    "Test1234"
);

-- Créer dans phpmyadmin ou exécuter via terminal
CREATE TABLE content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    zone VARCHAR(50) NOT NULL,
    type ENUM('texte', 'image') NOT NULL DEFAULT 'texte',
    contenu TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insérer le contenu initial
INSERT INTO content (zone, type, contenu) VALUES 
('about_text', 'texte', 'Texte de présentation par défaut...');