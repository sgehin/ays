
        <?php
        // heardername
        function title(){
            return "@ YOUR SERVICE";
        }
        // verbinding maken met database
        function connectDB() {
            $hostname = 'localhost';
            $databasenaam = 'aantekening_bas';
            $username = 'root';
            $password = '';
            $conn = new mysqli($hostname, $username, $password, $databasenaam);
            //error in connect stop instructie
            if ($conn->connect_error)
                die($conn->connect_error);
            return $conn;
        }
        // inloggen
        function login() {
            if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
                $testUser = $_REQUEST['Uname'];
                $testpassWord = $_REQUEST['password'];
            }
            $conn = connectDB();
            // checken of data ingevult is
            if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
                // variabele vullen query string om input op te halen van database
                $sql = "SELECT `id`, `username`, `password` FROM `user` WHERE `username`='" . $testUser . "'";
                $result = $conn->query($sql);            // uitvoeren query string voor ophalen tabel user en resultset in variable zetten
                for ($x = 0; $x < $result->num_rows; $x++) {
                    $huidigeRecord = $result->fetch_assoc();
                }
                if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
                    $testUser = $_REQUEST['Uname'];
                    $testpassWord = $_REQUEST['password'];
                }
                if ($testUser == $huidigeRecord['username'] && $testpassWord == $huidigeRecord['password']) {
                    header("Location: workplace.php");
                } else if ($testUser != $huidigeRecord['username'] or $testpassWord != $huidigeRecord['password']) {
                    echo "<div class =LogForm2 >login failed<div>";
                }
            }
        }
        // account creeren
        function formInsert() {
            $conn = connectDB();
            // checken of data ingevult is
            if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
                $uname = mysql_fix_string($conn, $_REQUEST['Uname']);
                $password = mysql_fix_string($conn, $_REQUEST['password']);
                // placeholder geeft foutmelding. weet niet waarom daarom gedeactiveerd
                /* $stmt = $conn->prepare('INSERT INTO `user` VAlUES(?,?)');
                  $stmt->bind_param('ss',$uname,$password);
                  $stmt->execute();
                  printf("%d Row inserted.\n", $stmt->affected_rows);
                  $stmt->close();
                 */
                $sql = "INSERT INTO `user`(`username`, `password`)VALUES('" . $uname . "','" . $password . "')";
                $conn->query($sql);
                $sql2 = "INSERT INTO `personalia`(`Firstname`, `Lastname`,`E-mail`)VALUES('" . $_REQUEST['fname'] . "','" . $_REQUEST['lname'] . "','" . $_REQUEST['usremail'] . "')";
                $conn->query($sql2);
                echo "<div class =LogForm2>Account created<div>";
                $conn->close();
            }
        }
        // check vreemde characters en code
                function mysql_entities_fix_string($conn, $string) {
            return htmlentities(mysql_fix_string($conn, $string));
        }
        function mysql_fix_string($conn, $string) {
            if (get_magic_quotes_gpc())
                $string = stripcslashes($string);
            return $conn->real_escape_string($string);
        }
        ?>
 
