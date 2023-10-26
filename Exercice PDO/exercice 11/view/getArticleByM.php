<?php
// Inclut le modèle Article pour pouvoir l'utiliser
include 'model/article.php';

// Crée une nouvelle instance de la classe Article
$article = new Article();

// Récupère la liste des articles dont le contenu commence par la lettre "m"
$articles = $article->getArticleListByContentM();
?>

<div class="container">
    <h1>Liste des Articles qui commencent par "m"</h1>
    <table>
        <thead>
            <!-- En-tête du tableau des articles -->
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th>État</th>
                <th>Date de Création</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour afficher chaque article dans le tableau -->
            <?php foreach ($articles as $article): ?>
                <tr>
                    <!-- Utilisation de la fonction htmlspecialchars pour éviter les attaques XSS et afficher les données en toute sécurité -->
                    <td><?php echo htmlspecialchars($article['id']); ?></td>
                    <td><?php echo htmlspecialchars($article['title']); ?></td>
                    <td><?php echo htmlspecialchars($article['content']); ?></td>
                    <!-- Affiche l'image de l'article avec une taille fixe -->
                    <td><img src="<?php echo htmlspecialchars($article['img']); ?>" alt="Image" style="width: 50px; height: 50px;"></td>
                    <td><?php echo htmlspecialchars($article['state']); ?></td>
                    <td><?php echo htmlspecialchars($article['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
