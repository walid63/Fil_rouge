<?php 
include "./modele/database/connect_db.php";

class ArticleModel
{
    private $id;
    private $nom;
    private $description;
    private $prix;

    private $imgProduct1;

    private $db;

    public function __construct($nom = "",$description = "", $prix = "",$imgProduct1 = "")
    {
        $this->db = new connect_db;
       
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->imgProduct1 = $imgProduct1;
    }

    public function create()
    {
        $stmt = $this->db->getpdo()->prepare("INSERT INTO article (nom, description, prix) VALUES (:nom,:description,:prix)");
        $stmt->bindParam(":nom",$this->nom);
        $stmt->bindParam(":description",$this->description);
        $stmt->bindParam(":prix",$this->prix);
        $stmt->execute();

        $stmt = $this->db->getpdo()->prepare("SELECT LAST_INSERT_ID() from article");
        $stmt->execute();
        $id = $stmt->fetch()['id_article'];

        $stmt = $this->db->getpdo()->prepare("insert into avoir (id_article, id_categorie ) VALUES (:id_article, :id_category)");
        $stmt->bindParam(":id_article", $id);
        $stmt->bindParam(":id_category",$id);//$id_category
        $stmt->execute();
    }

}