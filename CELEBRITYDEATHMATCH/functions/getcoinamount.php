<?php include_once 'functions/db_config.php'; ?>
<?php include_once('functions/sessiontracking.php'); ?> 
<?php
try{
    $customerDataId = $_SESSION['customerDataId'];
    $sql = "SELECT SUM(transactionAmount)
    FROM transactions
    WHERE customerDataId = $customerDataId;";;
        $result = $db->query($sql);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {  
                $coinAmount = $row['SUM(transactionAmount)'];
                $coinAmount = (int)$coinAmount;
                $_SESSION['coinAmount'] = (int)$coinAmount;
            }
        }
} catch (Exception $e){
    echo "Error connecting to coin base. Maybe something in transactions. Make sure you are logged in dude. Log out and Log back in. " . $e;
}
?>
