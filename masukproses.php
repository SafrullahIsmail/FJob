<?php
    session_start();
    include "koneksi.php";
    $email = "";
    $nama = "";
    $errors = array();
    if (isset($_POST['Submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if (count($errors) == 0) {
            $pass = md5($pass);
            $query = "SELECT * FROM tb_daftar WHERE email='$email' AND pass = '$pass';";
            $hasil = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($hasil) == 1) {
                $_SESSION['email'] = $email;
                while($data = mysqli_fetch_array($hasil)){
                    $_SESSION['nama'] = $data['nama'];
                    if($data['lvl'] == "user"){
                        header('location: user.php');
                    }
                    else{
                        header('location: admin.php');
                    }
                }                
            }else {
                array_push($errors, "Salah email/password");
            }
        }
    }
?>