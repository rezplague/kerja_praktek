<?php
include "DB.php";

class Kelas extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT id_kelas, nama_kelas, tahun_ajaran, semester
                                FROM kelas");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO kelas
                 VALUES(:id_kelas,
                        :nama_kelas,
                        :tahun_ajaran,
                        :semester)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':id_kelas' => $data['id_kelas'],
           ':nama_kelas' => $data['nama_kelas'],
           ':tahun_ajaran' => $data['tahun_ajaran'],
           ':semester' => $data['semester']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataKelas($id_kelas){
        $query = "SELECT * FROM kelas
                  WHERE id_kelas=:id_kelas";

        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [':id_kelas' => $id_kelas];

            $qr->execute($data);

            return $qr->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

    public function editKelas($data){
        $query = "UPDATE kelas
                  SET id_kelas = :id_kelas,
                      nama_kelas = :nama_kelas,
                      tahun_ajaran = :tahun_ajaran,
                      semester = :semester
                  WHERE id_kelas = :id_kelasEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':id_kelas' => $data['id_kelas'],
                  ':nama_kelas' => $data['nama_kelas'],
                  ':tahun_ajaran' => $data['tahun_ajaran'],
                  ':semester' => $data['semester'],
                  ':id_kelasEdit' => $data['id_kelas']
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
