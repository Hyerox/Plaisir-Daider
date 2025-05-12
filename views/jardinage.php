<?php
$pageTitle = 'Jardinage';
require_once "../partials/header.php";
?>
<main>
    <section class="relative h-[700px] z-0">
        <img src="/plaisirdaider/images/jardinage.fond.png" class="absolute inset-0 w-full h-full object-cover object-[center_65%] filter brightness-90" alt="un jardin propre"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Jardinage
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Entretien de votre jardin
                </p>
                <a href="#services" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                    En savoir plus
                </a>
            </div>
        </div>
    </section>
</main>