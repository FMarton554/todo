<?php
require 'db.php';


if(isset($_POST['mod'])){
    
    $id = $_POST['azonosito'];
 
    
    $sql = "UPDATE todok SET allapot=true WHERE ID='". $id ."'";
    
    
    if($mysqli->query($sql)){
        echo "siker";
    }else{
         echo "sikertelen";
    }
    
    
}

?>