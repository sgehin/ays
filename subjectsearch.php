<?php //require 'subjectsearch.php'; ?>
<?php include 'connectDB.php'?>
<?php
    $conn = connectDB();
    $sql = "SELECT DISTINCT subject FROM `sg_subject`;";
    $result = $conn->query($sql);
        echo "<option align='center'>select subject</option>";
    for($x = 0; $x < $result->num_rows; $x++){
        $row = $result->fetch_assoc();
        echo "<option>";
        echo $row['subject'];        
        echo "</option>";
    }      
?>
     