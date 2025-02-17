<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>

<body>

<?php session_start(); ?>

<?php
    if (isset($_SESSION['user'])) {        
        $host = "cs.neiu.edu";
        $user = "user_name";
        $password = "password";
        $db = "db_name";

        $score1 = 0; 

        $con = mysqli_connect($host, $user, $password);
        mysqli_select_db($con, $db); 

        $username = $_SESSION['user'];
        $password = $_SESSION['pwd']; 
        $sql = "select score from Loginform where User= '$username' && Password= '$password'"; 
        $result = mysqli_query($con, $sql); 
        while ($row = $result->fetch_assoc())
            {
                foreach($row as $value)  
                {$score1 = $value;}
            }
        // echo $score1;
        // echo $_SESSION['score'];
    ?>
    <div class="container" style="text-align: center">
        <h1>The End</h1>
        <h2>Your Total Score is: <?php echo $score1; ?><h2>
    </div>
    
<?php
    if (count($_SESSION) > 0 && count($_COOKIE) > 0){   
        foreach ($_SESSION as $key => $value){ 	
            unset($_SESSION[$key]);
        }      
        session_destroy();     // complete terminate the session

        foreach ($_COOKIE as $key => $value){
            setcookie($key, '', time() - 7200);  
        }
    }
    }
    else
        header('Location:index.php'); 
?>

</body>
</html>
