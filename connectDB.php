<?php

function connectDB() {
    $hostname = 'localhost';
    $databasenaam = 'ays';
    $username = 'root';
    $password = '';
    
//        $hostname = 'localhost';
//    $databasenaam = 'phpzwollegen2';
//    $username = 'phpzwollegen1';
//    $password = 'itphtoren';
    
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    //error in connect stop instructie
    if ($conn->connect_error)
        die($conn->connect_error);
    return $conn;
}      
?>        