function sendsave(){
    alert()
    document.forms["inputNote"].submit();
}

function test(){
    var someText = "Hier worden de aantekeningen ingevoerd";
    document.getElementById("selectArea").value = "Subject";
    document.getElementById("inputsubject").value = "Kijk het werktSubject";
    document.getElementById("inputnote").value = someText;
    }
    // onmouseover effect for fa fa-icons
function bigLoop(x){
    x.style.color = "red";
    }
function normalLoop(x){
    x.style.color = "#4286A1";
    }
function bigTrash(x){
    x.style.color = "red";
    } 
function normalTrash(x){
    x.style.color = "#4286A1";
    }       
function bigSave(x){
    x.style.color = "green";
    } 
function normalSave(x){
    x.style.color = "#4286A1";
    }     

