<?php
include "../../../src/Kelas.php";

if (isset($_POST) && sizeof($_POST) > 0){
    $data = new Kelas();

    $data->editKelas($_POST);

    header("Location: ../../?page=kelas");
    exit;
}

?>
