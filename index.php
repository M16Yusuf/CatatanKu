<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Stylee -->
        <link rel="stylesheet" href="./public/css/style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CatatanKu </title>
    </head>
    <body>
        <?php
            //login error 
            if(isset($_GET["login_error"])){
                echo '<script type="text/javascript">
                alert("Username atau pasword salah");
              </script>';
            }
        ?>

        <div class="BGbody"></div>
        <div class="wrapper">


            <!-- section login -->
            <section class="login">
                <h1>Silahkan masuk</h1>
                <form method="post" action="./controller/cek_login.php">
                    <ul>
                        <li>Username :<input type="text" id="username" name="username"></li>
                        <li>Password :<input type="password" id="password" name="password"></li>
                        <li><input type="reset"><input type="submit" name="commit" value="Login"></li>
                    </ul>
                </form>
                <p> Desain By <a href="https://m16yusuf.github.io/" target="#">@m16yusuf</a></p>
                 
            </section>

        </div>
    </body>
</html>