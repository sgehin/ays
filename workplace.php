<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/inlogpic.png">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <script src="headscript.js"></script>
        <title>@ YOUR SERVICE</title>
    </head>
    <script>
        function test(){
            
  
    document.getElementById("displaybox").innerHTML = "<br><h2 class=test>INVOERSCHERM</h2>";
    document.getElementById("generalbox").innerHTML = "<br><h2 class=test>ALGEMEEN</h2>";
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
                <br>
                hallo
            </div>
            <div class="column middle" id="displaybox">
                 <br>
                zooo
            </div>
            <div class="column right" id="searchbox">
                 <br>
                 <button onclick="test()">test</button>
            </div>
            </body>
            </html>
