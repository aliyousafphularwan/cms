<?php

    $conn = mysqli_connect("localhost", "hospican_root", "uj)HZsxD8ds-", "hospican_cms") or die(mysql_error());
    
    if(!$conn){
        echo "database connection error";
    }
    

?>