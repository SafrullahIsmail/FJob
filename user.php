<?php 
  include "userproses.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/user.css?v=<?php echo time(); ?>">
  <script src="https://kit.fontawesome.com/cd41d99c9f.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Fjob | Tempat Untuk Mencari Pekerjaan</title>
</head>
<body>
  <div class="container">
    <nav>
      <div class="container-nav">
        <div class="menu">
            <a href="#">Fjob</a>
            <div class="dropdown">  
                <ul class="main">
                    <li>                        
                        <button class="a"><?php echo $_SESSION['nama']?></button>
                        <ul class="sub">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="keluar.php">Keluar</a></li>
                        </ul>                                        
                    </li>
                </ul>              
            </div>
        </div>
        <div class="line"></div>
      </div>
    </nav>
    <main>
      <div class="text-jumbo">
        <h1>FINDING JOB</h1>
      </div>
      <div class="line"></div>
        <h4>CHOOSE A JOB YOU LOVE, AND YOU WILL NEVER HAVE TO WORK A DAY IN YOUR LIFE</h4>
      <div class="container-gambar">
        <i class="fas fa-arrow-left" id="prevbtn"></i>
        <div class="gambar-slide">
          <img src="pic/s3.jpg" id="lastclone" alt="">
          <img src="pic/s1.jpg" alt="">
          <img src="pic/s2.jpg" alt="">
          <img src="pic/s3.jpg" alt="">
          <img src="pic/s1.jpg" id="firstclone" alt="">
        </div>
        <div class="container-tron">
          <h1>We Are Hiring!</h1>
          <h2>I Think I Found You</h2>
        </div>
        <i class="fas fa-arrow-right" id="nextbtn"></i>
      </div>
      <div class="line1"></div>
      <div class="container-form">
        <form action="">
          <input type="text" id="search" name="search" placeholder="Pekerjaan">
          <input type="text" id="location" name="location" placeholder="Lokasi">
          <input type="submit" value="Cari">
        </form>
        <h2>Lowongan Pekerjaan Populer</h2>
        <div class="container-a">
          <a href="">IT Development</a>
          <a href="">Purchasing</a>
          <a href="">Human Resource</a>
        </div>
      </div>
    </main> 
    <footer>
      <div class="fot1">
        <a href="">Fjob</a>
        <a href="">Pencari Kerja</a>
        <div class="social">
          <h5>Lihat Kami di</h5>
          <a href=""><img src="pic/fa.png"></a>
          <a href=""><img src="pic/twt.png"></a>
          <a href=""><img src="pic/yt.png"></a>
          <a href=""><img src="pic/ig.png"></a>
        </div>
      </div>
      <p>© Fjob 2020. Hak Cipta Dilindungi Undang-Undang.</p>
    </footer>
  </div>
  <script src="slider.js"></script>                          
</body>
</html>
<script>
    $(".dropdown").click(function(){
        if ($("ul.sub").css("display")==="none") {
            $("ul.sub").slideDown(500).css("display","flex");
        }else{
            $("ul.sub").slideUp(500).css("display","none");
        }
    });
</script>