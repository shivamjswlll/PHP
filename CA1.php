<?php
    $n=18;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<$i;$j++){
            echo " ";
        }
        for($j=1;$j<=($n/2-(2*($i-1)));$j++){
            echo "*";
        }
        for($j=1;$j<=(2*$i-2);$j++){
            echo " ";
        }
        for($j=1;$j<=($n/2-(2*($i-1)));$j++){
            echo "*";
        }
        echo "\n";
    }
?>