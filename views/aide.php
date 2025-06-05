<?php
require_once dirname(__FILE__) . "/../config/config.php";
$pageTitle = 'Aide Financière';
require_once BASE_PATH . "/partials/header.php";
?>

<main class="min-h-screen bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
    <!-- Hero Section -->
    <section class="relative h-[600px] z-0">
        <img src="<?= BASE_URL ?>images/aide-financiere.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75" alt="Background"/>
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center">Aides Financières</h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 max-w-4xl mx-auto">
                <!-- Crédit d'impôts -->
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-[#cde0c6]">
                    <h2 class="text-2xl font-bold text-[#2f3e2d] mb-4">Crédit d'impôts et réduction d'impôts</h2>
                    <p class="text-[#4e5e48] mb-4">
                        Nos différentes prestations vous permettent de bénéficier d'un crédit d'impôt égal à 50% des dépenses 
                        que vous avez engagées dans l'année (art. 199 sexdecies du CGI).
                    </p>
                    <a href="https://www.impots.gouv.fr/particulier/emploi-domicile" target="_blank"  class="text-[#375634] hover:text-[#2f3e2d] underline font-medium">En savoir plus →</a>
                </div>

                <!-- APA -->
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-[#cde0c6]">
                    <h2 class="text-2xl font-bold text-[#2f3e2d] mb-4">L'allocation personnalisée d'autonomie (APA)</h2>
                    <p class="text-[#4e5e48] mb-4">
                        Elle est attribuée aux personnes âgées de plus de 60 ans dépendantes (classées dans les catégories 1 à 4 de la grille AGGIR).
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.pour-les-personnes-agees.gouv.fr/preserver-son-autonomie/perte-d-autonomie-evaluation-et-droits/l-allocation-personnalisee-d-autonomie-apa" target="_blank" class="text-[#375634] hover:text-[#2f3e2d] underline font-medium">En savoir plus →</a>
                        <a href="<?= BASE_URL ?>views/contact.php" target="_blank" class="text-[#375634] hover:text-[#2f3e2d] underline font-medium">Nous contacter →</a>
                    </div>
                </div>

                <!-- Aide sociale départementale -->
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-[#cde0c6]">
                    <h2 class="text-2xl font-bold text-[#2f3e2d] mb-4">L'aide à domicile au titre de l'aide sociale départementale</h2>
                    <p class="text-[#4e5e48]">
                        Elle est attribuée aux personnes âgées de plus de 60 ans peu ou pas dépendantes (classées dans les 
                        catégories 5 et 6 de la grille AGGIR), sous conditions de ressources par rapport à un plafond légal 
                        d'attribution. Lorsque les ressources sont supérieures au plafond, elle peut être prise en charge au
                        titre de l'aide sociale départementale.</p>
                    <a href="https://www.pour-les-personnes-agees.gouv.fr/vivre-a-domicile/aides-financieres/l-aide-menagere-a-domicile?" target="_blank" class="text-[#375634] underline hover:text-[#2f3e2d] font-medium">En savoir plus →</a>
                </div>

                <!-- Aide ménagère à domicile -->
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-[#cde0c6]">
                    <h2 class="text-2xl font-bold text-[#2f3e2d] mb-4">L'aide ménagère à domicile prise en charge par les caisses de retraite</h2>
                    <p class="text-[#4e5e48] mb-4">
                        L'aide ménagère à domicile est une prestation de votre caisse de retraite (CARSAT, MSA, ...). 
                        La participation horaire du bénéficiaire est déterminée selon le barème de ressources adopté 
                        chaque année par la Caisse Nationale d'Assurance Vieillesse (CNAV). Pour l'année 2025, elle est de 11.88€/heure.
                    </p>
                    <a href="https://legislation.lassuranceretraite.fr/Pdf/circulaire_cnav_2025_08_05032025.pdf" target="_blank" class="text-[#375634] hover:text-[#2f3e2d] underline font-medium">En savoir plus →</a>
                </div>

                <!-- Garde à domicile momentanée -->
                <div class="bg-white/90 backdrop-blur-sm rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow border border-[#cde0c6]">
                    <h2 class="text-2xl font-bold text-[#2f3e2d] mb-4">Garde à domicile momentanée des personnes âgées</h2>
                    <p class="text-[#4e5e48] mb-4">
                        Votre caisse de retraite (CARSAT, MSA, ...) peut vous aider pour faire face à des situations 
                        urgentes, temporaires et/ou imprévues : sortie d'hospitalisation, absence momentanée de 
                        l'entourage familial, maladie, dépendance chronique, physique ou psychique. Cette aide 
                        consiste en la prise en charge de frais de garde de la personne âgée, titulaire d'une 
                        retraite ou d'une pension de reversion.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.lassuranceretraite.fr/portail-info/files/live/sites/pub/files/PDF/demande-aides-autonomie-domicile-personnes-agees.pdf" target="_blank" class="text-[#375634] underline hover:text-[#2f3e2d] font-medium">En savoir plus →</a>
                        <a href="<?= BASE_URL ?>views/contact.php" target="_blank" class="text-[#375634] hover:text-[#2f3e2d] underline font-medium">Nous contacter →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once BASE_PATH . "/partials/footer.php"; ?>
