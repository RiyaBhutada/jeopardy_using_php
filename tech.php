<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grids and Questions</title>   
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>

<?php session_start(); 
    if (isset($_SESSION['user'])  &&  isset($_COOKIE['user'])){
        $host = "cs.neiu.edu";
        $user = "user_name";
        $password = "password";
        $db = "db_name";

        $score1 = 0; 

        $con = mysqli_connect($host, $user, $password);
        mysqli_select_db($con, $db); 

        $username = $_SESSION['user'];
        $password = $_SESSION['pwd']; 
        $totalScore = 0;

        $sql2 = "select score from Loginform where User= '$username' && Password= '$password'"; 
        $result = mysqli_query($con, $sql2); 
        while ($row = $result->fetch_assoc()){
            foreach($row as $value)  
            {$score1 = $value;}
        }
        $totalScore = $score1;
        if (isset($_POST["q1"])){
            $totalScore = $totalScore + 100;              
        }
        if (isset($_POST["q2"])){
            $totalScore = $totalScore + 100;              
        }
        if (isset($_POST["q3"])){
            $totalScore = $totalScore + 100;              
        }
        if (isset($_POST["q4"])){
            $totalScore = $totalScore + 400;              
        }
        if (isset($_POST["q5"])){
            $totalScore = $totalScore + 400;              
        }
        if (isset($_POST["q6"])){
            $totalScore = $totalScore + 400;              
        }
        if (isset($_POST["q7"])){
            $totalScore = $totalScore + 1000;              
        }
        if (isset($_POST["q8"])){
            $totalScore = $totalScore + 1000;              
        }
        if (isset($_POST["q9"])){
            $totalScore = $totalScore + 1000;              
        }

        if($totalScore > 0){
            $sql = "update Loginform SET score='$totalScore' WHERE User= '$username'";
            if (mysqli_query($con, $sql)){
                echo "Record updated successfully";
            }else{
                echo "Error updating record: " . mysqli_error($con);
            }  
        }
        
        
        $con -> close();
    ?>
    <?php
    // retrieve all XML errors when loading the document, result in an array of errors
    libxml_use_internal_errors(true);      
    $xml=simplexml_load_file("Tech.xml") or die("Error: Cannot create object");
    ?>
    <div id="simpleModal1" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn1">&times;</span>
                <form method="POST" id="form_1" action="#">
                    <p id="question"><?php echo $xml->Techn[0]->Question?></p>
                    <input type="radio" name="q1" value="Java" id="java"><label>Java</label>
                    <input type="radio" name="question2" value="Python" id="python"><label>Python</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked1()"/>
                    <?php $message = "";?>
                    <p id="m1"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal2" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn2">&times;</span>
                <form method="POST" id="form_2" action="#">
                    <p id="question"><?php echo $xml->Techn[1]->Question?></p>
                    <input type="radio" name="q2" value="Facebook" id="facebook"><label>Facebook</label>
                    <input type="radio" name="question2" value="Twitter" id="twitter"><label>Twitter</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked2()"/>
                    <?php $message = "";?>
                    <p id="m2"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal3" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn3">&times;</span>
                <form method="POST" id="form_3" action="#">
                    <p id="question"><?php echo $xml->Techn[2]->Question?></p>
                    <input type="radio" name="q3" value="one" id="one"><label>1024</label>
                    <input type="radio" name="question2" value="two" id="two"><label>1000</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked3()"/>
                    <?php $message = "";?>
                    <p id="m3"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal4" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn4">&times;</span>
                <form method="POST" id="form_4" action="#">
                    <p id="question"><?php echo $xml->Techn[3]->Question?></p>
                    <input type="radio" name="question1" value="Trojan" id="trojan"><label>Trojan</label>
                    <input type="radio" name="q4" value="Worm" id="worm"><label>Worm</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked4()"/>
                    <?php $message = "";?>
                    <p id="m4"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal5" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn5">&times;</span>
                <form method="POST" id="form_5" action="#">
                    <p id="question"><?php echo $xml->Techn[4]->Question?></p>
                    <input type="radio" name="question1" value="REAL" id="real"><label>REAL</label>
                    <input type="radio" name="q5" value="CAPTCHA" id="captcha"><label>CAPTCHA</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked5()"/>
                    <?php $message = "";?>
                    <p id="m5"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal6" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn6">&times;</span>
                <form method="POST" id="form_6" action="#">
                    <p id="question"><?php echo $xml->Techn[5]->Question?></p>
                    <input type="radio" name="question1" value="Url2" id="Url2"><label>Union Resource Locator</label>
                    <input type="radio" name="q6" value="Url1" id="Url1"><label>Uniform Resource Locator</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked6()"/>
                    <?php $message = "";?>
                    <p id="m6"></p>
                </form>
        </div>       
    </div>

    <div id="simpleModal7" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn7">&times;</span>
                <form method="POST" id="form_7" action="#">
                    <p id="question"><?php echo $xml->Techn[6]->Question?></p>
                    <input type="radio" name="q7" value="ebay1" id="ebay1"><label>1995</label>
                    <input type="radio" name="question2" value="ebay2" id="ebay2"><label>1997</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked7()"/>
                    <?php $message = "";?>
                    <p id="m7"></p>
                </form>
        </div>       
    </div>
    <div id="simpleModal8" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn8">&times;</span>
                <form method="POST" id="form_8" action="#">
                    <p id="question"><?php echo $xml->Techn[7]->Question?></p>
                    <input type="radio" name="question1" value="github" id="Github"><label>Github</label>
                    <input type="radio" name="q8" value="duolingo" id="Duolingo"><label>Duolingo</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked8()"/>
                    <?php $message = "";?>
                    <p id="m8"></p>
                </form>
        </div>       
    </div>
    <div id="simpleModal9" class="modal">
        <div class="modal-content">
            <span class="closeBtn closeBtn9">&times;</span>
                <form method="POST" id="form_9" action="#">
                    <p id="question"><?php echo $xml->Techn[8]->Question?></p>
                    <input type="radio" name="question1" value="ASCI" id="asci"><label>ASCI</label>
                    <input type="radio" name="q9" value="ASCII" id="ascii"><label>ASCII</label>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit" onclick="return is_checked9()"/>
                    <?php $message = "";?>
                    <p id="m9"></p>
                </form>
        </div>       
    </div>

    <div style="text-align: center">
        <h1><?php echo $_SESSION['user'];?>, Choose Your Question!</h1>
        <p>Score gets updated after you Submit an answer; and then the page reloads again. Clickon the End Game button below to see the total score.</p>
    </div>
    <div style="text-align: center">
        <!--<h2 style="color:cadetblue"> Total Score: </h2>-->
    </div>
    <table align="center" border="1" width="600" height="450">
        <tr>
            <td><button type="button" id="option1" class="button">$100</button></td>
            <td><button type="button" id="option2" class="button">$100</button></td> 
            <td><button type="button" id="option3" class="button">$100</button></td>
        </tr>
        <tr>
            <td><button type="button" id="option4" class="button">$400</button></td>
            <td><button type="button" id="option5" class="button">$400</button></td>
            <td><button type="button" id="option6" class="button">$400</button></td>
        </tr>
        <tr>
            <td><button type="button" id="option7" class="button">$1000</button></td>
            <td><button type="button" id="option8" class="button">$1000</button></td>
            <td><button type="button" id="option9" class="button">$1000</button></td>
        </tr>
    </table>
    <br>
    <br>
    <script>
        var score = calculate();
        alert(score);
    </script>

    <div style="text-align: center;">
        <a id ="value" style=
        "text-transform: uppercase;
        outline: 0;background: #4CAF50; 
        width: 12%;
        border: 0;
        padding:15px;
        color: #FFFFFF;
        text-decoration:none; 
        font-size: 14px;
        cursor: pointer;" 
        href="Endgame.php"> End Game
        </a>
    </div>

    <br>
    <br>
    <script src="js/main.js"></script> <!--link to my JS file-->
<?php
    }
    else
        header('Location:index.php'); 
?>

</body>
</html>
