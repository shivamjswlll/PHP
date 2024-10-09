<?php
// $a=12;
// if ($a>9) echo "greater than 9";
// else echo "less than 9"

$marks=69;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade";
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "C grade";
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade";
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";  
    }  
   else {    
        echo "Invalid input";    
    }    
?>