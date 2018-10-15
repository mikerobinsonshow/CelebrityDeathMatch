<?php
include_once 'functions/db_config.php';
include_once 'functions/validateforms.php';
if (isset($_POST['saveUser'])) {
    //echo "BUTTON PRESSED!";
    if (isEmailExist(validateName($_POST['email']), $db) == true){
        #echo "Email exists";
        echo "<h2> Email exists. Please choose another or go to <a href='login.php'>login page</a> </h2>";
    }else {
        echo "email doesnt exist";
        $sql_query="INSERT INTO customerdata (firstName, lastName, city, state, passwd, email) VALUES (:first, :last, :city, :state, :passwd, :email);";
        $stmt=$db->prepare($sql_query);
        $stmt->bindParam(':first', validateName($_POST['firstName']), PDO::PARAM_STR);
        $stmt->bindParam(':last', validateName($_POST['lastName']), PDO::PARAM_STR);
        $stmt->bindParam(':city', validateName($_POST['city']), PDO::PARAM_STR);
        $stmt->bindParam(':state', validateName($_POST['state']), PDO::PARAM_STR);
        $stmt->bindParam(':passwd', validateName($_POST['passwd']), PDO::PARAM_STR);
        $stmt->bindParam(':email', validateName($_POST['email']), PDO::PARAM_STR);
        $stmt->execute();
        echo "INSERTED!";
        header("Location: index.php");
    }
}
else{
    //echo"Button not pressed?";
}
?>
