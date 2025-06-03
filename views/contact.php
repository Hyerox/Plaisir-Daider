<?php
require_once dirname(__FILE__) . '/../config/config.php';
$pageTitle = 'Contact';
require_once BASE_PATH . "/partials/header.php";
?>
<!-- Section Contact -->
<section id="contact" class="py-16 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4]">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-[#2f3e2d] relative">
            <span class="relative inline-block">
                Contactez-nous
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
            </span>
        </h2>
        <div class="max-w-2xl mx-auto bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg border border-[#cde0c6]">
            <form action="<?= BASE_URL ?>controllers/contactController.php" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nom" class="block text-[#2f3e2d] font-medium mb-2">Nom</label>
                        <input type="text" id="nom" name="nom" required placeholder="Dupont"
                            class="w-full px-4 py-2 border border-[#cde0c6] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a0b292]">
                    </div>
                    <div>
                        <label for="prenom" class="block text-[#2f3e2d] font-medium mb-2">Prénom</label>
                        <input type="text" id="prenom" name="prenom" required placeholder="Gérard"
                            class="w-full px-4 py-2 border border-[#cde0c6] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a0b292]">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-[#2f3e2d] font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" required placeholder="exemple@hotmail.fr"
                        class="w-full px-4 py-2 border border-[#cde0c6] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a0b292]">
                </div>
                <div>
                    <label for="telephone" class="block text-[#2f3e2d] font-medium mb-2">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" required 
                        minlength="10" maxlength="10" 
                        pattern="[0-9]{10}"
                        placeholder="0123456789"
                        class="w-full px-4 py-2 border border-[#cde0c6] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a0b292]">
                </div>
                <div>
                    <label for="message" class="block text-[#2f3e2d] font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required 
                        class="w-full px-4 py-2 border border-[#cde0c6] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a0b292]"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" 
                        class="bg-[#cce3c1] text-[#375634] px-8 py-3 rounded-lg font-bold hover:bg-[#b9d5aa] transition-colors shadow-lg">
                        Envoyer le message
                    </button>
                </div>
                <?php if (isset($_GET['success'])): ?>
                <div class="mb-6 text-green-700 bg-green-100 p-4 rounded">Message envoyé avec succès !</div>
                <?php elseif (isset($_GET['error'])): ?>
                <div class="mb-6 text-red-700 bg-red-100 p-4 rounded">Une erreur est survenue. Merci de réessayer.</div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</section>

<?php
require_once BASE_PATH . "/partials/footer.php";
?>