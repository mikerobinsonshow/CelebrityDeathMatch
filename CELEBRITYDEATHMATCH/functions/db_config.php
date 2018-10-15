<?php
error_reporting(0);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'scpi');

//$db_host = "localhost"; 
//$db_name = "scpi"; 
//$db_user = "root"; 
//$db_pass = "";


try {
    $db = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    //echo "DB SUCESS";
} catch (PDOException $e) {
    echo"DB ERROR";
    exit("Failed to connect Database");
}

?>