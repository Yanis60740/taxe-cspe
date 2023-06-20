<?php
$conso_elec = $_SESSION['conso_elec'];
   
    if($conso_elec == ""){
        echo 0;
    }
    else{
        echo ($conso_elec) * 15;
    }