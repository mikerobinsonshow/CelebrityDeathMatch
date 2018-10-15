<?php include_once 'functions/db_config.php'; ?>

<?php 

function validateName($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function isPasswdSame($passwd, $passwd2){
    if ($passwd.equals($passwd2)){
        return true;
    } else{
        return false;
    } 
}



function isEmailExist($email, $db){
    $sql = "SELECT * FROM customerdata WHERE email = " . "'" . $email . "';";
    #echo "SQL = " . $sql ;
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        return true;
    }
    else{
        return false;
    }       
}



?>