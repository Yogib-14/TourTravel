<?php
                session_start();
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_register_staff.css" rel="stylesheet" type="text/css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
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
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<h1>Register Staff</h1>
<form action="register_proses.php" method="post">
    Username:<br>
    <input type="text" name="uname" /><br />
    Password:<br>
    <input type="password" name="upass" /><br />
    

    Nama Lengkap :<br>
    <input type="text" name="nama_cust" /><br />

    No. Telephone :<br>
    <input type="text" name="noTelp" /><br />

    <label>Tanggal Lahir: </label><br>
    <input type="date" name="tanggal_lahir"><br>
        
    Nama Provinsi:<br>
    <select name = "opProvinsi" id = "opProvinsi">
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
    <select name = "opKota" id = "opKota">
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

    Nama Kecamatan: <br>
    <select name = "opKecamatan" id = "opKecamatan">
        <option disabled selected>Choose one...</option>
        <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_kecamatan";
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

    Alamat :<br>
    <input type="text" name="alamat" /><br />
    <input type="hidden" name="role" value ="staff"/><br />


    <button type="submit">Sign up</button>
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
<script src="jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
    $("#opKota").children('option:gt(0)').hide();
    $("#opProvinsi").change(function() {
        $("#opKota").children('option').hide();
        $("#opKota").children("option[value^=" + $(this).val() + "]").show()
    })
})

    $(document).ready(function() {
    $("#opKecamatan").children('option:gt(0)').hide();
    $("#opKota").change(function() {
        $("#opKecamatan").children('option').hide();
        $("#opKecamatan").children("option[value^=" + $(this).val() + "]").show()
    })
})
</script>