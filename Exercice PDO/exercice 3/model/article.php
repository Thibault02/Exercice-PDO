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
        echo"connexion réussie";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
}
