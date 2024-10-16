<?php
$pattern="/a.b/";
$text="acb abc a-b";
preg_match_all($pattern,$text,$matches);
echo "Matches for 'a.b:\n";
print_r($matches);
?>