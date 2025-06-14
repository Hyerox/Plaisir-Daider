<?php
require_once dirname(__FILE__) . "/config/config.php";
$pageTitle = 'Accueil';
require_once BASE_PATH . "/partials/header.php";
?>

<main class="min-h-screen bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
    <!-- Section Hero -->
    <section class="relative h-[700px] z-0">
        <img src="<?= BASE_URL ?>images/hero.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75" alt="Un jardin en fond"/>
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
                    <img src="<?= BASE_URL ?>images/logo.webp" class="w-full h-auto mx-auto" alt="Logo Plaisir d'Aider" width="300" height="300"/>
                </div>

                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Votre partenaire de confiance pour les services à la personne
                </p>

                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="#prestations" 
                       class="bg-[#cce3c1] text-[#1a2819] px-8 py-4 rounded-lg font-bold hover:bg-[#b9d5aa] transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Découvrir nos prestations
                    </a>
                    <a href="./views/contact.php" 
                       class="bg-[#cce3c1] text-[#1a2819] border border-[#a8bfa0] px-8 py-4 rounded-lg font-bold hover:bg-[#b9d5aa] transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section flottante pour le devis -->
    <div id="floating-cta" class="fixed bottom-8 right-8 transform translate-y-[200%] transition-transform duration-500 z-[999]">
        <a href="./views/contact.php" 
           class="bg-orange-500 text-white px-6 py-4 rounded-full font-bold hover:bg-orange-600 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center gap-2">
            <span>Demandez votre devis</span>
        </a>
    </div>

    <!-- À propos -->
    <section id="aPropos">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-bold text-center mb-12 text-[#1e291c] relative">
                <span class="relative inline-block">
                    À propos de nous
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
                </span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-gradient-to-br from-white to-[#eef3e6] p-8 rounded-lg shadow-lg border border-gray-200 mt-14">
                    <p class="text-[#1a2819] text-lg leading-relaxed mb-6">
                    Depuis plus de 18 ans, Plaisir d’Aider accompagne les particuliers dans leur quotidien à travers des services à la personne de qualité, humains et accessibles. Implantés à Rocbaron dans le Var, nous proposons des prestations personnalisées en ménage, jardinage, petit bricolage, transport et débarras.<br /><br />Notre mission : faciliter la vie de nos clients avec bienveillance, professionnalisme et discrétion, tout en leur faisant bénéficier de 50 % de crédit d’impôt sur l’ensemble de nos interventions. Nous plaçons la relation de confiance au cœur de nos engagements.


                    </p>
                    <p class="text-[#1a2819] text-lg leading-relaxed mb-8">
                        Notre zone d'activité s'étend sur tout le territoire local. Pour découvrir nos différentes prestations en détail, 
                        consultez notre rubrique <a href="#prestations" class="text-blue-700 hover:text-blue-800 underline font-medium">Nos prestations</a>.
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-center mb-6 text-green-900">Notre zone d'activité</h2>
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
                        ["menage", BASE_URL . "images/menage.webp", "Ménage", "Entretien de votre maison"],
                        ["jardinage", BASE_URL . "images/jardinage.webp", "Jardinage", "Entretien de votre jardin"],
                        ["bricolage", BASE_URL . "images/bricolage.webp", "Bricolage", "Travaux de petit bricolage"],
                        ["debarras", BASE_URL . "images/debarras.webp", "Débarras", "Débarrassage de surplus"],
                        ["transport", BASE_URL . "images/transport.webp", "Transport", "Transport accompagné"]
                    ];
                    
                    foreach ($services as [$slug, $img, $title, $desc]) {
                        echo "<div class='w-full flex-shrink-0'>
                            <div class='bg-[#2f3e2d]/95 p-3 xs:p-4 sm:p-6 rounded-lg shadow-lg border-2 border-[#cde0c6] mx-1 xs:mx-2 sm:mx-4 overflow-hidden'>
                                <div class='h-[300px] md:h-[700px] -mx-3 xs:-mx-4 sm:-mx-6 -mt-3 xs:-mt-4 sm:-mt-6 mb-4 relative'>
                                    <a href='./views/{$slug}.php' aria-label='Page {$title}'><img src='{$img}' class='w-full h-full object-cover' alt='{$title}'/></a>
                                    <div class='absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-[#4e5e48] to-transparent opacity-50'></div>
                                </div>
                                <div class='relative z-10'>
                                    <h3 class='text-2xl font-semibold mb-2 text-[#f5f5f5]'>{$title}</h3>
                                    <p class='text-[#f5f5f5] line-clamp-2'>{$desc}</p>
                                    <p class='text-[#f5f5f5] mt-2 mb-12 md:mb-2 italic text-sm'>Cliquez sur l'image pour plus d'informations...</p>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>

                <!-- Boutons navigation -->
                <button class="absolute left-1 xs:left-4 sm:left-2 top-1/2 -translate-y-1/2 bg-[#dce7e5] p-2 xs:p-3 rounded-full shadow-lg bg-orange-300 hover:bg-[#c7d8bc] transition-all z-10" id="prevBtn" aria-label="Image précédente">
                    <i class="fas fa-chevron-left text-[#2f3e2d] text-sm xs:text-base"></i>
                </button>
                <button class="absolute right-1 xs:right-4 sm:right-2 top-1/2 -translate-y-1/2 bg-[#dce7e5] p-2 xs:p-3 rounded-full shadow-lg bg-orange-300 hover:bg-[#c7d8bc] transition-all z-10" id="nextBtn" aria-label="Image suivante">
                    <i class="fas fa-chevron-right text-[#2f3e2d] text-sm xs:text-base"></i>
                </button>

                <!-- Indicateurs -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2" id="dots">
    <?php foreach ($services as $index => $_): ?>
        <button class="w-3 h-3 rounded-full transition-all duration-300"
                style="background-color: <?= $index === 0 ? '#cde0c6' : '#cde0c680' ?>;"
                aria-label="Image <?= $index + 1 ?>"></button>
    <?php endforeach; ?>
</div>

            </div>
        </div>
    </section>
</main>

<?php require_once "./partials/footer.php"; ?>

