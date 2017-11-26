<?php
include 'database.php';
$conn = connectDB();
// MySQL DATETIME format)
$myDate = date("Y-m-d H:i:s");
// checken of data ingevult is
if( isset($_GET['note']) and ($_GET['note'] == '') ) {
     echo "No data to save";
     header("Location: workplace.php");
}     
     elseif (isset($_REQUEST['note'])) {
                $savecontainer = mysql_fix_string($conn, $_REQUEST['note']);
                $sql = "INSERT INTO `note`( `note`, `date_id`)VALUES('$savecontainer','$myDate')";
                $conn->query($sql);       
                $conn->close();
                echo "is opgeslagen";
                header("Location: workplace.php");
     }
     
     
?>