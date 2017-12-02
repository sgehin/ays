

// bij onclick wordt de meegegeven waarde in een verborgen veld met collect_id gestopt en meegezonden
function mutatie(testValue){
    alert("binnen function mutatie");
    switch(testValue){
        case "saveNote":
            document.getElementById("collect_id").value = "saveNote";
            saveNote();
            break;
        case "delNote":
            alert("delNote");
            document.getElementById("collect_id").value = "delNote";
            delNote();
            break;
        case "saveSubject":
            document.getElementById("collect_id").value = "saveSubject";
            saveSubject();
            break;
        case "delSubject":
            document.getElementById("collect_id").value = "delSubject";
            delSubject();
            break;
        default:
            document.localName="workplace.php";
    }   
}

function delSubject() {
    var checkSubject
    checkSubject = document.getElementById("inputsubject").value;
    if (checkSubject == ""){
        document.getElementById("inputsubject").value = "!!No subject to delete!!";
        setTimeout(function () {
            document.getElementById("inputsubject").value = "";
        }, 1000);
        document.location('workplace.php');    
    } else {
            document.forms["inputNote"].submit();
            document.getElementById("inputsubject").value = "!!subject delete!!";
            setTimeout(function () {
            document.getElementById("inputsubject").value = "";
            }, 1000);
        
        }
    }

function delNote() {
    var checkNote
    checkNote = document.getElementById("inputnote").value;
    if (checkNote == ""){
        document.getElementById("inputnote").value = "!!no note to delete!!";
        setTimeout(function () {
            document.getElementById("inputnote").value = "";
        }, 1000);
        document.location('workplace.php');    
    } else {
            document.forms["inputNote"].submit();
            document.getElementById("inputnote").value = "!!note delete!!";
            setTimeout(function () {
            document.getElementById("inputnote").value = "";
            }, 1000);
        
        }
    }



//functie checkt of een onderwerp en aantekening in de twee elementen aanwezig zijn. 
//indien aanwezig wordt de inhoud naar de server gestuurd.
function saveNote() {
    var checkSubject
    var checkNote
    checkSubject = document.getElementById("inputsubject").value;
    checkNote = document.getElementById("inputnote").value;
    if (checkSubject == "") {
        document.getElementById("inputsubject").value = "!!Subject is required to save your notes!!";
        setTimeout(function () {
            document.getElementById("inputsubject").value = "";
        }, 1000);
        document.location('workplace.php');
    } else if (checkNote == "") {
        document.getElementById("inputnote").value = "!!No data available!!";
        setTimeout(function () {
            document.getElementById("inputnote").value = "";
        }, 1000);
        document.location('workplace.php');
    } else {
        document.forms["inputNote"].submit();
        document.getElementById("inputnote").value = "!!Data saved!!";
        setTimeout(function () {
            document.getElementById("inputnote").value = "";
        }, 1000);
    }
}
//functie checkt of een onderwerp in het elementen aanwezig is.
//indien aanwezig wordt de inhoud naar de server gestuurd.
function saveSubject() {
    var checkSubject
    checkSubject = document.getElementById("inputsubject").value;
    if (checkSubject == "") {
        document.getElementById("inputsubject").value = "!!No data available!!";
        setTimeout(function () {
            document.getElementById("inputsubject").value = "";
        }, 1000);
        document.location('workplace.php')
    } else {
        console.log();
        document.forms["inputNote"].submit();
        document.getElementById("inputsubject").value = "!!Data saved!!";
        setTimeout(function () {
            document.getElementById("inputsubject").value = "";
        }, 1000);
        document.location('workplace.php');
    }
}
//Met ajaxmethode een verzoek voor "note"verzenden naar de server en het resultaat
// in een element "selectarea" weergegeven.
function searchLoop() {       
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("selectArea").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "notesearch.php", true);
  xhttp.send();
  }
//Met ajaxmethode een verzoek voor "subject" verzenden naar de server en het resultaat
// in een element "dropdownn" weergeven.
  function searchsubject() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dropdownn").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "subjectsearch.php", true);
  xhttp.send();
  
  }


// onmouseover effect for fa fa-icons
function bigLoop(x) {
    x.style.color = "red";
}
function normalLoop(x) {
    x.style.color = "#4286A1";
}
function bigTrash(x) {
    x.style.color = "red";
}
function normalTrash(x) {
    x.style.color = "#4286A1";
}
function bigSave(x) {
    x.style.color = "green";
}
function normalSave(x) {
    x.style.color = "#4286A1";
}
// drobdown select function

// neem de waarde van "myselect" en zet het in het element "inputsubject"
function selectFunction1(){
    var a=document.getElementById("myselect").value;
    document.getElementById("inputsubject").value = a;
}
// neem de waarde van "selectArea" en zet het in het element "inputnote"
function selectFunction2(){
    var a=document.getElementById("selectArea").value;
    document.getElementById("inputnote").value = a;
}