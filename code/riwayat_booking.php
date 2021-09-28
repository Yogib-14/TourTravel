<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_riwayatBooking.css" rel="stylesheet" type="text/css" />
        <?php $user_id = $_SESSION['user_id']; ?>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="paket_wisata.php">Paket Wisata</a></li>
                        <li><a href="request_tour.php">Request Tour</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">

    <table class = "tabel" align="center" border=1 >
    <thead>
    <td>Nama Paket</td>
    <td>Nama Customer</td>
    <td>Email</td>
    <td>Provinsi</td>
    <td>Alamat</td>
  
    </thead>        
        <tbody>
            <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);


             $query="SELECT * FROM record_pembelian JOIN paket_tour ON record_pembelian.id_paket = paket_tour.id_paket JOIN wilayah_provinsi ON record_pembelian.id_provinsi = wilayah_provinsi.id WHERE id_customer = $user_id";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                ?>
             <tr>
                <td><?php echo  $row ['nama_paket'] ?></td>
                <td class = "nama"><?php echo  $row ['nama_customer'] ?></td>
                <td><?php echo  $row ['email'] ?><br>
                <td><?php echo  $row ['nama'] ?><br>
                <td><?php echo  $row ['alamat'] ?><br>
             </tr>
              <?php }

            
              /*
              id paket -> nama paket
              nama customer
              email 
              id_provinsi -> nama provinsi
              
              */
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