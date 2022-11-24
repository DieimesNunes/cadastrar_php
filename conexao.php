<?php
    $host="localhost";
    $user="root";
    $senha="";
    $banco="nomes";
    
    $mysqli = new mysqli($host, $user, $senha, $banco);


    if ($mysqli->connect_errno){
        echo "Connect faliled: " . $mysqli->connect_error;
        exit();
    }
?>