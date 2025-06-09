<?php
require_once dirname(__DIR__) . '/config/config.php';
$pageTitle = 'Mentions Légales';
require_once BASE_PATH . "/partials/header.php";
?>

<main class="min-h-screen bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4] py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-12 text-[#1e291c] relative">
            <span class="relative inline-block">
                Mentions Légales
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
            </span>
        </h1>

        <div class="bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg max-w-4xl mx-auto space-y-8">
            <section>
                <h2 class="text-2xl font-semibold text-[#2f3e2d] mb-4">1. Informations légales</h2>
                <div class="space-y-2 text-[#1a2819]">
                    <p>Ce site est édité par Plaisir D'aider</p>
                    <p>Siège social : Rocbaron, Var (83)</p>
                    <p>Téléphone : 06-69-02-34-00</p>
                    <p>Email : plaisirdaidervar@hotmail.fr</p>
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-[#2f3e2d] mb-4">2. Hébergeur</h2>
                <div class="space-y-2 text-[#1a2819]">
                    <p>Ce site est hébergé par Render</p>
                    <p>Render Corporation</p>
                    <p>525 Brannan Street, Suite 300</p>
                    <p>San Francisco, CA 94107</p>
                    <p>United States</p>
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-[#2f3e2d] mb-4">3. Propriété intellectuelle</h2>
                <p class="text-[#1a2819]">L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés. La reproduction de tout ou partie de ce site sur quelque support que ce soit est formellement interdite sauf autorisation expresse de Plaisir D'aider.</p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-[#2f3e2d] mb-4">4. Protection des données personnelles</h2>
                <p class="text-[#1a2819]">Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant. Pour toute demande concernant vos données personnelles, vous pouvez nous contacter par email à plaisirdaidervar@hotmail.fr.</p>
            </section>
        </div>
    </div>
</main>

<?php require_once BASE_PATH .  "/partials/footer.php"; ?>