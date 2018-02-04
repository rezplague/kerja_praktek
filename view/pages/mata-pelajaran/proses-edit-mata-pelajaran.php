<?php
include "../../../src/MataPelajaran.php";

if (isset($_POST) && sizeof($_POST) > 0){
    $data = new MataPelajaran();

    $data->editMapel($_POST);

    header("Location: ../../?page=mata-pelajaran");
    exit;
}

?>
