    <?php
                session_start();
        ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_tambahPaket.css" rel="stylesheet" type="text/css" />
        
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
                        <li><a href="contact_us_staff.php">Contact Us</a></li>
                        <li><a href="tentang_kami_staff.php">Riwayat Booking</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
    <h2>Tambah Paket</h2>
    <form action="tambah_paket_proses.php" method="post" enctype="multipart/form-data">
    Insert Gambar Tour:<br />
    <input type="file" name="foto" /><br />
    
    Nama Paket :<br />
    <input type="text" name="nama_paket" /><br />

    Durasi Tour :<br />
    <input type="text" name="durasi_tour" /><br />

    Akomodasi Hotel :<br />
    <input type="text" name="hotel" /><br />

    Akomodasi Makan :<br />
    <input type="text" name="makan" /><br />

    Akomodasi Transportasi :<br />
    <input type="text" name="transportasi" /><br />

    Objek Wisata :<br />
    <input type="text" name="wisata" /><br />

    Harga :<br />
    <input type="text" name="harga" /><br />

    Tanggal Berangkat :<br />
    <input type="date" name="tanggal" /><br />

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