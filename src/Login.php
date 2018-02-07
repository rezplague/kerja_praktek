<?php
include "DB.php";
class login extends DB{
    public function __construct(){
        parent::__construct();
    }

    public function cekPengguna($data){
        $query = "SELECT username,password,level
                  FROM pengguna
                  WHERE username = :username
                  AND password = :password";

        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [':username' => $data['username'],
                     ':password' => $data['password']];

            $qr->execute($data);

            return $qr->fetch();
            // return $qr->fetchColumn();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }


}
 ?>
