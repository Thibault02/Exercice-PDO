<?php
include 'model/article.php';
$article = new Article();
$articles = $article->getArticleListByContentM();
?>

<div class="container">
    <h1>Liste des Artice qui commence par "m"</h1>
    <table>
        <thead>
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
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo htmlspecialchars($article['id']); ?></td>
                    <td><?php echo htmlspecialchars($article['title']); ?></td>
                    <td><?php echo htmlspecialchars($article['content']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($article['img']); ?>" alt="Image" style="width: 50px; height: 50px;"></td>
                    <td><?php echo htmlspecialchars($article['state']); ?></td>
                    <td><?php echo htmlspecialchars($article['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
