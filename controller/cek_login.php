<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];

    //pengecekan password 
    if($username=="10118370" AND $password=="admin"){
        $_SESSION["username"]=$username;
        header("location:./../view/home.php");
    }else{
        header("location:./../index.php?login_error");
    }
?>