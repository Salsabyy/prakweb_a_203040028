<?php

class Mahasiswa_model {
    private $dbh, // database handler
    private $stmt;

    public function __construct()
        {
            // data source name 
            $dsn = 'mysql:host=licalhost;dbname=Phpmvc';


            try {
                $this->dbh = new PDO($dsn, 'root', 'roor');
            }   catch(PDOException $e) {
                die ($e->getMassage());
            }
        }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->fetchAll(PDO::FETCH_ASSOC);

    }



}