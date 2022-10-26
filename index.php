<?php

function comprobarNumero($num){


 for ($i=0; $i <=$num; $i++) { 
     switch ($i) {
         
         case ($i%3==0 && $i%5==0):
            
            echo " <div style='color:green'>$i Integraciones</div><br>";
            break;
        case $i%3==0:
            echo " <div style='color:red'>$i Falabella</div><br>";
            break;
        case $i%5==0:
            echo " <div style='color:blue'>$i ESO</div><br>";
            break;
        default:
            # code...
            break;
     }
 }
}

comprobarNumero(100);


?>
