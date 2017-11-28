
<?php
    $hostname='localhost';
    $databasenaam='ays';
    $username='root';
    $password='';
    
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    $sql = "SELECT DISTINCT note FROM `note`;";
    $result = $conn->query($sql);
    echo "<select>";
        echo "<option align='center'>select notes</option>";
    for($x = 0; $x < $result->num_rows; $x++){
        $row = $result->fetch_assoc();
        echo "<option>";
        echo $row['note'];
        echo "<br>";
        echo "</option>";
    }
    echo "</select>";
        
?>
     