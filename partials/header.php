<?php 
// Changement du chemin d'inclusion pour utiliser un chemin absolu
require_once dirname(__DIR__) . '/config/config.php'; 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plaisir d'Aider - Services à la personne à Rocbaron, Var : ménage, jardinage, bricolage, débarras et transport. 18 ans d'expérience, 50% de crédit d'impôt sur tous nos services.">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Plaisir d\'Aider'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
    <header>
        <nav class="bg-gradient-to-r from-[#f7f6f2] via-[#eef3e6] to-[#f7f6f2] shadow-lg border-b-2 border-[#cde0c6] relative z-50">
            <div class="flex justify-center">
                <div class="p-8">
                    <div class="hidden md:flex items-center space-x-10">
                        <a href="<?= BASE_URL ?>" class="text-lg text-[#4e5e48] hover:text-[#2f3e2d] transition duration-300 px-4 py-3 hover:bg-[#cde0c6]/30 hover:rounded-xl">Accueil</a>
                        
                        <!-- Prestations avec dropdown -->
                        <div class="relative group">
                            <a href="<?= BASE_URL ?>#prestations" class="text-lg text-[#4e5e48] hover:text-[#2f3e2d] transition duration-300 px-4 py-3 hover:bg-[#cde0c6]/30 hover:rounded-xl">Nos Prestations</a>
                            <div class="absolute left-0 hidden group-hover:block mt-0 w-48 bg-gradient-to-b from-[#f7f6f2] to-[#eef3e6] rounded-lg shadow-xl">
                                <!-- Ajout d'un div invisible pour combler l'espace -->
                                <div class=""></div>
                                <a href="<?= BASE_URL ?>views/menage.php" class="block px-4 py-3 text-[#4e5e48] hover:text-[#2f3e2d] hover:bg-[#cde0c6]/30 hover:rounded-xl hover:shadow-xl">Ménage</a>
                                <a href="<?= BASE_URL ?>views/jardinage.php" class="block px-4 py-3 text-[#4e5e48] hover:text-[#2f3e2d] hover:rounded-xl hover:shadow-xl">Jardinage</a>
                                <a href="<?= BASE_URL ?>views/bricolage.php" class="block px-4 py-3 text-[#4e5e48] hover:text-[#2f3e2d] hover:rounded-xl hover:shadow-xl">Bricolage</a>
                                <a href="<?= BASE_URL ?>views/debarras.php" class="block px-4 py-3 text-[#4e5e48] hover:text-[#2f3e2d] hover:rounded-xl hover:shadow-xl">Débarras</a>
                                <a href="<?= BASE_URL ?>views/transport.php" class="block px-4 py-3 text-[#4e5e48] hover:text-[#2f3e2d] hover:rounded-xl hover:shadow-xl">Transport</a>

                            </div>
                        </div>

                        <!-- Reste du menu -->
                        <a href="<?= BASE_URL ?>views/contact.php" class="text-lg text-[#4e5e48] hover:text-[#2f3e2d] hover:shadow-xl hover:rounded-xl transition duration-300 px-4 py-3">Nous Contacter</a>
                        
                        <a href="<?= BASE_URL ?>views/aide.php" class="text-lg text-[#4e5e48] hover:text-[#2f3e2d] hover:shadow-xl hover:rounded-xl transition duration-300 px-4 py-3">Aide Financière</a>
                        
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="<?= BASE_URL ?>views/requete.php" class="text-[#2f3e2d] bg-[#cde0c6] px-4 rounded-lg hover:bg-[#b9d5aa] hover:shadow-xl transition duration-300 py-2 border-2 border-[#a0b292]">Requêtes</a>
                        <?php endif; ?>

                        <?php if(isset($_SESSION['user_id'])): ?>
                        <a href="<?= BASE_URL ?>views/logout.php" class="text-[#2f3e2d] bg-red-100 px-4 rounded-lg hover:bg-red-200 transition duration-300 py-2 border-2 border-red-200">Déconnexion</a>
                        <?php endif; ?>
                    </div>
            </div>
        </nav>
        <!-- Bannière avantages fiscaux -->
        <div class="bg-gradient-to-r from-[#e1e9d4] via-[#eef3e6] to-[#e1e9d4] text-[#2f3e2d] px-4 py-3 shadow-inner">
            <div class="container mx-auto text-center">
                <p class="text-md font-medium">
                    <span class="font-bold">Profitez de 50% de crédit d'impôt</span> sur nos services à la personne 
                    (Article 199 sexdecies du CGI) 📋
                </p>
                <p>Allez dans la rubrique <a href="<?= BASE_URL ?>views/aide.php" class="text-blue-500 hover:text-blue-600 underline font-medium">Aide Financière</a> pour en savoir plus !</p>
            </div>
        </div>
    </header>
</body>
</html>