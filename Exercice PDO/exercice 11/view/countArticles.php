<?php
include 'model/article.php';
// instancier la classe Article
$article = new Article();
// appeler la méthode countArticles
$articles = $article->countArticles();
?>

    <div class="container">
        <!--affiche le nombre total d'article -->
    <h1>Total des articles en base de données: <?php echo $articles; ?></h1>
</div>

</div>
