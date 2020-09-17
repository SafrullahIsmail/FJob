<?php include "masukproses.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Fjob</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/cd41d99c9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/masuk.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="wrap">
            <div class="text-jumbo">
                <h1>MASUK</h1>
            </div>
            <div class="line"></div>
            <main>
                <div class="containerline">
                    <div class="line1"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <form action="" method="POST">
                    <?php include "errors.php"?>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <div class="pass">
                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                        <span toggle="#password-field" class="far fa-eye field_icon toggle-password"></span>
                    </div>
                    <input type="submit" name="Submit" value="Submit">
                    <a href="daftar.php">Daftar</a>
                </form>
                <div class="containerline">                
                    <div class="line1"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
             </main>
        </div>
    </div>
</body>
</html>
<script>
    $("form").on('click','.toggle-password',function(){
        $(this).toggleClass("far fa-eye far fa-eye-slash");
            
        if ($("#pass").attr("type") === "password") {
            $("#pass").attr("type", "text");
        } else {
            $("#pass").attr("type", "password");
        }
        });
</script>