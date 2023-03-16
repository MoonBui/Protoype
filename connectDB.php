<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$hostname = "mysql.fsb.miamioh.edu";
$username = "dental";//this stuff you have to change individually
$password = "fsb882dental";//this stuff you have to change individually
$database = "dental"; //this stuff you have to change individually

// Create a connection to the MySQL database
$conn = mysqli_connect($hostname, $username, $password, $database);
// print("Connect Was run");
// Check if the connection was successful
if (!$conn) {
    echo "It Broke";
    die("Connection failed: " . mysqli_connect_error());
}
// print("Connect ran successfully");
?>

