<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    // $email=htmlspecialchars($_POST)
    echo "Name: ".$name."<br>";
    $password=htmlspecialchars($_POST['password']);
    echo "Password: ".$password."<br>";
}
?>