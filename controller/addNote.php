<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $catatan = $_POST['catatan'];

        // include database connection file
        include_once("./../config/config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_catatan(Catatan) VALUES('$catatan')");

        header("location:./../view/home.php?ditambahkan");
        
    }
?>