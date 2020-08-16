<?php
    include_once("./../config/config.php");

    if($mysqli){

        $result = mysqli_query($mysqli, "SELECT * FROM tb_catatan"); 
        $datakeluar=array(); 

        while($data=mysqli_fetch_assoc($result)){  
            $datakeluar[]=$data;   
        }   
        
        $datakeluar=array("Data mahasiswa"=>$datakeluar);     
        mysqli_close($mysqli);  
        echo json_encode($datakeluar);  
    }
    else{
        echo "Server error"; 
    } 
?>   
 