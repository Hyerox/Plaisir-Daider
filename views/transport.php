<?php
$pageTitle = 'Transport';
require_once "../partials/header.php";
?>

<main>
    <section class="relative h-[700px] z-0">
        <img src="/plaisirdaider/images/transport_hero.jpg" class="absolute inset-0 w-full h-full object-cover object-[center_65%] filter brightness-90" alt="transport accompagné"/>
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

    <article class="py-16 px-4 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Nos Services de Transport</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Transport médical -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/transport-medical.jpg" alt="Transport médical" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Transport médical</h3>
                        <p class="text-xl text-gray-600">Accompagnement à vos rendez-vous médicaux en toute sécurité.</p>
                    </div>
                </div>

                <!-- Courses & Shopping -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/courses.jpg" alt="Courses et shopping" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Courses & Shopping</h3>
                        <p class="text-xl text-gray-600">Assistance pour vos courses et sorties shopping.</p>
                    </div>
                </div>

                <!-- Transport loisirs -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <img src="/plaisirdaider/images/loisirs.jpg" alt="Transport loisirs" class="w-full h-96 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Sorties & Loisirs</h3>
                        <p class="text-xl text-gray-600">Accompagnement pour vos activités de loisirs et visites.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<?php
require_once "../partials/footer.php";
?>