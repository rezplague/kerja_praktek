<?php
include "DB.php";

class Nilai extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT mata_pelajaran.nama_matapelajaran, nilai.NIS, peserta_didik.nama_siswa, nilai.UTS, nilai.US, nilai.UN, nilai.keterangan
                                FROM nilai
                                JOIN mata_pelajaran
                                ON nilai.id_matapelajaran=mata_pelajaran.id_matapelajaran
                                JOIN peserta_didik
                                ON nilai.NIS=peserta_didik.NIS");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

}

?>
