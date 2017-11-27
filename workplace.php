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
                                        <div id="dropdownn">
                                            <ul id="selectbox">
                                                <li class="li">Coffee xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</li>
                                                <li class="li">Tea</li>
                                                <li class="li">Milk</li>
                                            </ul>     
                                        </div>
                                    </div>
                                <!-- generalbox right -->
                                <div class="genRightUp">
                                    <div id="trashSubject">
                                        <i class="fa fa-floppy-o" style="font-size:20px;color:#4286A1"onmouseover="bigSave(this)" onmouseout="normalSave(this)" onclick="saveSubject()"></i>
                                        <br><br>
                                    </div>
                                    <div id="saveSubject">
                                    </div>
                                        <i class="fa fa-trash" style="font-size:20px;color:#4286A1"onmouseover="bigTrash(this)" onmouseout="normalTrash(this)"></i>
                                </div>
                                <div class="genRightDn">
                                    <div id="trashSubject">
                                        <i class="fa fa-floppy-o" style="font-size:20px;color:#4286A1"onmouseover="bigSave(this)" onmouseout="normalSave(this)" onclick="saveNote()"></i>
                                        <br><br>
                                    </div>
                                    <div id="saveSubject">
                                    </div>
                                        <i class="fa fa-trash" style="font-size:20px;color:#4286A1"onmouseover="bigTrash(this)" onmouseout="normalTrash(this)"></i>
                                </div>
                                </div>    
                                </div>
                                <!-- displaybox -->  
                                <div class="column middle" id="displaybox">
                                    <form name="inputNote" action="saveNote.php" method="get"> 
                                    <textarea type="text" id="inputsubject" name="subject"></textarea>                                    
                                    <textarea type="text" id="inputnote" name="note" value="deze text moet vervangen worden"></textarea>
                                    </form>
                                </div>
                                <!-- searchbox -->  
                                <div class="column right" id="searchbox">
                                    <div name="radiobutton">
                                        <input type="radio" id="radiobuttonNote"><label>notes</label>                  
                                    </div>
                                    <input type="text" id="searchsubject" name="subject">
                                    <i class="fa fa-search" id="loop" style="font-size:20px;color:#4286A1" onmouseover="bigLoop(this)" onmouseout="normalLoop(this)" onclick="searchLoop()"></i>
                                    <div class="searchResult">
                                        <textarea type="text" id="selectArea" name="selectSearch"></textarea>
                                    </div>    
                                </div>                                
    </body>
</html>
