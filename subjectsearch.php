
<?php
    $hostname='localhost';
    $databasenaam='ays';
    $username='root';
    $password='';
    
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    $sql = "SELECT DISTINCT subject FROM `subject`;";
    $result = $conn->query($sql);
    echo "<select>";
        echo "<option align='center'>select subject</option>";
    for($x = 0; $x < $result->num_rows; $x++){
        $row = $result->fetch_assoc();
        echo "<option>";
        echo $row['subject'];
        echo "</option>";
    }
    echo "</select>";
        
?>
     