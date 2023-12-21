<?php

class Database {
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    private $conn;
    private $stmt;
    private $error;
    
    public function __construct() {
        $this->host = $_ENV["HOSTNAME"];
        $this->port = $_ENV["PORT"];
        $this->username = $_ENV["USERNAME"];
        $this->password = $_ENV["PASSWORD"];
        $this->database = $_ENV["DBNAME"];
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->database";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true);
        try {
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        }
        catch (PDOException $e) {
            // $this->error_code = $e->getCode();
            $this->error = $e->getMessage();
        }
    }

    public function prepareQuery($sql) {
        $this->stmt = $this->conn->prepare($sql);
    }

    public function execute($vars = array()) {
        return $this->stmt->execute($vars);
    }

    public function resultSet($vars = array()) {
        $this->execute($vars);
        // return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultSingle($vars = array()) {
        $this->execute($vars);
        // return $this->stmt->fetch(PDO::FETCH_OBJ);
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }
}