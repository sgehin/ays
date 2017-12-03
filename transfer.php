<?php include 'database.php'; ?>
<?php
session_start();
// toetsen van van de waarde  afkomstig van de knoppen en verwijzen naar de juiste functies
 $collect = $_REQUEST['collect'].$_SESSION['apllicationMode'];
 echo $collect;
 
 switch($collect){
     case "saveNoteradioNote":
            $insertID = saveYourSubject();
            saveYourNote($insertID);   
            break;
        case "delNoteradioNote":
            delYourNote();
            break;
        case "saveSubjectradioNote":
            saveYourSubject();
            break;        
        case "delSubjectradioNote":
           delYourSubject();
            break;        
        default:     
 }
 
 
 ?>