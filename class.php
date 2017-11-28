<?php require 'connectDB.php'; ?>

<?php

// subject class ________________________________
class subject{
    
    public $id;
    public $subject;
    
    public function __construct($Pid,$Psubject) {
        
        $this->id = $Pid;
        $this->subject = $Psubject;
        
    }
    
    public function getid(){
        
        return $this->id;
    }
    
    public function setid($Pid){
        
        $this->id=$Pid;
    }
    
    public function getsubject(){
        
        return $this->subject;
    }
    
    public function setsubject($Psubject){
        
        $this->subject=$Psubject;
    }
    
    public function addsubject($Pgetsubject){
        
        $conn = connectDB();
        //error in connect stop instructie
        if ($conn->connect_error) {
            die($conn->connect_error);
        } elseif (isset($_GET['subject']) and ( $_GET['subject'] == '')) {
        
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
    
}

// note class   _________________________________
class note {
    
    public $id;
    public $subject_id;
    public $note;
    public $date_id;
    
    public function __construct($Pid,$Psubject_id,$Pnote,$Pdate_id) {
        
        $this->id = $Pid;
        $this->subject_id = $Psubject_id;
        $this->note = $Pnote;
        $this->date_id = $Pdate_id;
    }
    
    public function getid(){
        
        return $this->id;
    
    }
    
    public function setid($Pid){
        
        $this->id=$Pid;
    
    }
    
    public function getsubject_id(){
        
        return $this->subject_id;
    
    }
    
    public function setsubject_id($Psubject_id){
        
        $this->subject_id=$Psubject_id;
    
    }
    
    public function getnote(){
        
        return $this->note;
    
    }
    
    public function setnote($Pnote){
        
        $this->note=$Pnote;
    
    }
    
    public function getdate_id(){
        
        return $this->date_id;
    
    }
    
    public function setdate_id($Pdate_id){
        
        $this->date_id=$Pdate_id;
    
    }
    
    public function allnoteselection(){
        
        $conn = connectDB();
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        $sql = "SELECT * FROM `note`;";
        $result = $conn->query($sql);
        return $result;
    }
    
    
}