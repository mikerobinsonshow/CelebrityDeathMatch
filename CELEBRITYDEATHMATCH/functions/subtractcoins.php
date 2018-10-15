<?php
$coinPrice = (-1);
//echo  "About to subtract!<BR>";
$sql_query="INSERT INTO transactions (customerDataId, transactionAmount, trTime) VALUES (:customerDataId, :transactionAmount, :time);";
$stmt=$db->prepare($sql_query);
$stmt->bindParam(':customerDataId', $_SESSION['customerDataId'], PDO::PARAM_INT);
$stmt->bindParam(':transactionAmount', $coinPrice , PDO::PARAM_INT);
$stmt->bindParam(':time', date("Y-m-d"), PDO::PARAM_STR);
$stmt->execute();



?>