<?php
require_once dirname(__FILE__) . '/../config/config.php'; 
$pageTitle = 'Requêtes';
require_once BASE_PATH . "/models/Contact.php";
require_once BASE_PATH . "/partials/header.php";

$contacts = Contact::getAll();
?>

<section class="py-12 bg-gradient-to-br from-[#f7f6f2] via-[#eef3e6] to-[#e1e9d4] min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">
        <?php if (isset($_GET['delete_success'])): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">Message supprimé avec succès!</div>
        <?php elseif (isset($_GET['delete_error'])): ?>
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">Erreur lors de la suppression du message.</div>
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
                            <td class="px-6 py-4 text-gray-700 max-w-md truncate"><?= nl2br(htmlspecialchars($contact['message'])) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= date('d/m/Y H:i', strtotime($contact['created_at'])) ?></td>
                            <td class="px-6 py-4">
                                <form action="<?= BASE_URL ?>controllers/deleteMessageController.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require_once BASE_PATH . "/partials/footer.php"; ?>