 <?php
// $year = 1800;
// Leap years are divisible by 400 or by 4 but not 100
// if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    // echo "$year is a leap year.";
// } else{
    // echo "$year is not a leap year.";
// }

// $d = date("D");
// if($d == "Fri"){
//     echo "Have a nice weekend!";
// } else{
//     echo "Have a nice day!";
// }

// $courses = array("INT220"=>"PHP", "INT221"=>"Laravel", "INT222"=>"Node js");
// echo "INT 220 is ".$courses['INT220'].". INT 221 is ".$courses['INT221'].". INT222 is ".$courses['INT222'];
// var_dump($courses);
$courses = array("PHP", "Laravel", "Node js");
 
// Loop through colors array
// foreach($courses as $course){
//     echo $course . "<br>";
// }
// echo "<br>";
// print_r($courses);
for($i=0;$i<count($courses);$i++){
    echo $courses[$i]."</br>";
}

?>
