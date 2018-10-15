<?php

if(isset($_POST['submit'])){
    echo $_SESSION['userID'];
    
    $sql_query="UPDATE CustomerData SET coin= :coinnumber WHERE customerDataId = :uerID ;";
    $stmt=$db->prepare($sql_query);
    $stmt->bindParam(':userID', $_SESSION['userID'], PDO::PARAM_INT);
    $stmt->bindParam(':coinnumber', $_SESSION['coin'] , PDO::PARAM_INT);
    $stmt->execute();
    //$stmt->bindParam(':time', date("Y-m-d"), PDO::PARAM_STR);
    
    $sql_query2="INSERT INTO transactions (customerDataId, transactionAmount, trTime) VALUES (:uerID, :coinnumber, :time);";
    $stmt2=$db->prepare($sql_query2);
    $stmt2->bindParam(':userID', $_SESSION['userID'], PDO::PARAM_INT);
    $stmt2->bindParam(':coinnumber', $_SESSION['coin'] , PDO::PARAM_INT);
    $stmt2->bindParam(':time', date("Y-m-d"), PDO::PARAM_STR);
    $stmt2->execute();
    
     header("Location: thankyou.php"); 
    
}else{
    echo "Error: Payment";
}

//if (isset($_POST['coinAmount'])){
//    $sql_query="INSERT INTO transactions (customerDataId, transactionAmount, trTime) VALUES (:customerDataId, :transactionAmount, :time);";
//    $stmt=$db->prepare($sql_query);
//    $stmt->bindParam(':customerDataId', $_SESSION['customerDataId'], PDO::PARAM_INT);
//    $stmt->bindParam(':transactionAmount', $_POST['coinAmount'], PDO::PARAM_STR);
//    $stmt->bindParam(':time', date("Y-m-d"), PDO::PARAM_STR);
//    $stmt->execute();
//    
//}
?>
