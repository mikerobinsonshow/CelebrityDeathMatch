<?php

require_once "db_config.php";

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    echo "DB SUCESS";
} catch (PDOException $e) {
    exit("Failed to connect Database");
}

function require_unlogined_session () {
    @session_start();
    if (isset($_SESSION["username"])) {
        header('Location: welcome.php');
        exit;
    }
}

function require_logined_session() {
    @session_start();
    if (!isset($_SESSION["username"])) {
        header('Location: login.php');
        exit;
    }
}

function h ($var) {
    if (is_array($var)){
        return array_map(h, $var);
    } else {
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}

function isNameValid ($str){ // need more validations
    $result = true;
    if ($str == ""){
        $result = false;
    }
    return $result;
    
}
?>