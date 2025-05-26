<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Plaisir d\'Aider'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>
<body>
    <header>
        <nav class="bg-amber-50 shadow-md border-b-2 border-amber-100 relative z-50">
            <div class=" flex justify-center">
                <div class="p-8">
                    <div class="hidden md:flex items-center space-x-10">
                        <a href="/PlaisirDaider/index.php" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2">Accueil</a>
                        
                        <!-- Prestations avec dropdown -->
                        <div class="relative group">
                            <a href="/PlaisirDaider/index.php#prestations" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2">Nos Prestations</a>
                            <div class="absolute left-0 hidden group-hover:block mt-0 w-48 bg-white rounded-lg shadow-lg">
                                <!-- Ajout d'un div invisible pour combler l'espace -->
                                <div class="h-2"></div>
                                <a href="/PlaisirDaider/views/menage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Ménage</a>
                                <a href="/PlaisirDaider/views/jardinage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Jardinage</a>
                                <a href="/PlaisirDaider/views/bricolage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Bricolage</a>
                                <a href="/PlaisirDaider/views/debarras.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Débarras</a>
                                <a href="/PlaisirDaider/views/transport.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Transport</a>

                            </div>
                        </div>

                        <!-- Reste du menu -->
                        <a href="/PlaisirDaider/views/contact.php" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2">Nous Contacter</a>
                        
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="/PlaisirDaider/views/requete.php" class="text-amber-900 bg-amber-200 px-4 rounded-lg hover:bg-amber-300 transition duration-300 py-2 border-2 border-amber-400">Requêtes</a>
                            
                        <?php endif; ?>

                        <a href="/PlaisirDaider/views/devis.php" class="text-lg px-6 py-3 bg-amber-600 rounded-lg hover:bg-amber-500 transition duration-300 shadow-md hover:shadow-lg">Devis</a>
                        
                        <?php if(isset($_SESSION['user_id'])): ?>
                        <a href="/PlaisirDaider/views/logout.php" class="text-amber-900 bg-red-200 px-4 rounded-lg hover:bg-red-300 transition duration-300 py-2 border-2 border-red-400">Déconnexion</a>
                        <?php endif; ?>
                    </div>
            </div>
        </nav>
    </header>
</body>
</html>