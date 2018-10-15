<?php
if(!isset($_SESSION)) { 
    session_start(); 
    //echo "STARTING SESSION! <BR> ";
} 
if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] !== true) {
//    echo  "Welcome to the member's area, " . $_SESSION['firstName'] . "!";
//} else {
    echo "Please log in to see our members only pages.";
    header("Location: login.php");  //Change this to another pages
}



?>