<?php
include "./modele/database/_config.php";

class connect_db
{
    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbUsr = DB_USER;
    private $dbPass = DB_PASS;

    private $dbCon;

    private $stmt;

    public function __construct()
    {
        try {
            $this->dbCon = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUsr, $this->dbPass);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function getpdo(){
        return $this->dbCon;
    }
   
}
