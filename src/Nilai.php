<?php
include "DB.php";

class Nilai extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT id_matapelajaran,NIS,UTS,US,UN,keterangan
                                FROM nilai");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO nilai
                 VALUES(:id_matapelajaran,
                        :NIS,
                        :UTS,
                        :US,
                        :UN,
                        :keterangan)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':id_matapelajaran' => $data['id_matapelajaran'],
           ':NIS' => $data['NIS'],
           ':UTS' => $data['UTS'],
           ':US' => $data['US'],
           ':UN' => $data['UN'],
           ':keterangan' => $data['keterangan']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataNilai($nilai){
        $query = "SELECT * FROM nilai
                  WHERE id_matapelajaran=:nilai";

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

    public function editNilai($data){
        $query = "UPDATE pendidik
                  SET id_matapelajaran = :id_matapelajaran,
                      NIS = :NIS,
                      UTS = :UTS,
                      US = :US,
                      UN = :UN,
                      keterangan = :keterangan
                  WHERE id_matapelajaran = :id_matapelajaranEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':id_matapelajaran' => $data['id_matapelajaran'],
                  ':NIS' => $data['NIS'],
                  ':UTS' => $data['UTS'],
                  ':US' => $data['US'],
                  ':UN' => $data['UN'],
                  ':keterangan' => $data['keterangan'],
                  ':id_matapelajaranEdit' => $data['id_matapelajaran']
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
