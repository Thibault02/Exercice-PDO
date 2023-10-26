<?php
include 'model/article.php';
$article = new Article();
$articles = $article->countArticles();
?>
    <div class="container">
    <h1>Total des articles en base de données: <?php echo $articles; ?></h1>
</div>

</div>
