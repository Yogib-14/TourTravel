<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php $id_pembelian = $_GET['id'];?>
        <title>TourTravel</title>
        <link href="file_css/lihatAturBooking.css" rel="stylesheet" type="text/css" />
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
                        <li><a href="atur_request.php">Atur Request</a></li>
                        <li><a href="atur_booking.php">Atur Booking</a></li>
                        <li><a href="tentang_kami_staff.php">Riwayat Booking</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
        <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM record_pembelian WHERE id_pembelian = $id_pembelian";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                ?>
    <table class = "tabel" align="center" border=1 >
        <thead>
            <tr>
                <td>Indikator</td>
                <td>Isi</td>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td>id_pembelian</td>
                <td><?php echo $row ['id_pembelian']?></td>
             </tr>

             <tr>
                <td>id_customer</td>
                <td><?php echo $row ['id_customer']?></td>
            </tr>

            <tr>
                <td>id_paket</td>
                <td><?php echo $row ['id_paket']?></td>
            </tr>

            <tr>
                <td>nama Customer</td>
                <td><?php echo $row ['nama_customer']?></td>
            </tr>

            <tr>
                <td>E-mail customer</td>
                <td><?php echo $row ['email']?></td>
            </tr>

            <tr>
                <td>ID Provinsi</td>
                <td><?php echo $row ['id_provinsi']?></td>
            </tr>

            <tr>
                <td>ID Kota/ Kabupaten</td>
                <td><?php echo $row ['id_kabupaten']?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><?php echo $row ['alamat']?></td>
            </tr>

            <tr>
                <td>Nama Pemilik Kartu Kredit</td>
                <td><?php echo $row ['nama_kartu']?></td>
            </tr>

            <tr>
                <td>Nomor Kartu Kredit</td>
                <td><?php echo $row ['nomer_kartu']?></td>
            </tr>

            <tr>
                <td>Bulan Expired Kartu</td>
                <td><?php echo $row ['expired_month']?></td>
            </tr>

            <tr>
                <td>Tahun Expired Kartu</td>
                <td><?php echo $row ['expired_year']?></td>
            </tr>

            <tr>
                <td>CVV</td>
                <td><?php echo $row ['cvv']?></td>
            </tr>


        </tbody>
    </table>
    <?php }
            ?>
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