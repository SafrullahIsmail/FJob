<?php    
    include "koneksi.php";
    $email = "";
    $errors = array();
    if (isset($_POST['Submit'])) {
        $namadpn = $_POST['namadpn'];
        $namablk = $_POST['namablk'];
        $nama = $namadpn." ".$namablk;
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $re_pass = $_POST['re_pass'];
        $level = "user";
        $sql_e = "SELECT * FROM tb_daftar WHERE email = '$email';";
        $res_e = mysqli_query($koneksi, $sql_e);
        if (mysqli_num_rows($res_e) > 0) {
            array_push($errors, "Email sudah dimiliki");
        }
        if($pass != $re_pass){
            array_push($errors, "Password tidak sama");
        }
        if (count($errors) == 0) {
            $pass = md5($re_pass);
            $query = "INSERT INTO tb_daftar (nama, email, pass, lvl) VALUES ('$nama', '$email', '$pass', '$level');";
            $hasil = mysqli_query($koneksi, $query);
            header('location: masuk.php');
        }
    }
?>