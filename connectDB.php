<?php
function connectDB() {
    $hostname = 'localhost';
    $databasenaam = 'ays';
    $username = 'root';
    $password = '';   
//    $hostname = 'localhost';
//    $databasenaam = 'phpzwollegen2';
//    $username = 'phpzwollegen1';
//    $password = 'itphtoren';   
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    //checkt de connectie en geeft null terug bij geen fout anders string met beschrijving fout 
    if ($conn->connect_error)
        die($conn->connect_error);// print bericht en verlaat script.
    return $conn;
}      
?>        