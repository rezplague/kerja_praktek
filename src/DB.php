<?php
// require_once "config.php";

class DB {
    protected $connection;

    private $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=dbsipabc",
                                      "root","",$this->opt);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}


?>
