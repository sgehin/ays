<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/inlogpic.png">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="headscript.js"></script>
        <title>@ YOUR SERVICE</title>
    </head>
    <script>
        function test() {
            var someText = "Hier worden de aantekeningen ingevoerd";
            document.getElementById("inputsubject").value = "Subject";
            document.getElementById("inputnote").value = someText;
            document.getElementById("generalbox").innerHTML = "<br><h2 class=test>ALGEMEEN</h2>";
        }
        function bigImg(x) {
            x.style.font = "26px";
            x.style.color = "green";
        }
        function normalImg(x) {
            x.style.font= "24px";
            x.style.color = "#FFD427";
        }
        </script>
    <body>
        <div class="header">
            <h1 id="head">@ YOUR SERVICE</h1>
            <h2 id="head"><span>Sebastien<span></h2>
                        </div>
                        <ul>
                            <li><a class="active" href=index.php>Home</a></li>
                            <li><a href=workplace.php>Workplace</a></li> 
                        </ul>       
                        <div id="spaceline">
                        </div>
                        <colum><div class="row">
                                <div class="column left" id="generalbox">
                                    <button onclick="test()">test</button>
                                    <br>
                                    hallo
                                </div>
                                <div class="column middle" id="displaybox">
                                    <textarea type="text" id="inputsubject" name="subject"></textarea>
                                    <textarea type="text" id="inputnote" name="note" value="deze text moet vervangen worden"></textarea>
                                </div>
                                <div class="column right" id="searchbox">
                                    <input type="text" id="searchsubject" name="subject">
                                    <i class="fa fa-search" id="loop" style="font-size:24px;color:#FFD427" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="test()"></i>
                                    <div name="radiobutton">
                                        <input type="radio" id="radiobuttonNote"><label>notes</label>   
                                    </div>


                                </div>                                
                                </body>
                                </html>
