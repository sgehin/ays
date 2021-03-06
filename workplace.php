
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/inlogpic.png">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>

        <title>@ YOUR SERVICE</title>
    </head>    
    <body>
        <div class="header">
            <h1 id="head">@ YOUR SERVICE</h1>
            <h2 id="head"><span>Sebastien<span></h2>
                        </div>
                        <ul>
                            <li><a class="active" href=index.php>Home</a></li>
                            <li><a href=workplace.php>Workplace</a></li> 
                        </ul>       
                        <div id="spaceline"></div>
                        <colum><div class="row">
                                <div class="column left" id="generalbox">
                                    <!-- generalbox left -->   
                                    <div class="genLeft">
                                        <div class="searchResult">
                                            <div id="dropdownn">
                                                <select  class="myselect" id="myselect" onchange="selectFunction1()">
                                                    <script>    var xhttp = new XMLHttpRequest(); //innitieer nieuw object 
                                                        xhttp.onreadystatechange = function () {  // oproepen functie als de status veranderd.
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                document.getElementById("myselect").innerHTML = this.responseText; // return data als string
                                                            }
                                                        };
                                                        xhttp.open("GET", "subjectsearch.php", true); //speciveer methode, locatie van de file, true=async
                                                        xhttp.send();// verstuur verzoek naar webserver.
                                                    </script>
                                                </select>
                                            </div>
                                        </div>    
                                    </div>
                                    <!-- knoppen bij subject-->
                                    <div class="genRightUp">
                                        <div id="trashSubject">
                                            <i class="fa fa-floppy-o" style="font-size:20px;color:#4286A1"onmouseover="bigSave(this)" onmouseout="normalSave(this)" onclick="mutatie('saveSubject')"></i>
                                            <br><br>
                                        </div>
                                        <div id="saveSubject">
                                        </div>
                                        <i class="fa fa-trash" style="font-size:20px;color:#4286A1"onmouseover="bigTrash(this)" onmouseout="normalTrash(this)" onclick="mutatie('delSubject')"></i>
                                    </div>
                                    <!-- knoppen bij note-->
                                    <div class="genRightDn">
                                        <div id="trashSubject">
                                            <i class="fa fa-floppy-o" style="font-size:20px;color:#4286A1"onmouseover="bigSave(this)" onmouseout="normalSave(this)" onclick="mutatie('saveNote')"></i>
                                            <br><br>
                                        </div>
                                        <div id="saveSubject">
                                        </div>
                                        <i class="fa fa-trash" style="font-size:20px;color:#4286A1"onmouseover="bigTrash(this)" onmouseout="normalTrash(this)" onclick="mutatie('delNote')"></i>
                                    </div>
                                </div>    
                            </div>
                            <!-- displaybox -->  
                            <div class="column middle" id="displaybox">
                                <form name="inputNote" action="transfer.php" id="displayForm" method="get">
                                    <input name="collect" type="hidden" id="collect_id">
                                    <textarea type="text" id="inputsubject" name="subject" placeholder="Fill in subject"></textarea>                                    
                                    <textarea type="text" id="inputnote" name="note" value="deze text moet vervangen worden" placeholder="Fill in note"></textarea>
                                </form>
                                <!-- </form> -->   
                            </div>
                            <!-- notebox -->  
                            <div class="column right" id="searchbox">
                                <div name="radiobutton"> 
                                    <input name="radioNote" type="radio" id="radiobuttonNote"><label>notes</label>
                                </div>
                                <input type="text" id="searchsubject" name="subject" >
                                <i class="fa fa-search" id="loop" style="font-size:20px;color:#4286A1" onmouseover="bigLoop(this)" onmouseout="normalLoop(this)" onclick="searchLoop()"></i>
                                <div class="searchResult">
                                    <div id="dropdownn">
                                        <select  id="selectArea" onchange="selectFunction2()">
                                        </select>
                                    </div>   
                                </div>    
                            </div>
                            <div class="footer">
                                <p>ITPH Academy</p>
                            </div>
                            </body>
                            </html>