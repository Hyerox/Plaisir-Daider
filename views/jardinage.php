<?php
$pageTitle = 'Jardinage';
require_once "../partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="/plaisirdaider/images/jardinage-hero.webp" class="absolute inset-0 w-full h-full object-cover object-[center_65%] filter brightness-90" alt="un jardin propre avec une débrouissalleuse"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Jardinage
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Entretien de votre espace extérieur
                </p>
            </div>
        </div>
    </section>
    <article class="py-16 px-4 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#2f3e2d]">Nos Services d'Entretien Extérieur</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Service Débroussaillage -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/debroussaillage.webp" alt="Un homme débroussaille" class="w-full h-96 object-cover object-bottom">
                    <div class="p-6 bg-red-50">
                        <h3 class="text-2xl font-semibold mb-3">Débroussaillage</h3>
                        <p class="text-xl text-gray-600">Nettoyage des zones envahies par la végétation.</p>
                    </div>
                </div>

                <!-- Service Tonte -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/tondeuse.webp" alt="Tonte de gazon" class="w-full h-96 object-cover">
                    <div class="p-6 bg-green-50">
                        <h3 class="text-2xl font-semibold mb-3">Tonte de gazon</h3>
                        <p class="text-xl text-gray-600">Entretien de votre pelouse pour un jardin impeccable.</p>
                    </div>
                </div>

                <!-- Service Élagage -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/elagage.webp" alt="Une homme coupe des branches" class="w-full h-96 object-cover">
                    <div class="p-6 bg-blue-50">
                        <h3 class="text-2xl font-semibold mb-3">Élagage</h3>
                        <p class="text-xl text-gray-600">Taille de vos arbres et arbustes.</p>
                    </div>
                </div>

                <!-- Service Taille de Haie -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer md:last:odd:col-span-2 md:last:odd:mx-auto md:last:odd:max-w-[48%]">
                    <img src="/plaisirdaider/images/taille-haie.webp" alt="Un homme taille une haie" class="w-full h-96 object-cover">
                    <div class="p-6 bg-yellow-50">
                        <h3 class="text-2xl font-semibold mb-3">Taille de haie</h3>
                        <p class="text-xl text-gray-600">Taille soignée de vos haies</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php

require_once "../partials/footer.php";
?>