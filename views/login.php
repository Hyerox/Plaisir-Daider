<?php
require_once dirname(__FILE__) . "/../config/config.php";
$pageTitle = 'Connexion';
require_once BASE_PATH . "/partials/header.php";
?>

<main class="min-h-screen bg-orange-50">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="bg-orange-200 px-6 py-8">
                <div class="text-center mb-4">
                    <img src="<?= BASE_URL ?>images/logo.webp" alt="Logo Plaisir d'Aider" class="w-32 mx-auto">
                </div>
                <h2 class="text-2xl font-bold text-orange-900 text-center">Connexion</h2>
            </div>
            
            <form class="px-6 py-8 space-y-6" action="<?= BASE_URL ?>controllers/loginController.php" method="POST">
                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-orange-900">Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:ring-2 focus:ring-orange-300 focus:border-orange-300">
                </div>

                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-orange-900">Mot de passe</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-2 border border-orange-200 rounded-lg focus:ring-2 focus:ring-orange-300 focus:border-orange-300">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" 
                               class="h-4 w-4 text-orange-500 border-orange-200 rounded focus:ring-orange-400">
                        <label for="remember" class="ml-2 text-sm text-orange-900">Se souvenir de moi</label>
                    </div>
                    <a href="mailto:didiernathan00@gmail.com" class="text-sm text-orange-600 hover:text-orange-800">
                        Mot de passe oublié?
                    </a>
                </div>

                <?php if (isset($_GET['error'])): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <button type="submit" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 
                        transition duration-200">
                    Se connecter
                </button>
            </form>
        </div>
    </div>
</main>

<?php require_once BASE_PATH . "/partials/footer.php"; ?>
