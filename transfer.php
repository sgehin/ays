<?php include 'database.php'; ?>
<?php
// toetsen van van de waarde  afkomstig van de knoppen en verwijzen naar de juiste functies
 $collect = $_REQUEST['collect'];
 switch($collect){
     case "saveNote":
            $insertID = saveYourSubject();
            saveYourNote($insertID);   
            break;
        case "delNote":
            delYourNote();
            break;
        case "saveSubject":
            saveYourSubject();
            break;        
        case "delSubject":
           delYourSubject();
            break;        
        default:     
 }
 ?>