<?php
session_start();
include "src/Login.php";

if (isset($_POST)){
    $login = new Login();

    if($data = $login->cekPengguna($_POST)){
      header("Location:view/index.php");

      # Set session

      $_SESSION['username'] = $data->username;
      $_SESSION['level'] = $data->level;
    }else {
      echo "<script>
              alert('Username atau password salah !');
              document.location.assign('index.php');
            </script>";
    }
}

// header("Location:index.pp");/
 ?>
