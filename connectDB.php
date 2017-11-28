<?php

// connect to database
function connectDB() {
    $hostname = 'localhost';
    $databasenaam = 'ays';
    $username = 'root';
    $password = '';
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    //error in connect stop instructie
    if ($conn->connect_error)
        die($conn->connect_error);
    return $conn;
}