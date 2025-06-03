<?php
require_once dirname(__FILE__) . "/../config/config.php";
$pageTitle = 'Ménage';
require_once BASE_PATH . "/partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="<?= BASE_URL ?>images/menage_hero.webp" loading="eager"
        fetchpriority="high" class="absolute inset-0 w-full h-full object-cover object-[center_65%] filter brightness-90" alt="un aspirateur"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Ménage
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Entretien de votre espace intérieur
                </p>
            </div>
        </div>
    </section>
    <article class="py-16 px-4 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#2f3e2d]">Nos Services d'Entretien Intérieur</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Service Nettoyage général -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/cleaning.webp" alt="Nettoyage général" class="w-full h-96 object-cover">
                    <div class="p-6 bg-red-50">
                        <h3 class="text-2xl font-semibold mb-3">Nettoyage général</h3>
                        <p class="text-xl text-gray-600">Dépoussiérage, balayage et nettoyage complet de vos espaces de vie.</p>
                    </div>
                </div>

                <!-- Service Repassage -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/repassage.webp" alt="Repassage" class="w-full h-96 object-cover">
                    <div class="p-6 bg-green-50">
                        <h3 class="text-2xl font-semibold mb-3">Lessive & Repassage</h3>
                        <p class="text-xl text-gray-600">Service de lessive et repassage pour tous vos vêtements.</p>
                    </div>
                </div>

                <!-- Service Nettoyage des vitres -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/window_cleaning.webp" alt="Nettoyage des vitres" class="w-full h-96 object-cover">
                    <div class="p-6 bg-blue-50">
                        <h3 class="text-2xl font-semibold mb-3">Nettoyage des vitres</h3>
                        <p class="text-xl text-gray-600">Nettoyage minutieux de vos fenêtres et surfaces vitrées.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
require_once BASE_PATH . "/partials/footer.php"; 
?>