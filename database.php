<?php include 'connectDB.php'?>
<?php
function delYourSubject(){
    
    echo "test delYourSubject";
}


//function delYourSubject() {
//     if (isset($_GET['subject']) and ( $_GET['subject'] == '')) {
//        
//    } elseif (isset($_REQUEST['subject'])) {
//        $savecontainer = mysqli_fix_string($conn, $_REQUEST['subject']);
//        $sql = "DELETE FROM subject WHERE subject='!!Subject is deleted!!'";
//        $conn->query($sql);
//        $conn->close();
//        header("Location: workplace.php");
//    }
//    
//}

// check of note = "" anders opslaan note met subject_id
function saveYourNote($parinsertid) {
    $insertID = $parinsertid;
    $conn = connectDB();
// MySQL DATETIME format)
    $myDate = date("d-m-Y H:i:s");
// checken of data ingevult is
    if (isset($_REQUEST['note']) and ( $_REQUEST['note'] == '')) {    
    } elseif (isset($_REQUEST['note'])) {
        $savecontainer = mysqli_fix_string($conn, $_REQUEST['note']);
        $sql = "INSERT INTO `sg_note`( `subject_id`,`note`, `date_id`)VALUES('$insertID','$savecontainer','$myDate')";
        $conn->query($sql);
        $conn->close();
        header("Location: workplace.php");
    }
}
// check of subject = "" anders opslaan subject
function saveYourSubject() {
    $conn = connectDB();
    if (isset($_REQUEST['subject']) and ( $_REQUEST['subject'] == '')) {
        
    } elseif (isset($_REQUEST['subject'])) {
        $savecontainer2 = mysqli_fix_string($conn, $_REQUEST['subject']);
        $sql = "INSERT INTO `sg_subject`(`subject`)VALUES('$savecontainer2')";
        $conn->query($sql);
        $insertID = $conn->insert_id;
        $conn->close();
        return $insertID;
        header("Location: workplace.php");
    }
}

//function searchSubjectThrewDB($item){
//    $searchItem = $item;
//    $conn = connectDB();
//    $sql = "SELECT * FROM `subject`";
//    $result = $conn->query($sql);
//    for ($x = 0; $x < $result->num_rows; $x++) {
//                    $huidigeRecord = $result->fetch_assoc();
//                }
//    $conn->close();
//    echo $huidigeRecord;
//    return $huidigeRecord;
//    header("Location: workplace.php");
//}

// check vreemde characters en code
function mysqli_entities_fix_string($conn, $string) {
    return htmlentities(mysql_fix_string($conn, $string));
}

function mysqli_fix_string($conn, $string) {
    if (get_magic_quotes_gpc())
        $string = stripcslashes($string);
    return $conn->real_escape_string($string);
}

function displayselectedsubject(){
    
}

?>

