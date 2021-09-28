<?php
                session_start();
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>TourTravel</title>
        <link href="file_css/style_aturPaket.css" rel="stylesheet" type="text/css" />
        
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
                        <li class="selected"><a href="atur_paket.php">Atur Paket</a></li>
                        <li><a href="atur_request.php">Atur Request</a></li>
                        <li><a href="atur_booking.php">Atur Booking</a></li>
                        <li><a href="tentang_kami_staff.php">Riwayat Booking</a></li>
                    </ul>
                </div>
            </div><!--End div atas-->


            <div id = "tengah">
                <button onclick="location.href='tambah_paket.php'" type="button">
         Tambah Paket</button><br><br>

    <table class = "tabel" >
        <tbody>
            <?php
             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM paket_tour";
             $hasil=$connection->prepare($query);
             $hasil->execute();

             while($row = $hasil->fetch()){ 
                
            if($row ['status'] == 'aktif'){?>
             <tr>
                <td><img src = "<?php echo $row ['gambar_tour']?>"></td>
                <td id = "tbl1"><?php echo $row ['nama_paket'] ?></td>
                <td id = "tbl2">- <?php echo $row ['durasi_tour']?><br>
                                - Akomodasi <?php echo $row ['hotel'] ?><br>
                                - Akomodasi <?php echo $row ['makan'] ?><br>
                                - Akomodasi <?php echo $row ['transportasi'] ?><br>
                                - Objek wisata : <?php echo $row ['wisata'] ?><br>
                                - Harga : Rp <?php echo $row ['harga'] ?> <br>
                                - Tanggal Berangkat : <?php echo $row ['tanggal'] ?><br><br>
                                <a href="delete_paket.php?id=<?= $row['id_paket'] ?>" class="button">Delete</a></td>

             </tr>
         <?php }
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