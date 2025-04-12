<?php


// Database connection settings
$host = 'localhost';
$user_name = 'root';
$db_pass = '';
$db_name = 'isi_blog';



// Create a new mysqli connection
try {
    $conn = mysqli_connect($host, $user_name, $db_pass, $db_name);
} catch (Exception $e) {
    die("An error occurred while connecting to the database. Please try again later.");
}
