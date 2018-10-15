<?php
if (isset($_POST['coinAmount'])){
    $sql_query="INSERT INTO transactions (customerDataId, transactionAmount, trTime) VALUES (:customerDataId, :transactionAmount, :time);";
    $stmt=$db->prepare($sql_query);
    $stmt->bindParam(':customerDataId', $_SESSION['customerDataId'], PDO::PARAM_INT);
    $stmt->bindParam(':transactionAmount', $_POST['coinAmount'], PDO::PARAM_STR);
    $stmt->bindParam(':time', date("Y-m-d"), PDO::PARAM_STR);
    $stmt->execute();
    
    
        
}
?>
