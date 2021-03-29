<?php

require 'db.php';


if(isset($_POST['feltolt'])){
    
    $nev = $_POST['felnev'];
    $datum = $_POST['datum'];
    
    $sql = "INSERT INTO todok (todo, datum, allapot) VALUES ('$nev','$datum',false)";
    
    
    if($mysqli->query($sql)){
        echo "siker";
    }else{
         echo "sikertelen";
    }
    
    
}
if(isset($_POST['kiir'])){

    $sql = "SELECT * FROM todok";
    $rend = $_POST['rendez'];
    if(!empty($rend)){
    
         $sql .= " ORDER BY ". $rend ." DESC";
    }

    
    
    
    $talalat = $mysqli->query($sql);
    $szoveg="";
    while($sor = $talalat->fetch_assoc()){
        if( $sor['allapot'] == false){
        $szoveg.='<tr>  
                    <td>'. $sor['todo'] .'</td>
                    <td>'. $sor['datum'] .'</td>
                    <td><div class="muveletek">
                    <button class="torles" data-id="'. $sor['ID'] .'">Törlés</button>
                         <button class="elvegez" data-id="'. $sor['ID'] .'">Elvégezve</button> 
                        </div></td>
                  </tr>';
        }else{
            $szoveg.='<tr>  
                    <td><s>'. $sor['todo'] .'</s></td>
                    <td><s>'. $sor['datum'] .'</s></td>
                    <td><div class="muveletek">
                    <button class="torles" data-id="'. $sor['ID'] .'">Törlés</button>
                       <button class="elvegez" data-id="'. $sor['ID'] .'">Elvégezve</button> 
                        </div></td>
                  </tr>'; 
        }
    }

    echo $szoveg;
}



?>