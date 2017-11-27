<?php
include 'database.php';

$insertID = saveYourSubject();
saveYourNote($insertID);
header("Location: workplace.php");

    
     
?>