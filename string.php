<?php
patterns
$pattern="/a.b/";
$text="acb abc a-b";
preg_match_all($pattern,$text,$matches);
echo "Matches for 'a.b:\n";
print_r($matches);

// preg_match
$pattern="/ba./";
$text="baba bbb baz ba4";
if(preg_match($pattern,$text,$matches)){
    echo"First match found";
}
else{
    echo"Not found";
}



?>