<?php include_once 'functions/db_config.php'; ?>

<?php

if(!isset($_SESSION)) { 
    session_start(); 
    //echo "STARTING SESSION! <BR> ";
} 

if (isset($_POST['submit'])) {
    //echo "SUBMIT PRESSED! <br>";
    $password = $_POST['password'];
    $email = $_POST['email'];
    //echo "EMAIL FROM PAGE IS: " . $Email . "<br>";
    //echo "PASSWORD FROM PAGE IS: " . $Password . "<br>";
    try {
        //echo "Trying sql... \n";
        $sql = "SELECT * FROM customerdata WHERE email = " . "'" . $email . "';";
        //echo "SQL = " . $sql ;
        $result = $db->query($sql);
        if ($result->rowCount() > 0) {
            //echo "Found a result";
            $fetched_row = $result->fetch();
            //echo "DATABASE PASSWORD is " . $fetched_row['passwd'] . "<br>";
            if ($email == $fetched_row['email'] && $password == $fetched_row['passwd']) {
                echo "PASSWORD CORRECT!";
                $_SESSION['loggedIn'] = true;
                $_SESSION['email'] = $fetched_row['email'];
                $_SESSION['firstName'] = $fetched_row['firstName'];
                $_SESSION['lastName'] = $fetched_row['lastName'];
                $_SESSION['customerDataId'] = $fetched_row['customerDataId'];
                header("Location: index.php");  //Change this to another pages
             
            }
        } else {
            echo " <p> No such username! </p>";
        }
    } catch (Exception $e) {
        echo "Wrong password?";
    }
}
?>
