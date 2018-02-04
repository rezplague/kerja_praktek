<?php
include "../../../src/Pengguna.php";

if (isset($_POST) && sizeof($_POST) > 0){
    $data = new Pengguna();

    $data->editPengguna($_POST);

    header("Location: ../../?page=pengguna");
    exit;
}

?>
