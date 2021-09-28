<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <div id="bungkus">
            <div id="atas">
                <div id="logo">
                    <img src="picture/Logo1.png" alt="Lautan">
                    <!--Cantumin gambar logo-->
                </div><!--End div logo-->
                
                <div id="menubar">
                    <ul id="menu">
                        <li class="selected"><a href="index.php">Home</a></li>
                        <li><a href="paket_wisata.php">Paket Wisata</a></li>
                        <li><a href="request_tour.php">Request Tour</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
                <!--untuk tengah-->

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="picture/bali.jpg" style="width:800px; height: 300px;">
                        
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="picture/bali2.jpg" style="width:800px; height: 300px;">
                        
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="picture/carousel1.jpg" style="width:800px; height: 300px;">
                        
                    </div>
                </div> <!--End class slideshow-container-->
                <br>

                <div class = "titik">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
                <div id = "konten">
                    <p>
                         Selamat datang Visitor TourTravel! kami mempunyai paket-paket wisata menarik dari tanah air Indonesia. Untuk paket wisata silahkan melihat di bagian menu paket wisata, untuk pemesanan silahkan login atau yang belum mempunyai akun silahkan register terlebih dahulu untuk memesan paket wisata.
                    </p>    
                </div>

            <section id = "gambar_tengah">
                <table>
                    <tr>
                        <td><img src="picture/index1.PNG"/></td>
                        <td><img src="picture/index2.PNG"/></td>
                        <td><img src="picture/index3.PNG"/></td>
                    </tr>
                    <tr>
                        <td><h2>Request Tempat</td>
                        <td><h2>Transaksi Aman</td>
                        <td><h2>Rute yang ditawarkan luas</td>
                    </tr>
                    <tr>
                        <td id = "row">Pelanggan dapat memilih tempat yang diluar jangkauan dan tidak ada di list rute tour yang telah kami sediakan.<br>
                        Notes : (hanya berlaku untuk minimal 20 pelanggan yang merequest)</td>
                        <td id = "row">Tak perlu diragukan lagi di Tour travel,sudah banyak testimoni yang memesan dan mengorder langsung dari kita !</td>
                        <td id = "row">Anda bisa memilih rute untuk kota yang anda tuju serta pembayaran bisa dilakukan ditempat ataupun via transfer</td>
                    </tr>
                </table>
            </section>
            </div><!-- /#tengah -->

            
            

            <div id = "kanan">
                <!--untuk kanan-->
                <?php
                if(!isset($_SESSION['user_id'])){ ?>
                <h1>Login</h1>
                <form action="login_proses.php" method="post">
                    Username:
                    <input type="text" name="uname" /><br />
                    Password:
                    <input type="password" name="upass" /><br /><br>
                    <button type="submit">Login</button>
                </form>
                <a href="register.php">Sign Up</a>
                <?php
                }
                else{?>
                <h2 style = "text-align: center">Selamat datang<br></h2>
                <h2 style = "text-align: center"><?php echo $_SESSION['username'] ?></h2> 
                <h2 style = "text-align: center">
                <br>
                    <a href="riwayat_booking.php">Riwayat Booking</a></h2>
                    <h2 style = "text-align: center">
                    <a href="logout.php">Logout</a></h2>
                <?php }?>

                <br>
                

            </div>


            <div id = "bawah">
                Copyright &copy; 2019 TourTravel co. | Created by Andreas Yogi Brata | Ryan Agung | Christo Kemal | Tommy N. | Miguel N.
            </div>


            

        </div><!--End div bungkus-->
    </body>
    
    
        
    
</html>