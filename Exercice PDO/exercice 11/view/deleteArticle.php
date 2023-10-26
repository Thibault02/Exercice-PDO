<?php
// Inclut le modèle Article pour pouvoir l'utiliser
include dirname(__FILE__) . '/../model/article.php';

// Crée une nouvelle instance de la classe Article
$articleModel = new Article();

// Récupère la liste de tous les articles
$articles = $articleModel->getArticleList();

// Vérifie si le bouton de suppression a été cliqué
if(isset($_POST['deleteBtn'])) {
    // Récupère l'ID de l'article à supprimer
    $deleteId = intval($_POST['deleteId']);
    
    // Appelle la méthode pour supprimer l'article par son ID
    $articleModel->deleteArticleById($deleteId);
}
?>
<div class="container">
    <h1>Liste des Articles</h1>
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Boucle pour afficher chaque article dans le tableau -->
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo ($article['id']); ?></td>
                    <td><?php echo ($article['title']); ?></td>
                    <td><?php echo ($article['content']); ?></td>
                    <!-- Affiche l'image de l'article avec une taille fixe -->
                    <td><img src="<?php echo ($article['img']); ?>" alt="Image" style="width: 50px; height: 50px;"></td>
                    <td><?php echo ($article['state']); ?></td>
                    <td><?php echo ($article['created_at']); ?></td>
                    <td>
                        <!-- Formulaire pour la suppression de l'article. Un message de confirmation sera affiché avant la suppression. -->
                        <form method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article?');">
                            <!-- Champ caché contenant l'ID de l'article à supprimer -->
                            <input type="hidden" name="deleteId" value="<?php echo $article['id']; ?>">
                            <!-- Bouton pour soumettre le formulaire et supprimer l'article -->
                            <button type="submit" name="deleteBtn">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
