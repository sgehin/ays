<?php
include 'database.php'; 
$conn = connectDB();
// MySQL DATETIME format)
$myDate = date("Y-m-d H:i:s");
// checken of data ingevult is
if (isset($_REQUEST['note'])) {
    $savecontainer = mysql_fix_string($conn, $_REQUEST['note']);
    $sql = "INSERT INTO `note`( `note`, `date_id`)VALUES('" . $savecontainer . "','".$myDate."')";
    $conn->query($sql);       
    echo "notes are saved";
    echo "<br>";
    echo $savecontainer;
    echo "<br>";
    echo $myDate;
    $conn->close();
}
?>


