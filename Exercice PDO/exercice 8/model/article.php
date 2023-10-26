<?php
class Article {
    private $pdo;
    private $id;
    private $title;
    private $content;
    private $img;
    private $state;
    private $created_at;


public function __construct() {
    try {
        $this->pdo = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
public function getArticleList() {
    $stmt = $this->pdo->query('SELECT * FROM pdo_article');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function getArticleListLimit5() {
    $stmt = $this->pdo->query("SELECT * FROM pdo_article LIMIT 5");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getArticleListByContentM() {
    $stmt = $this->pdo->query("SELECT * FROM pdo_article WHERE content LIKE 'm%'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function countArticles() {
    $stmt = $this->pdo->query('SELECT COUNT(*) as total FROM pdo_article');
    $result = $stmt->fetch();
    return $result['total'];
}


}
