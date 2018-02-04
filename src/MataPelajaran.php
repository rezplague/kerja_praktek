<?php
include "DB.php";

class MataPelajaran extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT id_matapelajaran,nama_matapelajaran,SKBM
                                FROM mata_pelajaran");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO mata_pelajaran
                 VALUES(:id_matapelajaran,
                        :nama_matapelajaran,
                        :SKBM)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':id_matapelajaran' => $data['id_matapelajaran'],
           ':nama_matapelajaran' => $data['nama_matapelajaran'],
           ':SKBM' => $data['SKBM']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataMapel($mapel){
        $query = "SELECT * FROM mata_pelajaran
                  WHERE id_matapelajaran=:id_matapelajaran";

        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [':id_matapelajaran' => $mapel];

            $qr->execute($data);

            return $qr->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

    public function editMapel($data){
        $query = "UPDATE mata_pelajaran
                  SET id_matapelajaran = :id_mapel,
                      nama_matapelajaran = :nama_matapelajaran,
                      SKBM = :SKBM
                  WHERE id_matapelajaran = :id_mapelEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':id_mapel' => $data['id_mapel'],
                  ':nama_matapelajaran' => $data['nama_matapelajaran'],
                  ':SKBM' => $data['SKBM'],
                  ':id_mapelEdit' => $data['id_mapel']
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
