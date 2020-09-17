<?php include "profileproses.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/cd41d99c9f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
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
                        <?php if(isset($_SESSION['nama'])):?>
                        <button class="a"><?php echo $_SESSION['nama']?></button>
                        <ul class="sub">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="keluar.php">Keluar</a></li>
                        </ul>                
                        <?php endif?>
                    </li>
                </ul>              
            </div>
        </div>
        <div class="line"></div>
      </div>
    </nav>
    <header>
        <div class="text-jumbo">
            <h1>PROFILE</h1>
        </div>
        <div class="line"></div>        
    </header>
    <div class="container-main">
        <div class="sidenav">                        
            <a href="" class="bio">BIODATA DIRI</a>                          
            <a href="" class="peng">PENGATURAN</a>              
        </div>
        <main>
            <form action="">                
                <div class="nama">
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                </div>
                <div class="container-jks">
                    <div class="jeniskelamin">                        
                        <div class="laki"><input type="radio" name="jeniskelamin" value="Laki-laki"><label for="jeniskelamin">Laki-laki</label></div>
                        <div class="perempuan"><input type="radio" name="jeniskelamin" value="Perempuan"><label for="jeniskelamin">Perempuan</label></div>
                    </div>
                    <div class="status">
                        <div class="lajang"><input type="radio" name="status" value="Lajang"><label for="status">Lajang</label></div>
                        <div class="menikah"><input type="radio" name="status" value="Menikah"><label for="status">Menikah</label></div> 
                    </div>
                </div>
                <div class="tgl-telp">
                    <div class="tgllahir">                        
                        <select name="tanggal" id="">
                            <option value="" disabled selected hidden>Tanggal</option>
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="bulan" id="">
                            <option value="" disabeld selected hidden>Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <select name="tahun" id="">
                            <option value="" disabeld selected hidden>Tahun</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                            <option value="1920">1920</option>
                            <option value="1919">1919</option>
                            <option value="1918">1918</option>
                            <option value="1917">1917</option>
                            <option value="1916">1916</option>
                            <option value="1915">1915</option>
                            <option value="1914">1914</option>
                            <option value="1913">1913</option>
                            <option value="1912">1912</option>
                            <option value="1911">1911</option>
                            <option value="1910">1910</option>
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                        </select>
                    </div>
                    <div class="telp">
                        <input type="text" name="telp" placeholder="No. Telephone">
                    </div>
                </div>
                <div class="kewar-email">
                    <div class="kewargaan">
                        <select name="kewarganegaraan" id="">
                            <option value="" disabled selected hidden>Kewarganegaraan</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Asing">Asing</option>
                        </select>
                    </div>
                    <div class="email">
                        <input type="email" name="email" value="<?php echo $data['email']?>">
                    </div>
                </div>   
                <div class="alamat-kota">
                    <div class="alamat">
                        <textarea name="alamat" id="" cols="70" rows="5" placeholder="Alamat Tempat Tinggal"></textarea>
                    </div>
                    <div class="kota">
                        <input type="text" name="kota" placeholder="Kota">
                        <input type="text" name="kodepos" placeholder="Kode Pos">
                    </div>
                </div>                 
                <div class="submit">
                    <input type="submit" name="simpan" value="Simpan">
                </div>                                           
            </form>
        </main>
    </div>
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