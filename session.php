<?php
// Start the session
session_start();

// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
$_SESSION["user"]=array("1"=>"abc","2"=>"xyz");
$_SESSION["user"]="mno";

// echo "Session variables are set.";

unset($_SESSION["user"]);
SESSION_unset();
session_destroy();
?>