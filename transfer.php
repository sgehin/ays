<?php include 'database.php'; ?>
<?php
// collecteren van opdrachten afkomstig van de knoppen en verwijzen naar de juiste functies
 $collect = $_REQUEST['collect'];
 //echo $collect;
 
 switch($collect){
     case "saveNote":
            $insertID = saveYourSubject();
            saveYourNote($insertID);
            header("Location: workplace.php");
            break;
        case "delNote":
            echo "delNote";
            break;
        case "saveSubject":
            saveYourSubject();
            header("Location: workplace.php");
            break;
        case "delSubject":
           echo "delSubject";
        default:     
 }
 
 
 ?>