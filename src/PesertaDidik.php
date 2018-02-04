<?php
include "DB.php";

class PesertaDidik extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT NIS,NISN,nama_siswa,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat_siswa,jenis_kelainan,nama_ayah,nama_ibu
                                FROM peserta_didik");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO peserta_didik
                 VALUES(:nis,
                        :nisn,
                        :nama,
                        :tempat_lahir,
                        :tanggal_lahir,
                        :jenis_kelamin,
                        :agama,
                        :alamat_siswa,
                        :jenis_kelainan,
                        :nama_ayah,
                        :nama_ibu)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':nis' => $data['nis'],
           ':nisn' => $data['nisn'],
           ':nama' => $data['nama'],
           ':tempat_lahir' => $data['tempat_lahir'],
           ':tanggal_lahir' => $data['tanggal_lahir'],
           ':jenis_kelamin' => $data['jenis_kelamin'],
           ':agama' => $data['agama'],
           ':alamat' => $data['alamat'],
           ':jenis_kelainan' => $data['jenis_kelainan'],
           ':nama_ayah' => $data['nama_ayah'],
           ':nama_ibu' => $data['nama_ibu']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataNIS($nis){
        $query = "SELECT * FROM peserta_didik
                  WHERE NIS=:nis";

        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [':nis' => $nis];

            $qr->execute($data);

            return $qr->fetch();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

    public function editPesertaDidik($data){
        $query = "UPDATE peserta_didik
                  SET NIS = :nis,
                      NISN = :nisn,
                      nama_siswa = :nama_siswa,
                      tempat_lahir = :tempat_lahir,
                      tanggal_lahir = :tanggal_lahir,
                      jenis_kelamin = :jenis_kelamin,
                      agama = :agama,
                      alamat_siswa = :alamat_siswa,
                      jenis_kelainan = :jenis_kelainan,
                      nama_ayah = :nama_ayah,
                      nama_ibu = :nama_ibu
                  WHERE NIS = :nisEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':nis' => $data['nis'],
                  ':nisn' => $data['nisn'],
                  ':nama_siswa' => $data['nama'],
                  ':tempat_lahir' => $data['tempat_lahir'],
                  ':tanggal_lahir' => $data['tanggal_lahir'],
                  ':jenis_kelamin' => $data['jenis_kelamin'],
                  ':agama' => $data['agama'],
                  ':alamat_siswa' => $data['alamat_siswa'],
                  ':jenis_kelainan' => $data['jenis_kelainan'],
                  ':nama_ayah' => $data['nama_ayah'],
                  ':nama_ibu' => $data['nama_ibu'],
                  ':nipEdit' => $data['nip'],
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
