<?php
$pageTitle = 'Requêtes';
require_once "../models/Contact.php";
require_once "../partials/header.php";

$contacts = Contact::getAll();
?>

<section class="py-12 bg-gradient-to-b from-orange-50 to-white min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">
        <h2 class="text-4xl font-bold text-center mb-8 text-orange-800 tracking-tight">
            <span class="border-b-4 border-orange-400 pb-2">Messages reçus</span>
        </h2>
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-orange-100/80 text-orange-900">
                        <th class="px-6 py-4 font-semibold text-left">Nom</th>
                        <th class="px-6 py-4 font-semibold text-left">Prénom</th>
                        <th class="px-6 py-4 font-semibold text-left">Email</th>
                        <th class="px-6 py-4 font-semibold text-left">Téléphone</th>
                        <th class="px-6 py-4 font-semibold text-left">Message</th>
                        <th class="px-6 py-4 font-semibold text-left">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-orange-100">
                    <?php foreach ($contacts as $contact): ?>
                        <tr class="hover:bg-orange-50/50 transition-colors duration-200">
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['nom']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['prenom']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['email']) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($contact['telephone']) ?></td>
                            <td class="px-6 py-4 text-gray-700 max-w-md truncate"><?= nl2br(htmlspecialchars($contact['message'])) ?></td>
                            <td class="px-6 py-4 text-gray-700"><?= date('d/m/Y H:i', strtotime($contact['created_at'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

