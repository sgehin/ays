<?php include 'connectDB.php'?>
<?php
// database doorzoeken op note
$conn = connectDB();
$sql = "SELECT DISTINCT note FROM `sg_note`;";
$result = $conn->query($sql);   
echo "<option align='center'>select notes</option>";
for($x = 0; $x < $result->num_rows; $x++){
    $row = $result->fetch_assoc();
    echo "<option>";
    echo $row['note'];
    echo "</option>";
}      
?>
     