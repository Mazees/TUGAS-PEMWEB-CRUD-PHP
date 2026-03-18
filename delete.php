<?php
include "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mhs->deleteMahasiswa($id);
}
header("Location: index.php");
exit();
?>