<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";;

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("connection failed: ", mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn,$sql);

mysqli_select_db($conn , $dbname);

$sql = "CREATE TABLE IF NOT EXISTS employees(
    id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10,2),
    age INT
)";

mysqli_query($conn, $sql);

$sql = "INSERT INTO employees(name,department,salary,age) VALUES
    ('ALICE','HR',5000.00,28),
    ('BOB','IT',5000.00,8),
    ('ALICE','HR',5000.00,18),
    ('ALICE','HR',5000.00,29),
    ('ALICE','HR',5000.00,48),
";

mysqli_query($conn , $sql);

echo "<h3>SELECT Query with WHERE, LIKE , AND, OR </h3>";
$sql="SELECT * FROM employees ORDER BY salary DESC";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    echo $row['name']. " - Salary: " .
}


?>