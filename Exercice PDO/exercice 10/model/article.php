<?php
class Article {
    private $pdo;
    private $id;
    private $title;
    private $content;
    private $img;
    private $state;
    private $created_at;

// cree une methode constructeur qui se connecte a la base de donnees
public function __construct() {
    try {
        $this->pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
// cree une methode qui recupere la liste des articles
public function getArticleList() {
    $stmt = $this->pdo->query('SELECT * FROM pdo_article');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// cree une methode qui permet d'afficher les 5 premiers articles
public function getArticleListLimit5() {
    $stmt = $this->pdo->query("SELECT * FROM pdo_article LIMIT 5");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// cree une methode qui permet d'afficher les articles dont le titre commence par la lettre m
public function getArticleListByContentM() {
    $stmt = $this->pdo->query("SELECT * FROM pdo_article WHERE content LIKE 'm%'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//creer une methode qui compte le nombre d'article
public function countArticles() {
    $stmt = $this->pdo->query('SELECT COUNT(*) as total FROM pdo_article');
    $result = $stmt->fetch();
    return $result['total'];
}
// cree une methode qui recupere un article par son id
public function getArticleById($id) {
    $stmt = $this->pdo->prepare("SELECT * FROM pdo_article WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//cree une methode qui modifie un article par son id
public function updateArticleById($id, $newTitle) {
    $stmt = $this->pdo->prepare("UPDATE pdo_article SET title = :newTitle WHERE id = :id");
    $stmt->bindParam(':newTitle', $newTitle, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
}
