<?php
include 'model/article.php';

$articleModel = new Article();
$result = $articleModel->updateArticleById(11, "Mon titres modifier");

if ($result) {
    echo "Titre de l'article 11 mis à jour avec succès!";
} else {
    echo "Échec de la mise à jour du titre de l'article 11.";
}
