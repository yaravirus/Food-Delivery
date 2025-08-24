<?php
// Start session if needed
if(!isset($_SESSION)) { 
    session_start(); 
}

// Database configuration
$host = "ep-twilight-unit-a15ekwl8-pooler.ap-southeast-1.aws.neon.tech";   // Replace with your InfinityFree DB host
$user = "neon_owner";         // Your DB username
$pass = "npg_qQbrtHI5x0Pn";         // Your DB password
$db   = "neondb";         // Your database name

// Connect to MySQL
$link = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
