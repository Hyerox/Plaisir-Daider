<?php
require_once dirname(__FILE__) . '/../config/config.php'; 
$pageTitle = 'Requêtes';
require_once BASE_PATH . "/models/contact.php";

// Vérification de l'authentification de l'utilisateur
function checkAuth() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . 'index.php');
        exit;
    }
}

// Appel de la vérification
checkAuth();

require_once BASE_PATH . "/partials/header.php";

$contacts = Contact::getAll();
?>

<section class="py-12 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4] min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">
        <?php if (isset($_GET['delete_success'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">Message supprimé avec succès!</div>
        <?php elseif (isset($_GET['delete_error'])): ?>
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">Erreur lors de la suppression du message.</div>
        <?php elseif (isset($_GET['update_success'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">Message mis à jour avec succès!</div>
        <?php elseif (isset($_GET['update_error'])): ?>
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">Erreur lors de la mise à jour du message.</div>
        <?php endif; ?>

        <h2 class="text-4xl font-bold text-center mb-8 text-[#2f3e2d] tracking-tight">
            <span class="relative inline-block">
                Messages reçus
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-[#a0b292] via-[#c7d8bc] to-[#a0b292]"></div>
            </span>
        </h2>
        <div class="overflow-x-auto bg-white/90 backdrop-blur-sm rounded-xl shadow-lg border border-[#cde0c6]">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-[#cce3c1]/80 text-[#2f3e2d]">
                        <th class="px-6 py-4 font-semibold text-left">Nom</th>
                        <th class="px-6 py-4 font-semibold text-left">Prénom</th>
                        <th class="px-6 py-4 font-semibold text-left">Email</th>
                        <th class="px-6 py-4 font-semibold text-left">Téléphone</th>
                        <th class="px-6 py-4 font-semibold text-left">Message</th>
                        <th class="px-6 py-4 font-semibold text-left">Date</th>
                        <th class="px-6 py-4 font-semibold text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#cde0c6]">
                    <?php foreach ($contacts as $contact): ?>
                        <tr class="hover:bg-[#eef3e6]/50 transition-colors duration-200">
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['nom']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['prenom']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['email']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['telephone']) ?></td>
                            <td class="px-6 py-4 text-gray-700">
                                <div class="relative">
                                    <div class="message-content max-w-md" style="white-space: pre-line;">
                                        <?php if (strlen($contact['message']) > 100): ?>
                                            <div class="truncated-message overflow-hidden" style="display: block; max-height: 2.5em; line-height: 1.25em;">
                                                <?= nl2br(htmlspecialchars($contact['message'])) ?>
                                            </div>
                                            <div class="full-message" style="display: none;">
                                                <?= nl2br(htmlspecialchars($contact['message'])) ?>
                                            </div>
                                            <button onclick="toggleMessage(this)" class="text-blue-600 hover:text-blue-800 text-sm mt-1" data-expanded="false">
                                                Voir plus
                                            </button>
                                        <?php else: ?>
                                            <?= nl2br(htmlspecialchars($contact['message'])) ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-700"><?= date('d/m/Y H:i', strtotime($contact['created_at'])) ?></td>
                            <td class="px-6 py-4">
                                <div class="flex gap-4">
                                    <button onclick="openEditModal(<?= htmlspecialchars(json_encode($contact)) ?>)" 
                                            class="text-blue-600 hover:text-blue-800">
                                        Modifier
                                    </button>
                                    <form action="<?= BASE_URL ?>controllers/deleteMessageController.php" method="POST" 
                                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');" 
                                          class="inline">
                                        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                        <button type="submit" class="text-red-600 hover:text-red-800">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal d'édition -->
<div id="editModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 flex items-center justify-center">
    <div class="relative mx-auto p-8 border w-full max-w-md shadow-lg rounded-md bg-white">
        <div class="absolute top-3 right-3">
            <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-6">Modifier le message</h3>
        <form id="editForm" action="<?= BASE_URL ?>controllers/updateMessageController.php" method="POST">
            <input type="hidden" id="edit_id" name="id">
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit_nom">Nom</label>
                    <input type="text" id="edit_nom" name="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit_prenom">Prénom</label>
                    <input type="text" id="edit_prenom" name="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit_email">Email</label>
                    <input type="email" id="edit_email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit_telephone">Téléphone</label>
                    <input type="text" id="edit_telephone" name="telephone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit_message">Message</label>
                    <textarea id="edit_message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" rows="4"></textarea>
                </div>
                <div class="flex justify-end space-x-4 mt-6">
                    <button type="button" onclick="closeEditModal()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Annuler
                    </button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Enregistrer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(contact) {
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('edit_id').value = contact.id;
    document.getElementById('edit_nom').value = contact.nom;
    document.getElementById('edit_prenom').value = contact.prenom;
    document.getElementById('edit_email').value = contact.email;
    document.getElementById('edit_telephone').value = contact.telephone;
    document.getElementById('edit_message').value = contact.message;
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
}

function toggleMessage(button) {
    const parentDiv = button.parentElement;
    const truncatedMessage = parentDiv.querySelector('.truncated-message');
    const fullMessage = parentDiv.querySelector('.full-message');
    const isExpanded = button.getAttribute('data-expanded') === 'true';
    
    if (isExpanded) {
        truncatedMessage.style.display = 'block';
        fullMessage.style.display = 'none';
        button.textContent = 'Voir plus';
        button.setAttribute('data-expanded', 'false');
    } else {
        truncatedMessage.style.display = 'none';
        fullMessage.style.display = 'block';
        button.textContent = 'Voir moins';
        button.setAttribute('data-expanded', 'true');
    }
}
</script>

<?php require_once BASE_PATH . "/partials/footer.php"; ?>