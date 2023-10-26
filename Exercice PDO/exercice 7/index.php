<?php 
include("view/header.php");
echo '<h1>PDO</h1>';

if (isset($_GET['getArticleList'])) {
    include 'view/getArticleList.php';
} elseif (isset($_GET['FiveArticles'])) {
    include 'view/view5Article.php';
} elseif (isset($_GET['mArticle'])) {
    include 'view/getArticleByM.php';}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PDO</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
