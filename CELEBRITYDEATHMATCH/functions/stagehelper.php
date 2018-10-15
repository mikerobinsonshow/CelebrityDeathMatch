<?php include_once 'functions/db_config.php'; ?>
<?php 
    $actorOneId = $_POST["teamOne"];
    $actorTwoId = $_POST["teamTwo"];
    
    /////////////////////////////////////////////////////////////////////////////////////////////
    //Get actor one's info
    $sql = "SELECT * FROM actors WHERE actorId = $actorOneId";
    $result = $db->query($sql);
    if ($result->rowCount() == 1) {
        while ($row = $result->fetch()) {
            $actorOneName = ($row['firstName'] . " " . $row['lastName']);
            $actorOneKills = $row['onScreenKills'];
            $actorOneDeaths = $row['onScreenDeaths'];
            $actorOneImagePath = $row['imagePath'];
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    //Determine Score Multiplier Actor One
    $actorOneMultiplier = 1.0; //initialize score multiplier to one, in case one does not exist
    
    $sql = "SELECT * FROM actorstats WHERE actorId = $actorOneId";
    $result = $db->query($sql);
    if ($result->rowCount() == 1) {
        while ($row = $result->fetch()) {
            if ($row['wins'] > 0){
            $actorOneMultiplier = ($row['wins'] *0.10) ; //set a score multiplier to 10% of total wins
            $actorOneWins = $row['wins'];
            $actorOneLosses = $row['deaths'];
            }
        }
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
     ////////////////////////////////////////////////////////////////////////////////////////////
    //Get actor two's info
    $sql = "SELECT * FROM actors WHERE actorId = $actorTwoId";
    $result = $db->query($sql);
    if ($result->rowCount() == 1) {
        while ($row = $result->fetch()) {
        $actorTwoName = ($row['firstName'] . " " . $row['lastName']);
        $actorTwoKills = $row['onScreenKills'];
        $actorTwoDeaths = $row['onScreenDeaths'];
        $actorTwoImagePath = $row['imagePath'];
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    //Determine Score Multiplier Actor two
    $actorTwoMultiplier = 1.0; //initialize score multiplier to one, in case one does not exist
    
    $sql = "SELECT * FROM actorstats WHERE actorId = $actorTwoId";
    $result = $db->query($sql);
    if ($result->rowCount() == 1) {
        while ($row = $result->fetch()) {
            if ($row['wins'] > 0){
            $actorTwoMultiplier = ($row['wins'] * 0.10) ; //set a score multiplier to 10% of total wins
            $actorTwoWins = $row['wins'];
            $actorTwoLosses = $row['deaths'];
            }
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////
    //Use a formula to determine each actors score. The difference of kills to deaths * multiplier.
    $actorOneScore = (max(0, ($actorOneKills - $actorOneDeaths))* (1+(float)$actorOneMultiplier));
    $actorTwoScore = (max(0, ($actorTwoKills - $actorTwoDeaths))* (1+(float)$actorTwoMultiplier));
    
    ////////////////////////////////////////////////////////////////////////////////////////////
    //Update Actor stats table with winner
    if ($actorOneScore > $actorTwoScore){//Actor 1 Wion
        $actorOneWins++;
        //Actor One Won? Actor 1 Wins++, //Actor 2 Losses+++
        $sql_query="UPDATE actorstats SET wins = :wins WHERE actorId= :actorId;";  
        $stmt=$db->prepare($sql_query);
        $stmt->bindParam(':wins', $actorOneWins, PDO::PARAM_INT);
        //$stmt->bindParam(':losses', $actorOneLosses, PDO::PARAM_INT);
        $stmt->bindParam(':actorId', $actorOneId, PDO::PARAM_INT);
        $stmt->execute();
        //Actor 2 Losses+++
        $actorTwoLosses++;
        $sql_query="UPDATE actorstats SET deaths = :losses WHERE actorId= :actorId;"; 
        $stmt=$db->prepare($sql_query);
        $stmt->bindParam(':losses', $actorTwoLosses, PDO::PARAM_INT);
        //$stmt->bindParam(':losses', $actorOneLosses, PDO::PARAM_INT);
        $stmt->bindParam(':actorId', $actorTwoId, PDO::PARAM_INT);
        $stmt->execute();
        //Set who won. To be used on stage as text
        $isActorOneWinner = "<font color='GREEN'>WINNER</font>";
        $isActorTwoWinner = "<font color='RED'>LOSER</font>";
    }else{ //Actor 2 Won
        $actorTwoWins++;
        //Actor Two Won? Actor 2 Wins++, //Actor 1 Losses+++
        $sql_query="UPDATE actorstats SET wins = :wins WHERE actorId= :actorId;"; 
        $stmt=$db->prepare($sql_query);
        $stmt->bindParam(':wins', $actorTwoWins, PDO::PARAM_INT);
        $stmt->bindParam(':actorId', $actorTwoId, PDO::PARAM_INT);
        $stmt->execute();
        //Actor 1 Losses+++
        $actorOneLosses++;
        $sql_query="UPDATE actorstats SET deaths = :losses WHERE actorId= :actorId;"; 
        $stmt=$db->prepare($sql_query);
        $stmt->bindParam(':losses', $actorOneLosses, PDO::PARAM_INT);
        $stmt->bindParam(':actorId', $actorOneId, PDO::PARAM_INT);
        $stmt->execute();
        //Set who won. To be used on stage as text
        $isActorOneWinner = "<font color='RED'>LOSER</font>";
        $isActorTwoWinner = "<font color='GREEN'>WINNER</font>";
        /////////////////////////////////////////////////////////////////////
    }
   // echo "stage helper was successful";
    
?>

