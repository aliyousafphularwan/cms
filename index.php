<?php session_start();?>
<html>
    <head>
        <title> Admin panel | Hospican International </title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        
        <?php
        
            include "incs/dbc2.php";
            
            if (isset($_POST["logmit"])) {
			$user = $_POST["userin"];
			$pass = $_POST["passin"];

			$_SESSION["admin"] = $user;

		    }
            
            if(isset($_SESSION["admin"])){
                include "dashboard.php";
            }else{
                include "login.php";
            }
        
        ?>
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>
    </body>
</html>