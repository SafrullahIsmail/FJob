<?php include "daftarproses.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Fjob</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/cd41d99c9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/daftar.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="text-jumbo">
            <h1>DAFTAR</h1>
        </div>
        <div class="line"></div>
        <main>
            <div class="containerline">
                <div class="linej"></div>
                <div class="line1"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line2"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <form action="" method="POST">
                <?php include "errors.php"?>
                <div class="namalengkap">
                    <input type="text" name="namadpn" id="namadpn" placeholder="Nama Depan" value="<?php echo @$namadpn;?>" required>
                    <input type="text" name="namablk" id="namablk" placeholder="Nama Belakang" value="<?php echo @$namablk;?>" required>
                </div>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email;?>" required>
                <div class="pass">
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                    <input type="password" name="re_pass" id="re_pass" placeholder="Konfirmasi Password" required>
                    <span toggle="#password-field" class="far fa-eye field_icon toggle-password"></span>
                </div>
                <div class="check">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">
                        Dengan klik ini anda menyetujui persyaratan kebijakan privasi layanan
                    </label>
                </div>
                <input type="submit" name="Submit" value="Submit" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}">
                <a href="masuk.php">Masuk</a>
            </form>
            <div class="containerline">
                <div class="linej"></div>
                <div class="line1"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line2"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </main>
    </div>
</body>
</html>
<script>
    $("form").on('click','.toggle-password',function(){
        $(this).toggleClass("far fa-eye far fa-eye-slash");
            
        if (($("#pass").attr("type") === "password") && ($("#re_pass").attr("type") === "password")) {
            $("#pass").attr("type", "text");
            $("#re_pass").attr("type", "text");
        } else {
            $("#pass").attr("type", "password");
            $("#re_pass").attr("type", "password");
        }
        });
</script>
