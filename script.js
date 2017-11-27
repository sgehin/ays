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
        document.location('workplace.php')
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
    } else { console.log();
        document.forms["inputNote"].submit();
        document.getElementById("inputsubject").value = "!!Data saved!!";
        setTimeout(function () {
            document.getElementById("inputsubject").value = "";
        }, 1000);
        document.location('workplace.php');
    }
}

function searchLoop(){
    var A
    var searchitem = document.getElementById("searchsubject").value;
    alert(searchitem);
    document.getElementById("selectArea").value = searchitem;
    A = searchSubjectThrewDB(searchitem);
    alert (A);
    document.getElementById("selectArea").value = A + searchitem;
    
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

