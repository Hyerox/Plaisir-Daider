<?php
require_once 'models/Model.php';
require_once 'controllers/Controller.php';
require_once 'views/View.php';

$pageTitle = 'Accueil';
require_once "./partials/header.php";
?>

<main class="min-h-screen bg-orange-50">
    <!-- Section Hero -->
    <section class="relative h-[700px] z-0">
        <img src="images/fond.jpg" class="absolute inset-0 w-full h-full object-cover filter brightness-75" alt="Background"/>
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
                    <img src="images/logo.png" class="w-full h-auto mx-auto" alt="Logo Plaisir d'Aider"/>
                </div>
                
                <p class="text-2xl md:text-3xl mb-8 text-white font-medium drop-shadow-lg max-w-2xl mx-auto">
                    Votre partenaire de confiance pour les services à la personne
                </p>
                
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="#services" 
                       class="bg-orange-200 text-orange-900 px-8 py-4 rounded-lg font-bold hover:bg-orange-300 transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Découvrir nos services
                    </a>
                    <a href="views/contact.php" 
                       class="bg-white/20 backdrop-blur-sm text-white border-2 border-white px-8 py-4 rounded-lg font-bold hover:bg-white/30 transition-all duration-300 text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-center mb-12 text-orange-900">À Propos de Nous</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-orange-800 text-lg leading-relaxed mb-6">
                    Depuis plus de 18 ans, Plaisir d’Aider simplifie le quotidien de ses clients en leur offrant un environnement propre, fonctionnel et serein. Grâce à une présence fiable et une écoute attentive, nous contribuons à améliorer durablement leur confort de vie et leur tranquillité d’esprit.


                    </p>
                    <p class="text-orange-800 text-lg leading-relaxed mb-8">
                        Notre zone d'activité s'étend sur tout le territoire local. Pour découvrir nos différents services, 
                        consultez notre rubrique <a href="#services" class="text-orange-600 hover:text-orange-700 underline font-medium">Nos Services</a>.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <div id="map" class="h-[400px] rounded-lg shadow-inner"></div>
                </div>
            </div>
        </div>

        <script>
            // Initialiser la carte
            const map = L.map('map').setView([43.4283, 6.2375], 10); // Coordonnées du Var

            // Ajouter la couche OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Définir la zone d'activité (exemple avec un cercle)
            const circle = L.circle([43.4283, 6.2375], {
                color: '#f97316', // orange-500
                fillColor: '#fdba74', // orange-300
                fillOpacity: 0.3,
                radius: 15000 // 15km de rayon
            }).addTo(map);

            // Ajouter un marqueur pour le siège de l'entreprise
            const marker = L.marker([43.4283, 6.2375])
                .addTo(map)
                .bindPopup('Plaisir d\'Aider')
                .openPopup();
        </script>
    </section>

    <!-- Section Services -->
    <section id="services" class="py-8 bg-orange-50">
        <h2 class="text-3xl font-bold text-center mb-6 text-orange-900">Nos Services</h2>
        <div class="container mx-auto px-4 relative">
            <!-- Slider container -->
            <div class="overflow-hidden relative">
                <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                    <!-- Service 1 -->
                    <div class="w-full flex-shrink-0">
                        <div class="bg-gray-900/70 p-6 rounded-lg shadow-lg border-2 border-orange-200 mx-4 overflow-hidden">
                            <div class="h-[700px] -mx-6 -mt-6 mb-4 relative">
                                <a href="views/menage.php"><img src="images/menage.jpg" class="w-full h-full object-cover object-bottom" alt="Equipement de ménage"/></a>
                                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-gray-900 to-transparent opacity-50"></div>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-semibold mb-2 text-white">Ménage</h3>
                                <p class="text-gray-100">Entretien de votre maison</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="w-full flex-shrink-0">
                        <div class="bg-gray-900/70 p-6 rounded-lg shadow-lg border-2 border-orange-200 mx-4 overflow-hidden">
                            <div class="h-[700px] -mx-6 -mt-6 mb-4 relative">
                                <a href="views/jardinage.php"><img src="images/jardinage.png" class="w-full h-full object-cover" alt="photo d'un arroisoir pour le jardinage"/></a>
                                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-gray-900 to-transparent opacity-50"></div>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-semibold mb-2 text-white">Jardinage</h3>
                                <p class="text-gray-100">Entretien de votre jardin</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="w-full flex-shrink-0">
                        <div class="bg-gray-900/70 p-6 rounded-lg shadow-lg border-2 border-orange-200 mx-4 overflow-hidden">
                            <div class="h-[700px] -mx-6 -mt-6 mb-4 relative">
                                <a href="views/bricolage.php"><img src="images/bricolage.jpg" class="w-full h-full object-cover object-top" alt="outil de bricolage"/></a>
                                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-gray-900 to-transparent opacity-50"></div>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-semibold mb-2 text-white">Bricolage</h3>
                                <p class="text-gray-100">Débarrassage de surplus</p>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="w-full flex-shrink-0">
                        <div class="bg-gray-900/70 p-6 rounded-lg shadow-lg border-2 border-orange-200 mx-4 overflow-hidden">
                            <div class="h-[700px] -mx-6 -mt-6 mb-4 relative">
                                <a href="views/debarras.php"><img src="images/debarras.png" class="w-full h-full object-cover object-bottom" alt="tas de mauvais herbe"/></a>
                                <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-t from-gray-900 to-transparent opacity-50"></div>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-semibold mb-2 text-white">Débarras</h3>
                                <p class="text-gray-100">Débarrassage de surplus</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Slider controls -->
                <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-orange-200/80 p-3 rounded-full shadow-lg hover:bg-orange-300 transition-all" id="prevBtn">
                    <i class="fas fa-chevron-left text-orange-900"></i>
                </button>
                <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-orange-200/80 p-3 rounded-full shadow-lg hover:bg-orange-300 transition-all" id="nextBtn">
                    <i class="fas fa-chevron-right text-orange-900"></i>
                </button>

                <!-- Dots indicator -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-2 mb-4" id="dots">
                    <button class="w-3 h-3 rounded-full bg-orange-200 transition-all"></button>
                    <button class="w-3 h-3 rounded-full bg-orange-200/50 transition-all"></button>
                    <button class="w-3 h-3 rounded-full bg-orange-200/50 transition-all"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Prestations -->
    <section class="py-16 bg-orange-100" id="prestation">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-orange-900">Nos Prestations</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-orange-900 mb-4">Services intérieur</h3>
                    <ul class="text-orange-800 space-y-2">
                        <li>• Ménage</li>
                        <li>• Repassage</li>
                        <li>•</li>
                        <li>•</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-orange-900 mb-4">Services extérieurs</h3>
                    <ul class="text-orange-800 space-y-2">
                        <li>• Entretien du jardin</li>
                        <li>• Bricolage</li>
                        <li>• Débarrassage</li>
                        <li>• Entretien de piscine</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-orange-900 mb-4">Accompagnement</h3>
                    <ul class="text-orange-800 space-y-2">
                        <li>• Transport</li>
                        <li>• </li>
                        <li>• </li>
                        <li>• </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('slider');
            const slides = slider.children;
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dots = Array.from(document.getElementById('dots').children);
            let currentSlide = 0;
            let slideWidth = slides[0].offsetWidth;
            let autoplayInterval;

            // Recalculate slide width on window resize
            window.addEventListener('resize', () => {
                slideWidth = slides[0].offsetWidth;
                goToSlide(currentSlide);
            });

            function goToSlide(index) {
                if (index < 0) index = slides.length - 1;
                if (index >= slides.length) index = 0;
                currentSlide = index;
                
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Update dots
                dots.forEach((dot, i) => {
                    dot.classList.toggle('bg-orange-200', i === currentSlide);
                    dot.classList.toggle('bg-orange-200/50', i !== currentSlide);
                });
            }

            function startAutoplay() {
                stopAutoplay();
                autoplayInterval = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, 5000);
            }

            function stopAutoplay() {
                if (autoplayInterval) {
                    clearInterval(autoplayInterval);
                }
            }

            // Event listeners
            prevBtn.addEventListener('click', () => {
                goToSlide(currentSlide - 1);
                stopAutoplay();
                startAutoplay();
            });

            nextBtn.addEventListener('click', () => {
                goToSlide(currentSlide + 1);
                stopAutoplay();
                startAutoplay();
            });

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                    stopAutoplay();
                    startAutoplay();
                });
            });

            // Touch events for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener('touchstart', e => {
                touchStartX = e.touches[0].clientX;
                stopAutoplay();
            }, false);

            slider.addEventListener('touchmove', e => {
                touchEndX = e.touches[0].clientX;
            }, false);

            slider.addEventListener('touchend', () => {
                const diffX = touchStartX - touchEndX;
                if (Math.abs(diffX) > 50) { // Minimum swipe distance
                    if (diffX > 0) {
                        goToSlide(currentSlide + 1);
                    } else {
                        goToSlide(currentSlide - 1);
                    }
                }
                startAutoplay();
            }, false);

            // Start autoplay on load
            startAutoplay();
        });
    </script>
</main>

