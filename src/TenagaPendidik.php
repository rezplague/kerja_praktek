<?php
include "DB.php";

class TenagaPendidik extends DB {

    public function __construct(){
        parent::__construct();
    }


    public function tampilData(){
       try {
         $query = $this->connection
                       ->query("SELECT NIP,nama_guru,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,jabatan,TMT_sekolah,TMT_pns,alamat_guru,telp,tugas_tambahan
                                FROM pendidik");
                         $query->execute();

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

       return $query;
    }

    public function tambahData($data){
       $query = "INSERT INTO pendidik
                 VALUES(:nip,
                        :nama,
                        :tempat_lahir,
                        :tanggal_lahir,
                        :jenis_kelamin,
                        :agama,
                        :jabatan,
                        :tmt_sekolah,
                        :tmt_pns,
                        :alamat,
                        :telp,
                        :tugas_tambahan)";

       try {
         $qr = $this->connection
                    ->prepare($query);
         $data = [
           ':nip' => $data['nip'],
           ':nama' => $data['nama'],
           ':tempat_lahir' => $data['tempat_lahir'],
           ':tanggal_lahir' => $data['tanggal_lahir'],
           ':jenis_kelamin' => $data['jenis_kelamin'],
           ':agama' => $data['agama'],
           ':jabatan' => $data['jabatan'],
           ':tmt_sekolah' => $data['tmt_sekolah'],
           ':tmt_pns' => $data['tmt_pns'],
           ':alamat' => $data['alamat'],
           ':telp' => $data['telp'],
           ':tugas_tambahan' => $data['tugas_tambahan']
        ];

        return $qr->execute($data);

       } catch (PDOException $e) {
           echo $e->getMessage();
       }

    }

    public function dataNIP($nip){
        $query = "SELECT * FROM pendidik
                  WHERE NIP=:nip";

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

    public function editPendidik($data){
        $query = "UPDATE pendidik
                  SET nama_guru = :nama_guru,
                      tempat_lahir = :tempat_lahir,
                      tanggal_lahir = :tanggal_lahir,
                      jenis_kelamin = :jenis_kelamin,
                      agama = :agama,
                      jabatan = :jabatan,
                      TMT_sekolah = :TMT_sekolah,
                      TMT_pns = :TMT_pns,
                      alamat_guru = :alamat_guru,
                      telp = :telp,
                      tugas_tambahan = :tugas_tambahan
                  WHERE NIP = :nipEdit ";


        try {
            $qr = $this->connection
                       ->prepare($query);

            $data = [
                  ':nama_guru' => $data['nama'],
                  ':tempat_lahir' => $data['tempat_lahir'],
                  ':tanggal_lahir' => $data['tanggal_lahir'],
                  ':jenis_kelamin' => $data['jenis_kelamin'],
                  ':agama' => $data['agama'],
                  ':jabatan' => $data['jabatan'],
                  ':TMT_sekolah' => $data['tmt_sekolah'],
                  ':TMT_pns' => $data['tmt_pns'],
                  ':alamat_guru' => $data['alamat'],
                  ':telp' => $data['telp'],
                  ':tugas_tambahan' => $data['tugas_tambahan'],
                  ':nipEdit' => $data['nip']
            ];

            $qr->execute($data);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
