<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="container mx-auto p-8 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Liste des Produits</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nom</th>
                        <th class="py-3 px-6 text-left">Prix</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr class="border-t border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6"><?= $product["id"] ?></td>
                        <td class="py-3 px-6"><?= $product["name"] ?></td>
                        <td class="py-3 px-6"><?= $product["price"] ?> DH</td>
                        <td class="py-3 px-6"><?= $product["description"] ?></td>
                        <td class="py-3 px-6 text-center">
                            <a href="index.php?action=delete&id=<?= $product['id'] ?>"
                               class="text-red-500 hover:underline">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-center">
            <a href="view/add_product.php"
               class="bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Ajouter un produit
            </a>
        </div>
    </div>

</body>
</html>
