<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "bhartisantosh_sbusr"; 
$dbPassword = "0v=r2%&TSRBR"; 
$dbName     = "bhartisantosh_sb2024db"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>