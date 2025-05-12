<?php
$pageTitle = 'Ménage';
require_once "../partials/header.php";
?>
<!-- Section Contact -->
<section id="contact" class="py-16 bg-orange-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-orange-900">Contactez-nous</h2>
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="traitement_contact.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nom" class="block text-orange-900 font-medium mb-2">Nom</label>
                            <input type="text" id="nom" name="nom" required 
                                class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300">
                        </div>
                        <div>
                            <label for="prenom" class="block text-orange-900 font-medium mb-2">Prénom</label>
                            <input type="text" id="prenom" name="prenom" required 
                                class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-orange-900 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" required 
                            class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300">
                    </div>
                    <div>
                        <label for="telephone" class="block text-orange-900 font-medium mb-2">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" required 
                            class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300">
                    </div>
                    <div>
                        <label for="message" class="block text-orange-900 font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" required 
                            class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" 
                            class="bg-orange-200 text-orange-900 px-8 py-3 rounded-lg font-bold hover:bg-orange-300 transition-colors shadow-lg">
                            Envoyer le message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>