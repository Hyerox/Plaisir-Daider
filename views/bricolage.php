<?php
require_once dirname(__FILE__) . "/../config/config.php";
$pageTitle = 'Bricolage';
require_once BASE_PATH . "/partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="<?= BASE_URL ?>images/bricolage_hero.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-90" alt="Un homme avec des gants de bricolage"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Bricolage
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Petits travaux et réparations
                </p>
            </div>
        </div>
    </section>

    <article class="py-16 px-4 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#2f3e2d]">Nos Services de Bricolage</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Montage de meubles -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/meuble.webp" alt="Montage de meubles" class="w-full h-96 object-cover">
                    <div class="p-6 bg-red-50">
                        <h3 class="text-2xl font-semibold mb-3">Montage de meubles</h3>
                        <p class="text-xl text-gray-600">Assemblage et installation de vos meubles en kit.</p>
                    </div>
                </div>

                <!-- Petites réparations -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/reparation.webp" alt="Réparations" class="w-full h-96 object-cover">
                    <div class="p-6 bg-green-50">
                        <h3 class="text-2xl font-semibold mb-3">Petites réparations</h3>
                        <p class="text-xl text-gray-600">Réparations diverses et travaux de maintenance.</p>
                    </div>
                </div>

                <!-- Fixations murales -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/fixation.webp" alt="Un homme prend des mesures sur un mur" class="w-full h-96 object-cover">
                    <div class="p-6 bg-blue-50">
                        <h3 class="text-2xl font-semibold mb-3">Fixations murales</h3>
                        <p class="text-xl text-gray-600">Installation d'étagères, tableaux et autres éléments muraux.</p>
                    </div>
                </div>


                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/peinture.webp" alt="Une personne peint" class="w-full h-96 object-cover">
                    <div class="p-6 bg-yellow-50">
                        <h3 class="text-2xl font-semibold mb-3">Peinture</h3>
                        <p class="text-xl text-gray-600">Pour un renouveau de vos murs ou meubles.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
require_once BASE_PATH . "/partials/footer.php";
?>