<?php

// connect to database
function connectDB() {
    $hostname = 'localhost';
    $databasenaam = 'ays';
    $username = 'root';
    $password = '';
    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    //error in connect stop instructie
    if ($conn->connect_error)
        die($conn->connect_error);
    return $conn;
}
// check note = "" else save note met subject_id
function saveYourNote($parinsertid) {
    $insertID = $parinsertid;
    $conn = connectDB();
// MySQL DATETIME format)
    $myDate = date("d-m-Y H:i:s");
// checken of data ingevult is
    if (isset($_GET['note']) and ( $_GET['note'] == '')) {
        
    } elseif (isset($_REQUEST['note'])) {
        $savecontainer = mysql_fix_string($conn, $_REQUEST['note']);
        $sql = "INSERT INTO `note`( `subject_id`,`note`, `date_id`)VALUES('$insertID','$savecontainer','$myDate')";
        $conn->query($sql);
        $conn->close();
        header("Location: workplace.php");
    }
}
// check subject = "" else save subject
function saveYourSubject() {
    $conn = connectDB();
    if (isset($_GET['subject']) and ( $_GET['subject'] == '')) {
        
    } elseif (isset($_REQUEST['subject'])) {
        $savecontainer2 = mysql_fix_string($conn, $_REQUEST['subject']);
        $sql = "INSERT INTO `subject`(`subject`)VALUES('$savecontainer2')";
        $conn->query($sql);
        $insertID = $conn->insert_id;
        $conn->close();
        return $insertID;
        header("Location: workplace.php");
    }
}

function searchSubjectThrewDB($item){
    $searchItem = $item;
    $conn = connectDB();
    $sql = "SELECT * FROM `subject`";
    $result = $conn->query($sql);
    for ($x = 0; $x < $result->num_rows; $x++) {
                    $huidigeRecord = $result->fetch_assoc();
                }
    $conn->close();
    echo $huidigeRecord;
    return $huidigeRecord;
    header("Location: workplace.php");
}

// check vreemde characters en code
function mysql_entities_fix_string($conn, $string) {
    return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string) {
    if (get_magic_quotes_gpc())
        $string = stripcslashes($string);
    return $conn->real_escape_string($string);
}

?>