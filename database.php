<?php include 'connectDB.php' ?>
<?php

function delYourSubject() {
    $conn = connectDB();
    if (isset($_REQUEST['subject']) and ( $_REQUEST['subject'] == '')) {     
    } elseif (isset($_REQUEST['subject'])) {
        $sql = "DELETE FROM `sg_subject` WHERE subject='$_REQUEST[subject]'";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: workplace.php");
    }
}
function delYourNote() {
    $conn = connectDB();
    if (isset($_REQUEST['note']) and ( $_REQUEST['note'] == '')) {
        
    } elseif (isset($_REQUEST['note'])) {
        $sql = "DELETE FROM `sg_note` WHERE note='$_REQUEST[note]'";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: workplace.php");
    }
}
// check of note = "" anders opslaan note met subject_id
function saveYourNote($parinsertid) {
    $insertID = $parinsertid;
    $conn = connectDB();
// MySQL DATETIME format)
    $myDate = date("d-m-Y H:i:s");
// checken of data ingevult is
    if (isset($_REQUEST['note']) and ( $_REQUEST['note'] == '')) {
        
    } elseif (isset($_REQUEST['note'])) {
        $savecontainer = mysqli_real_escape_string($conn, $_REQUEST['note']);
        $sql = "INSERT INTO `sg_note`( `subject_id`,`note`, `date_id`)VALUES('$insertID','$savecontainer','$myDate')";
        $conn->query($sql);
        $conn->close();
        header("Location: workplace.php");
    }
}
// check of subject = "" check bestaat al update anders opslaan subject
function saveYourSubject() {
    $conn = connectDB();
    if (isset($_REQUEST['subject']) and ( $_REQUEST['subject'] == '')) {
        header("Location: workplace.php");
    } elseif (isset($_REQUEST['subject']) and ( $_REQUEST['subject'] == checkIfSubjectExist())) {
        // verwijder karakters \n,\r,\,'," en ctrl-Z (undo text)
        $savecontainer2 = mysqli_real_escape_string($conn, $_REQUEST['subject']);
        $sql = "UPDATE sg_subject SET subject='$savecontainer2' WHERE subject='$savecontainer2';";
        $conn->query($sql);
        $conn->close();    
    } else {
        (isset($_REQUEST['subject']));
        $savecontainer2 = mysqli_real_escape_string($conn, $_REQUEST['subject']);
        $sql = "INSERT INTO `sg_subject`(`subject`)VALUES('$savecontainer2')";
        $conn->query($sql);
        $insertID = $conn->insert_id;
        $conn->close();
        return $insertID;   
    }
}
//check of input voorkomt in tabel sg_subject in kolom subject en geeft waarde uit kolom subject terug
function checkIfSubjectExist() {
    $conn = connectDB();
    if (isset($_REQUEST['subject']) and ( $_REQUEST['subject'] == '')) {
        header("Location: workplace.php");
    } elseif (isset($_REQUEST['subject'])) {
        $checkcontainer2 = $_REQUEST['subject'];
        $sql = "SELECT subject FROM sg_subject WHERE subject='$checkcontainer2';";
        $conn->query($sql);
        $result = $conn->query($sql);
        $conn->close();
        for ($x = 0; $x < $result->num_rows; $x++) {
            $row = $result->fetch_assoc();
        }
    }
    header("Location: workplace.php");
    return $row['subject'];
}
function displayselectedsubject() {    
}
?>

