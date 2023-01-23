<?php

include "./modele/database/connect_db.php";

class User extends connect_db
{
    private $db;
    private $query;
    
    public function __construct()
    {
        $this->db = new connect_db;
    }

    public function register($nom, $prenom, $username, $password, $adresse, $code_postal, $ville, $pays, $email)
    {
        $insertPersonne = $this->getpdo()->prepare("INSERT INTO personne (nom, prenom, adresse, code_postal, ville, pays, email) 
        VALUES (:nom, :prenom, :adresse, :code_postal, :ville, :pays, :email);");
        $insertPersonne->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":adresse" => $adresse,
            ":code_postal" => intval($code_postal),
            ":ville" => $ville,
            ":pays" => $pays,
            ":email" => $email
        ]);
        $sql = $this->getpdo()->prepare("SELECT id_personne from personne where nom = :nom and prenom = :prenom;");
        $sql->execute([
            ":nom" => $nom,
            ":prenom" => $prenom
        ]);
        $last_id = $sql->fetch();
        $insert_client = $this->getpdo()->prepare("INSERT INTO client (pseudo, mot_de_passe, id_personne) 
        VALUES (:pseudo, :mot_de_passe, :personne_id);");
        $insert_client->execute([
            ":pseudo" => $username,
            ":mot_de_passe" => $password,
            ":personne_id" => $last_id["id_personne"]
        ]);
    }

    public function login($login, $pass)
    {

        $sql = "select * from client where pseudo = :login and mot_de_passe = :pass;";
        $data = $this->getpdo()->prepare($sql);
        $data->bindValue(':login', $login);
        $data->bindValue(':pass', $pass);
        $data->execute();

        $result = $data->fetch();
        //var_dump($result);
        // return $result;
        if ($result == true) {
            echo "ok";
            $_SESSION['user_id'] = $result["id_personne"];
            var_dump($result["id_personne"]);
            header('location: index.php?uc=home');
    
        } else {
            echo "error";
        }
    }

   
}