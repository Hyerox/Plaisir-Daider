<?php
require_once dirname(__FILE__) . "/../config/config.php";
$pageTitle = 'Transport';
require_once BASE_PATH . "/partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="<?= BASE_URL ?>images/transport-hero.webp" class="absolute inset-0 w-full h-full object-cover object-top filter brightness-90" alt="transport accompagné"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Transport
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Transport et accompagnement personnalisé
                </p>
            </div>
        </div>
    </section>

    <article class="py-16 px-4 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#2f3e2d]">Nos Services de Transport</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Transport aéroport -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                <img src="<?= BASE_URL ?>images/transportAeroport.webp" alt="Transport aéroport" class="w-full h-96 object-cover">
                    <div class="p-6 bg-red-50">
                        <h3 class="text-2xl font-semibold mb-3">Transport arrivée & départ</h3>
                        <p class="text-xl text-gray-600">Accompagnement pour vos départs ou retours en gare ou aéroport.</p>
                    </div>
                </div>

                <!-- Courses -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/course.webp" alt="Courses" class="w-full h-96 object-cover">
                    <div class="p-6 bg-green-50">
                        <h3 class="text-2xl font-semibold mb-3">Courses </h3>
                        <p class="text-xl text-gray-600">Assistance pour vos courses.</p>
                    </div>
                </div>

                <!-- Transport loisirs -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="<?= BASE_URL ?>images/rdv-medical.webp" alt="un docteur et sa patiente" class="w-full h-96 object-cover">
                    <div class="p-6 bg-blue-50">
                        <h3 class="text-2xl font-semibold mb-3">Sorties diverses</h3>
                        <p class="text-xl text-gray-600">Accompagnement pour quelconque sortie (rdv médical, salon de coiffure, etc...)</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
require_once BASE_PATH . "/partials/footer.php";
?>