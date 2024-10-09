<?php
 $num=11;
 $cnt=0;
 for($i=1;$i<=$num;$i++){
     if($num%$i==0) $cnt++;
 }
 if($cnt==2){
     echo "11 is a Prime Number";
 }
 else{
     echo "11 is not a Prime Number";
 }
?>


