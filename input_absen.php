<?php
require_once("database.php");

if (isset($_POST['submit'])) {
    $nisn = mysqli_real_escape_string($connect, $_POST['nisn']);
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $tanggal = mysqli_real_escape_string($connect, $_POST['tanggal']);
    $kehadiran = mysqli_real_escape_string($connect, $_POST['kehadiran']);

    $simpan = mysqli_query($connect, "INSERT INTO absensi (nisn, nama, tanggal, kehadiran) VALUES ('$nisn', '$nama', '$tanggal', '$kehadiran')");
    if($simpan) {
        header("location: tables.php");
    }
}
?>