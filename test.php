<?php
session_start();
    if (isset($_REQUEST['radioNote']) and ( $_REQUEST['radioNote'] == '')) {
        $mode = "default";
    } elseif (isset($_REQUEST['radioNote'])) {
        $mode = $_REQUEST['radioNote'];
        
    }
$_SESSION['apllicationMode']=  $mode;
echo $_SESSION['apllicationMode'];
header("Location: workplace.php");
?>