<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $gender = htmlspecialchars($_POST['gender']);  
if (empty($name) || empty($email) || empty($address) || empty($gender)) {
        echo "All fields are required!";
        exit;
    }
 session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
    $_SESSION['gender'] = $gender;
 echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: " . $_SESSION['name'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Address: " . nl2br($_SESSION['address']) . "<br>";  
    echo "Gender: " . ucfirst($_SESSION['gender']) . "<br>";
}
else {
    echo "Invalid request method.";
}
?>
