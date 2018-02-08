<?php
include "DB.php";

class Nilai extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT mata_pelajaran.nama_matapelajaran, nilai.NIS, nilai.UTS, nilai.US, nilai.UN, nilai.keterangan
                                FROM nilai
                                JOIN mata_pelajaran
                                ON nilai.id_matapelajaran=mata_pelajaran.id_matapelajaran");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO nilai(id_matapelajaran,NIS,UTS,US,UN,Keterangan)
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
           ':NIS' => $data['nis'],
           ':UTS' => $data['uts'],
           ':US' => $data['us'],
           ':UN' => $data['un'],
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

            $data = [':id_matapelajaran' => $nilai];

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

    public function namaMataPelajaran(){
       try {
         $query = $this->connection
                       ->query("SELECT id_matapelajaran,nama_matapelajaran
                                FROM mata_pelajaran");
                         $query->execute();


       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tampilNisNama(){
       try {
         $query = $this->connection
                       ->query("SELECT nis,nama_siswa
                                FROM peserta_didik");
                         $query->execute();


       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

}

?>
