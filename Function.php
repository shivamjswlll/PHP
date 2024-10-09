<?php
$d=4;
// function myTest(){
//     $d=1;
//     echo $d;
// }
function selfMultiply(&$number){
    $number*=$number;
    return $number;
}
// myTest();
// echo "<br>";
echo selfMultiply($d);

?>