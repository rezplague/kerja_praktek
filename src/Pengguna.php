<?php
include "DB.php";

class Pengguna extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT username,password,level,NIP
                                FROM pengguna");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO pengguna
                 VALUES(:username,
                        :password,
                        :level,
                        :NIP)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':username' => $data['username'],
           ':password' => $data['password'],
           ':level' => $data['level'],
           ':NIP' => $data['NIP']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataPengguna($nip){
        $query = "SELECT * FROM pengguna
                  WHERE username=:username";

        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [':nip' => $nip];

            $qr->execute($data);

            return $qr->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

    public function editPengguna($data){
        $query = "UPDATE pengguna
                  SET username = :username,
                      password = :password,
                      level = :level,
                      NIP = :NIP
                  WHERE username = :usernameEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':username' => $data['username'],
                  ':password' => $data['password'],
                  ':level' => $data['level'],
                  ':NIP' => $data['NIP'],
                  ':usernameEdit' => $data['username']
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
