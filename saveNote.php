<?php
include 'database.php'; 


            $conn = connectDB();
            // checken of data ingevult is
            if (isset($_REQUEST['note'])) {
                $savecontainer = mysql_fix_string($conn, $_REQUEST['note']);
                $sql = "INSERT INTO `note`( `note`, `date_id`)VALUES('" . $savecontainer . "','2017-11-20')";
                $conn->query($sql);       
                echo "notes are saved";
                $conn->close();
            }
      


?>


