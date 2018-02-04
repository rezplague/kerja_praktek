<?php
include "../../../src/Nilai.php";

if (isset($_POST) && sizeof($_POST) > 0){
    $data = new Nilai();

    $data->editNilai($_POST);

    header("Location: ../../?page=nilai");
    exit;
}

?>
