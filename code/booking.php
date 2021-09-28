<?php
                session_start();
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_booking.css" rel="stylesheet" type="text/css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
    </head>
    <body>
        <?php
        if(!isset($_SESSION['user_id'])){ ?>

        <script type="text/javascript">
        window.alert('Silahkan Login terlebih dahulu untuk booking tour!');
        window.location.href='paket_wisata.php';
        </script>

        <?php
                }
                else{?>
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
    <h2>Page Booking</h2>
    <form action="booking_proses.php" method="post">
    <input type="hidden" name="id_customer" value ="<?php echo $_SESSION['user_id'];?>"/>

    <?php $id_paket = $_GET['id']; ?>
    <input type="hidden" name="id_paket" value ="<?php echo $id_paket; ?>"/>

    Nama Customer :<br />
    <input type="text" name="nama_customer" required=""/><br />

    e-mail :<br />
    <input type="text" name="email" required="" /><br />

    Nama Provinsi:<br>
    <select name = "opProvinsi" id = "opProvinsi" required="">
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

    Nama Kabupaten / kota:<br>
    <select name = "opKota" id = "opKota" required="">
        <option disabled selected>Choose one...</option>
        <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_kabupaten";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                ?>
                <option value = "<?php echo $row ['id'] ?>">
                    <?php echo $row ['nama'] ?>
                </option>
                <?php }
            ?>
    </select>
    <br>

    Alamat :<br />
    <input type="text" name="alamat" required=""/><br />

    Nama pemilik kartu kredit :<br />
    <input type="text" name="nama_kartu" required=""/><br />

    Nomor kartu :<br />
    <input type="text" name="nomer_kartu" placeholder="XXXX-XXXX-XXXX-XXXX" required=""/><br />

    Bulan Expired Kartu :<br />
    <input type="text" name="expired_month" placeholder="XX" required=""/><br />

    Tahun Expired Kartu :<br />
    <input type="text" name="expired_year" placeholder="XXXX" required=""/><br />

    CVV (3 Digit Belakang Kartu Kredit) :<br />
    <input type="text" name="cvv" placeholder="XXX" required=""/><br />
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
    <?php }
    ?>
    </body>
    
    
        
    
</html>
<script src="jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
    $("#opKota").children('option:gt(0)').hide();
    $("#opProvinsi").change(function() {
        $("#opKota").children('option').hide();
        $("#opKota").children("option[value^=" + $(this).val() + "]").show()
    })
})
</script>