<?php
// require_once "config.php";

class DB{
    private static $instance = null;

    private $dbh;

    protected function __construct(){
      require_once "config.php";

      try{
        return $this->dbh = new PDO($dsn,$user,$pass,$opt);
      } catch (PDOException $e) {
        echo $e->getMessage();
        die();
      }

    }

    public static function getInstance(){
        if(self::$instance == null){
          self::$instance = new DB();
        }
        return self::$instance;
    }

    private function __clone(){

    }

    private function __wakeup(){

    }

    public function tulisHello(){
        return "Tulis Hello";
    }
}

$db = DB::getInstance();
$qr = $db->query("SELECT * FROM pengguna");

var_dump($qr);
// var_dump($db);
// var_dump($config);
// echo "hello";
?>
