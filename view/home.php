<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Stylee -->
        <link rel="stylesheet" href="./../public/css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Catatanku</title>
    </head>
    <body>
        <div class="BGbody"></div>
        <div class="wrapper">
            
            
            <!-- section header judul -->
            <section class="header">
                <div class="flex-container-wrap">
                    
                        <h1>Catatan Ku </h1>
                    
                </div>
            </section>

            <div class="flex-container-badan">
                
                <!-- Section About Me  -->
                <section class="aboutme">
                    <div class="flex-container-wrap">
                    
                        <img id="ProfilImg" src="./../assets/img/MyPic.jpeg">
                        <table>
                            <tr><td colspan="2"><h1>About Me</h1></td><td><a href="./../index.php">LogOut</a></td></tr>
                            <tr><td> Nama </td><td>: Muhammad Yusuf </td></tr>
                            <tr><td> NIM </td><td>: 10118370 </td></tr>
                            <tr><td> Kelas </td><td>: IF-9 </td></tr>
                            <tr>
                                <td>
                                    <a class="github" target="#" href="http://www.github.com/M16Yusuf">
                                    <img id="imgSosial" src="./../assets/icon/github.png"></a>
                                </td>
                                <td>
                                    <a class="twitter" target="#" href="https://www.twitter.com/M16Yusuf">
                                    <img id="imgSosial" src="./../assets/icon/twitter.png"></a>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </section>

                <!-- section API -->
                <section class="cobaapi">
                    <b>API OpenWheatherMap</b> <br>
                    <input type="text" class="inputValue" id="inputValue" placeholder="Masukan nama kota">
                    <input type="submit" class="button" value="Submit">

                    <div class="display">
                        <h1 class="name"></h1>
                        <p class="desc"></p>
                        <p class="temp"></p>
                    </div>
                    
                    <script src="./../public/js/app.js"></script>
                </section>

                <!-- section catatan view -->
                <section class="catatan">
                    <table border="1px">
                    <tr>
                        <td>catatan </td> <td>Update</td>
                    </tr>
                    <?php  
                    // Create database connection using config file
                    include_once("./../config/config.php");
                    // Fetch all users data from database
                    $result = mysqli_query($mysqli, "SELECT * FROM tb_catatan ORDER BY id_catatan DESC");
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['Catatan']."</td>";    
                        echo "<td><a href='./../controller/delete.php?id=$user_data[id_catatan]'>Delete</a></td></tr>";        
                    }
                    ?>
                    </table>
                </section>

                <!-- section tambah Catatan -->
                <section class="catatan">
                    <form action="./../controller/addNote.php" method="post" name="form1">
                        <table width="380px">
                            <tr><td>Tambahkan Catatan</td></tr>
                            <tr><td><textarea name="catatan"></textarea></td></tr>
                            <tr><td><input type="submit" name="Submit" value="Tambah"></td></tr>
                        </table>
                    </form>
                </section> 

            </div>

            
           
            <!-- Section Footer -->
            <section class="footer">
                Dibuat dengan <3 oleh programmer indonesia <a href="https://m16yusuf.github.io/" target="#">@m16yusuf</a>
            </section>
        </div>
        <?php
            // Tampil pesan penambahan catatan
            if(isset($_GET["ditambahkan"])){
                echo '<script type="text/javascript">
                    alert("Data berhasil ditambahkan");
                </script>';
            }
        ?>

        <?php
            // Tampil Pesan hapus catatan
            if(isset($_GET["dihapus"])){
                echo '<script type="text/javascript">
                    alert("Data berhasil dihapus");
                </script>';
            }
        ?>
    </body>
</html>