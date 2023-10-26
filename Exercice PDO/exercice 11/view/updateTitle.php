<?php
include 'model/article.php';
$updatedTitle = "Mon titre modifier";
$articleModel = new Article();
// Met à jour l'article
$articleModel->updateArticleById(11,$updatedTitle); 

// Récupérez les détails de l'article mis à jour par sont id
$article = $articleModel->getArticleById(11); 
?>

<div class="container">
    <h1>Article ID: <?php echo htmlspecialchars($article['id']); ?></h1>
    <h2><?php echo htmlspecialchars($article['title']); ?></h2>
    <p><?php echo htmlspecialchars($article['content']); ?></p>
    <img src="<?php echo htmlspecialchars($article['img']); ?>" alt="Image" style="width: 50px; height: 50px;">
    <p>État: <?php echo htmlspecialchars($article['state']); ?></p>
    <p>Date de Création: <?php echo htmlspecialchars($article['created_at']); ?></p>
</div>
