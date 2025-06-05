<footer class="bg-gradient-to-r from-[#f7f6f2] via-[#eef3e6] to-[#f7f6f2] text-[#4e5e48] py-4">
    <div class="flex flex-col md:flex-row md:items-start justify-between gap-8 px-8 max-w-6xl mx-auto text-center">
        <!-- Liens utiles -->
        <div class="md:w-1/3">
            <h4 class="text-xl font-semibold mb-2">Liens utiles</h4>
            <ul class="space-y-1 text-base">
                <li><a href="<?= BASE_URL ?>index.php" class="text-blue-500 hover:text-blue-600  transition">Accueil</a></li>
                <li><a href="<?= BASE_URL ?>#prestations" class="text-blue-500 hover:text-blue-600  transition">Nos prestations</a></li>
                <li><a href="<?= BASE_URL ?>views/contact.php" class="text-blue-500 hover:text-blue-600 transition">Contact</a></li>
            </ul>
        </div>

        <!-- Horaires -->
        <div class="md:w-1/3">
            <h4 class="text-xl font-semibold mb-2">Horaires</h4>
            <ul class="space-y-1 text-base">
                <li>Lundi - Samedi : 8h - 18h</li>
                <li>Dimanche : Fermé</li>
                <li class="italic mt-4 text-base">Horaires aménageables. Sur rendez-vous uniquement</li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="md:w-1/3">
            <h4 class="text-xl font-semibold mb-2">Contact</h4>
            <ul class="space-y-1 text-base">
                <li>📍 Rocbaron, Var (83)</li>
                <li>📞 06-69-02-34-00</li>
                <li>✉️ <a href="mailto:plaisirdaidervar@hotmail.fr" class="text-blue-600 hover:text-blue-800 underline">plaisirdaidervar@hotmail.fr</a></li>
                <li>Notre page <a href="https://www.facebook.com/AuPlaisirDaider" class="text-blue-600 hover:text-blue-800 underline">Facebook</a> pour plus d'informations et d'avis.</li>
            </ul>
        </div>
    </div>

    <div class="mt-8 border-t border-gray-300 pt-4 text-center text-base px-4">
        <p class="mb-4">Afin d'éviter des problèmes de droits, la plupart des photos sur ce site ont été générées par l'intelligence artificielle.</p>
        &copy; <?= date('Y') ?> Plaisir d'Aider. Tous droits réservés.
    </div>
</footer>
</body>
</html>
