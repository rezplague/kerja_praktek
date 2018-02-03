<?php
include "../../../src/TenagaPendidik.php";

if (isset($_POST) && sizeof($_POST) > 0){
    $data = new TenagaPendidik();

    $data->editPendidik($_POST);

    header("Location: ../../?page=tenaga-pendidik");
    exit;
}

?>
