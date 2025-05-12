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
                        
                        <!-- Services avec dropdown -->
                        <div class="relative group">
                            <a href="/PlaisirDaider/index.php#services" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2">Nos Services</a>
                            <div class="absolute left-0 hidden group-hover:block mt-0 w-48 bg-white rounded-lg shadow-lg">
                                <!-- Ajout d'un div invisible pour combler l'espace -->
                                <div class="h-2"></div>
                                <a href="views/menage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Ménage</a>
                                <a href="views/jardinage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Jardinage</a>
                                <a href="views/bricolage.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Bricolage</a>
                                <a href="views/debarras.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Débarras</a>
                                <a href="views/transport.php" class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">Transport</a>

                            </div>
                        </div>

                        <!-- Reste du menu -->
                        <div class="relative group">
                            <a href="/PlaisirDaider/index.php#prestation" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2 cursor-pointer">Nos Prestations</a>
                            <div class="absolute left-0 hidden group-hover:block mt-0 w-48 bg-white rounded-lg shadow-lg">
                                <div class="h-2"></div>
                                    <a class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">test 1</a>
                                    <a class="block px-4 py-2 text-amber-900 hover:bg-amber-200 hover:rounded-lg">test 2</a>
                            </div>
                        </div>
                        <a href="views/contact.php" class="text-lg text-amber-900 hover:text-amber-600 transition duration-300 py-2">Nous Contacter</a>
                        <a href="/devis" class="text-lg px-6 py-3 bg-amber-600 rounded-lg hover:bg-amber-500 transition duration-300 shadow-md hover:shadow-lg">Devis</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>