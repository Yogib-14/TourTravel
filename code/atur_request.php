<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>TourTravel</title>
        <link href="file_css/request_tour_staff.css" rel="stylesheet" type="text/css" />
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
                        <li><a href="index_staff.php">Home</a></li>
                        <li><a href="atur_paket.php">Atur Paket</a></li>
                        <li class="selected"><a href="atur_request.php">Atur Request</a></li>
                        <li><a href="atur_booking.php">Atur Booking</a></li>
                        <li><a href="tentang_kami_staff.php">Riwayat Booking</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
                <br>
                <table class = "tabel" border=1 >
                    <thead>
                        <tr>
                            <td>Destinasi Asal</td>
                            <td>Destinasi Tujuan</td>
                            <td>Durasi Tour</td>
                            <td>Rekomendasi Hotel</td>
                            <td>Rekomendasi Makan</td>
                            <td>Rekomendasi Transportasi</td>
                            <td>Rekomendasi Wisata</td>
                            <td>Perkiraan Harga</td>
                        </tr>
                    </thead>
        <tbody>
            <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM request_tour JOIN wilayah_provinsi ON request_tour.id_provinsi_asal = wilayah_provinsi.id JOIN wilayah_provinsi_tujuan ON request_tour.id_provinsi_tujuan = wilayah_provinsi_tujuan.id";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ ?>
                
            
             <tr>
                <td class = "asal"><?php echo $row ['nama']?></td>
                <td class = "tujuan"><?php echo $row ['nama_tujuan']?></td>
                <td class = "durasi"><?php echo $row ['durasi_tour']?></td>
                <td class = "hotel"><?php echo $row ['hotel']?></td>
                <td class = "makan"><?php echo $row ['makan']?></td>
                <td class = "transportasi"><?php echo $row ['transportasi']?></td>
                <td class = "wisata"><?php echo $row ['wisata']?></td>
                <td class = "harga"><?php echo $row ['harga']?></td>
                

             </tr>
         <?php 
               }
            ?>
            
        </tbody>
    </table>
                
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
                <a href="register_staff.php">Sign Up</a>
                <?php
                }
                else{?>
                <h2 style = "text-align: center">Selamat datang<br></h2>
                <h2 style = "text-align: center"><?php echo $_SESSION['username'] ?></h2> 
                <h2 style = "text-align: center">
                <br>
                    <a href="register_staff.php">Register Staff</a></h2>
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