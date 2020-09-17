<?php
    $host = "sql204.epizy.com";
    $user = "epiz_26648064";
    $pass = "wd0OdNiN92aSPX";
    $db = "epiz_26648064_fjob";
    $koneksi = mysqli_connect($host, $user, $pass);
    $db_koneksi = mysqli_select_db($koneksi, $db);
?>