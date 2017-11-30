//function del(){
//        document.forms["delNote"].submit();
//        alert ("Do you want to delete this subject?");
//        document.getElementById("inputsubject").value = "!!Data is deleted!!";
//        setTimeout(function () {
//            document.getElementById("inputsubject").value = "";
//        }, 1000);
//        document.location('workplace.php');
//    }




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


function test() {
    var someText = "Hier worden de aantekeningen ingevoerd";
    document.getElementById("selectArea").value = "Subject";
    document.getElementById("inputsubject").value = "Kijk het werktSubject";
    document.getElementById("inputnote").value = someText;
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
function selectFunction1(){
    var a=document.getElementById("myselect").value;
    document.getElementById("inputsubject").value = a;
}
function selectFunction2(){
    var a=document.getElementById("selectArea").value;
    document.getElementById("inputnote").value = a;
}
