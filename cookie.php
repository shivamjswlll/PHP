<?php
$cookie_name="user";
$cookie_value ="yuvi";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
echo $_COOKIE[$cookie_name];
setcookie($cookie_name,'shivam',time()+(86400*30),"/");
echo $_COOKIE[$cookie_name];
?>