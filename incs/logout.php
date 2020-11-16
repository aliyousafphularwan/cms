<?php
	// session_start();

	session_destroy();
    $_SESSION["admin"] = "";
 	header('Location: index.php');

?>