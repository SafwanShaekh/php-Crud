<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpCrud";

    $dbconn = new mysqli($server,$username,$password,$dbname);

    if($dbconn->connect_error){
            die("Failed to connect to the database " . $dbconn->connect_error);
    }

?>