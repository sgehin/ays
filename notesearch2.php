<?php include 'connectDB.php'?>
<?php
 //database doorzoeken op note
$conn = connectDB();
$q = $_REQUEST['q'];
$sql = "SELECT * FROM sg_note WHERE note like '%$q%';";
$result = $conn->query($sql);   
echo "<option align='center'>select notes</option>";
for($x = 0; $x < $result->num_rows; $x++){
    $row = $result->fetch_assoc();
    echo "<option>";
    echo $row['note'];
    echo "</option>";
    } 

//"SELECT subject FROM sg_subject WHERE subject='$checkcontainer2';";

?>
     