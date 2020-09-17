<?php
    session_start();
    include "koneksi.php";
    if (isset($_SESSION['nama'])) {
        $nama = $_SESSION['nama'];
        $query = "SELECT * FROM tb_daftar WHERE nama='$nama';";
        $hasil = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_array($hasil);        
    }
?>