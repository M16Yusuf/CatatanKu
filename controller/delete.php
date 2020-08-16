<?php
    // include database connection file
    include_once("./../config/config.php");

    // Get id from URL to delete that user
    $id = $_GET['id'];

    // Delete user row from table based on given id
    $result = mysqli_query($mysqli, "DELETE FROM tb_catatan WHERE id_catatan=$id");

    // After delete redirect to Home, so that latest user  list will be displayed.
    header("Location:./../view/home.php?dihapus");
?>