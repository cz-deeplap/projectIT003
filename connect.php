<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_projct";

    $conn = new mysqli($hostname, $username, $password,$dbname);

    if (!$conn) {
        echo "error_database" . mysql_connect_error();
    }
?>