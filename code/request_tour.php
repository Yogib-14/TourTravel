<?php
                session_start();
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_requestTour.css" rel="stylesheet" type="text/css" />
        
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
                        <li class="selected"><a href="request_tour.php">Request Tour</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
                <h2>Request Tour</h2>
    <form action="request_tour_proses.php" method="post" enctype="multipart/form-data">

    Destinasi Asal :<br />
    <select name = "opProvinsiAsal" id = "opProvinsiAsal" required="">
        <option disabled selected>Choose one...</option>
        <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_provinsi";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                ?>
                <option value = "<?php echo $row ['id']?>">
                    <?php echo $row ['nama'] ?>
                </option>
                <?php }
            ?>
    </select>
    <br>
    Destinasi Tujuan :<br />
    <select name = "opProvinsiTujuan" id = "opProvinsiTujuan" required="">
        <option disabled selected>Choose one...</option>
        <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_provinsi";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                ?>
                <option value = "<?php echo $row ['id']?>">
                    <?php echo $row ['nama'] ?>
                </option>
                <?php }
            ?>
    </select>
    <br>
    
    Request Durasi Tour :<br />
    <input type="text" name="durasi_tour" required=""/><br />

    Request Akomodasi Hotel :<br />
    <input type="text" name="hotel" required=""/><br />

    Request Akomodasi Makan :<br />
    <input type="text" name="makan" required=""/><br />

    Request Akomodasi Transportasi :<br />
    <input type="text" name="transportasi" required=""/><br />

    Request Objek Wisata :<br />
    <input type="text" name="wisata" required=""/><br />

    Perkiraan Harga :<br />
    <input type="text" name="harga" required=""/><br />

    <br>

    <button type="submit">Upload</button>
</form>
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