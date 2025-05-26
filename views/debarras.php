<?php
$pageTitle = 'Débarras';
require_once "../partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="/plaisirdaider/images/debarras_hero.jpg" class="absolute inset-0 w-full h-full object-cover object-[center_65%] filter brightness-90" alt="débarras maison"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <h1 class="text-4xl md:text-5xl text-white font-bold drop-shadow-lg">
                    Services de Débarras
                </h1>
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Libérez votre espace de l'encombrement et des végétaux
                </p>
            </div>
        </div>
    </section>

    <article class="py-16 px-4 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Nos Services de Débarras</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Débarras maison -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/debarras-mobilier.png" alt="Débarras maison" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Débarras de mobilier</h3>
                        <p class="text-xl text-gray-600">Débarras de vos meubles et éléctroménager.</p>
                    </div>
                </div>

                <!-- Débarras cave et grenier -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/debarras-gravier.png" alt="un tas de gravier devant une maison" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Débarras de gravier</h3>
                        <p class="text-xl text-gray-600">Évacuation de gravats ou matériaux déposés en extérieur.</p>
                    </div>
                </div>

                <!-- Tri et recyclage -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/debarras-vegetaux.png" alt="Un tas de végétaux dans un jardin" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Débarras de végétaux</h3>
                        <p class="text-xl text-gray-600">Débarras de branches, feuilles et déchets verts.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
require_once "../partials/footer.php";
?>