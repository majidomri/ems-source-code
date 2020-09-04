<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "ujs6qs442syez"; 
$dbPassword = "root"; 
$dbName     = "dbb7hrv2b6avrs"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}