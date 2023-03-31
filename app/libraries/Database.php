<?php

class database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $dbHandler;
    private $statement;



    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ";charset=UTF8";

        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    public function execute()
    {
        return $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}

comments

// Path: app\libraries\Database.php
// Compare this snippet from app\libraries\Core.php:
// <?php
//
// class Core
// {
//     private $currentController = 'PoundForPound';
//     private $currentMethod = 'index';
//     private $params = [];
//  
//     public function __construct()
//     {
//         $url = $this->getURL();
//
//        // var_dump($url);
//
//        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php' ))      
//        {
//             $this->currentController = ucwords($url[0]);
//
//             // Haal de controllername uit het $url array
//             unset($url[0]);
//        }
//
