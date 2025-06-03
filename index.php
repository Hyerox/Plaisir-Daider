<?php
$pageTitle = 'Accueil';
require_once "./partials/header.php";
?>

<main class="min-h-screen bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
    <!-- Section Hero -->
    <section class="relative h-[700px] z-0">
        <img src="images/hero.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75" alt="Un jardin en fond"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center space-y-8">
                <div class="relative">
                    <svg viewBox="0 0 1200 200" class="w-full max-w-4xl mx-auto">
                        <path id="curve" d="M100,200 C400,0 800,0 1100,200" fill="transparent"/>
                        <text fill="white">
                            <textPath xlink:href="#curve" startOffset="50%" text-anchor="middle" class="text-5xl md:text-7xl font-bold tracking-wider">
                                Plaisir d'Aider
                            </textPath>
                        </text>
                    </svg>
                </div>

                <div class="bg-white/90 backdrop-blur-sm mx-auto w-72 rounded-3xl transform hover:scale-105 transition-transform duration-300">
                    <img src="images/logo.webp" class="w-full h-auto mx-auto" alt="Logo Plaisir d'Aider" width="300" height="300"/>
                </div>

                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Votre partenaire de confiance pour les services à la personne
                </p>

                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="#prestations" 
                       class="bg-[#cce3c1] text-[#1a2819] px-8 py-4 rounded-lg font-bold hover:bg-[#b9d5aa] transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Découvrir nos prestations
                    </a>
                    <a href="views/contact.php" 
                       class="bg-white text-[#1a2819] border border-[#a8bfa0] px-8 py-4 rounded-lg font-bold hover:bg-white transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section flottante pour le devis -->
    <div id="floating-cta" class="fixed bottom-8 right-8 transform translate-y-[200%] transition-transform duration-500 z-[999]">
        <a href="views/contact.php" 
           class="bg-orange-500 text-white px-6 py-4 rounded-full font-bold hover:bg-orange-600 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
            <span>Demandez votre devis</span>
        </a>
    </div>

    <!-- À propos -->
    <section id="aPropos">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-bold text-center mb-12 text-[#1e291c] relative">
                <span class="relative inline-block">
                    À Propos de Nous
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
                </span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-gradient-to-br from-white to-[#eef3e6] p-8 rounded-lg shadow-lg border border-gray-200">
                    <p class="text-[#1a2819] text-lg leading-relaxed mb-6">
                        Depuis plus de 18 ans, Plaisir d’Aider simplifie le quotidien de ses clients en leur offrant un environnement propre, fonctionnel et serein. Grâce à une présence fiable et une écoute attentive, nous contribuons à améliorer durablement leur confort de vie et leur tranquillité d’esprit.
                    </p>
                    <p class="text-[#1a2819] text-lg leading-relaxed mb-8">
                        Notre zone d'activité s'étend sur tout le territoire local. Pour découvrir nos différentes prestations, 
                        consultez notre rubrique <a href="#prestations" class="text-blue-700 hover:text-blue-800 underline font-medium">Nos prestations</a>.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-center mb-6 text-green-900">Notre secteur d'activité</h2>
                    <div class="bg-gradient-to-br from-white to-emerald-50 p-4 rounded-lg shadow-lg border border-emerald-100">
                        <div id="map" class="h-[400px] rounded-lg shadow-inner"></div>
                    </div>
                </div>
            </div>          
        </div>
    </section>

    <!-- Prestations -->
    <section id="prestations" class="py-8 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
        <h2 class="text-4xl font-bold text-center mb-12 text-[#2f3e2d] relative">
            <span class="relative inline-block">
                Nos prestations
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
            </span>
        </h2>
        <div class="container mx-auto px-4 relative">
            <div class="overflow-hidden relative">
                <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                    <?php
                    $services = [
                        ["menage", "images/menage.webp", "Ménage", "Entretien de votre maison"],
                        ["jardinage", "images/jardinage.webp", "Jardinage", "Entretien de votre jardin"],
                        ["bricolage", "images/bricolage.webp", "Bricolage", "Travaux de petit bricolage"],
                        ["debarras", "images/debarras.webp", "Débarras", "Débarrassage de surplus"],
                        ["transport", "images/transport.webp", "Transport", "Accompagnement et transport de personnes"]
                    ];
                    foreach ($services as [$slug, $img, $title, $desc]) {
                        echo "<div class='w-full flex-shrink-0'>
                            <div class='bg-[#2f3e2d]/95 p-6 rounded-lg shadow-lg border-2 border-[#cde0c6] mx-4 overflow-hidden'>
                                <div class='h-[700px] -mx-6 -mt-6 mb-4 relative'>
                                    <a href='views/{$slug}.php' aria-label='Page {$title}'><img src='{$img}' class='w-full h-full object-cover object-bottom' alt='{$title}'/></a>
                                    <div class='absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-[#4e5e48] to-transparent opacity-50'></div>
                                </div>
                                <div class='relative z-10'>
                                    <h3 class='text-2xl font-semibold mb-2 text-[#f5f5f5]'>{$title}</h3>
                                    <p class='text-[#f5f5f5]'>{$desc}</p>
                                    <p class='text-[#f5f5f5] mt-2 italic'>Cliquez sur l'image pour plus d'informations ...</p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>

                <!-- Boutons navigation -->
                <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-[#dce7e5] p-3 rounded-full shadow-lg bg-orange-300 hover:bg-[#c7d8bc] transition-all" id="prevBtn" aria-label="Image précédente">
                    <i class="fas fa-chevron-left text-[#2f3e2d]"></i>
                </button>
                <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#dce7e5] p-3 rounded-full shadow-lg bg-orange-300 hover:bg-[#c7d8bc] transition-all" id="nextBtn" aria-label="Image suivante">
                    <i class="fas fa-chevron-right text-[#2f3e2d]"></i>
                </button>

                <!-- Indicateurs -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-2 mb-4" id="dots">
                    <button class="w-3 h-3 p-3 rounded-full bg-[#cde0c6] transition-all" aria-label="Image 1"></button>
                    <button class="w-3 h-3 p-3 rounded-full bg-[#cde0c6]/50 transition-all" aria-label="Image 2"></button>
                    <button class="w-3 h-3 p-3 rounded-full bg-[#cde0c6]/50 transition-all" aria-label="Image 3"></button>
                    <button class="w-3 h-3 p-3 rounded-full bg-[#cde0c6]/50 transition-all" aria-label="Image 4"></button>
                    <button class="w-3 h-3 p-3 rounded-full bg-[#cde0c6]/50 transition-all" aria-label="Image 5"></button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once "./partials/footer.php"; ?>
<script src="./src/main.js" defer></script>
