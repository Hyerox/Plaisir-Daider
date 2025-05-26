<?php 
// Changement du chemin d'inclusion pour utiliser un chemin absolu
require_once dirname(__DIR__) . '/config/config.php'; 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Plaisir d\'Aider'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
    <header>
        
        <nav class="bg-amber-50 shadow-md border-b-2 border-amber-100 relative z-50">
            <div class=" flex justify-center">
                <div class="p-8">
                    <div class="hidden md:flex items-center space-x-10">
                        <a href="<?= BASE_URL ?>" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 px-4 py-3 hover:shadow-xl hover:rounded-xl">Accueil</a>
                        
                        <!-- Prestations avec dropdown -->
                        <div class="relative group">
                            <a href="<?= BASE_URL ?>#prestations" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 px-4 py-3 hover:shadow-xl hover:rounded-xl">Nos Prestations</a>
                            <div class="absolute left-0 hidden group-hover:block mt-0 w-48 bg-white rounded-lg shadow-xl">
                                <!-- Ajout d'un div invisible pour combler l'espace -->
                                <div class=""></div>
                                <a href="<?= BASE_URL ?>views/menage.php" class="block px-4 py-3 text-amber-900 hover:bg-amber-200 hover:rounded-xl hover:shadow-xl">Ménage</a>
                                <a href="<?= BASE_URL ?>views/jardinage.php" class="block px-4 py-3 text-amber-900 hover:bg-amber-200 hover:rounded-xl hover:shadow-xl">Jardinage</a>
                                <a href="<?= BASE_URL ?>views/bricolage.php" class="block px-4 py-3 text-amber-900 hover:bg-amber-200 hover:rounded-xl hover:shadow-xl">Bricolage</a>
                                <a href="<?= BASE_URL ?>views/debarras.php" class="block px-4 py-3 text-amber-900 hover:bg-amber-200 hover:rounded-xl hover:shadow-xl">Débarras</a>
                                <a href="<?= BASE_URL ?>views/transport.php" class="block px-4 py-3 text-amber-900 hover:bg-amber-200 hover:rounded-xl hover:shadow-xl">Transport</a>

                            </div>
                        </div>

                        <!-- Reste du menu -->
                        <a href="<?= BASE_URL ?>views/contact.php" class="text-lg text-amber-900 hover:text-amber-600 hover:shadow-xl hover:rounded-xl transition duration-300 px-4 py-3">Nous Contacter</a>
                        
                        <a href="<?= BASE_URL ?>views/aide.php" class="text-lg text-amber-900 px-4 py-3 hover:text-amber-600 hover:shadow-xl hover:rounded-xl">Aide Financière</a>
                        
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="<?= BASE_URL ?>views/requete.php" class="text-amber-900 bg-amber-200 px-4 rounded-lg hover:bg-amber-300 hover:shadow-xl transition duration-300 py-2 border-2 border-amber-400">Requêtes</a>
                            
                        <?php endif; ?>

                        <?php if(isset($_SESSION['user_id'])): ?>
                        <a href="<?= BASE_URL ?>views/logout.php" class="text-amber-900 bg-red-200 px-4 rounded-lg hover:bg-red-300 transition duration-300 py-2 border-2 border-red-400">Déconnexion</a>
                        <?php endif; ?>
                    </div>
            </div>
        </nav>
        <!-- Bannière avantages fiscaux -->
        <div class="bg-amber-100 text-amber-900 px-4 py-2">
            <div class="container mx-auto text-center">
                <p class="text-md font-medium">
                    <span class="font-bold">Profitez de 50% de crédit d'impôt</span> sur nos services à la personne 
                    (Article 199 sexdecies du CGI) 📋
                </p>
                <p>Allez dans la rubrique <a href="<?= BASE_URL ?>views/aide.php" class="text-blue-500">Aide Financière</a> pour en savoir plus !</p>
            </div>
        </div>
    </header>
</body>
</html>