<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'insoft@2011');
    define('DB_DATABASE', 'flyproject');
	
    $host = "localhost";
    $user = "root";	
    $password = "insoft@2011";	
    $database = "flyproject";	

    $mysqli = new mysqli('localhost', 'root', 'insoft@2011', 'flyproject');
	mysqli_query($mysqli, "SET NAMES 'UTF8'");
?>