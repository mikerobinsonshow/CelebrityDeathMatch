<?php include_once 'functions/db_config.php'; ?>
<?php

$random =  time() % 10; //Choose a random number between 0 - 14 based on the time
//$random += 1; // // Random number will be the starting index number for actor. Add one, because index can not be 0 in database.
?>
<?php
try{
    $nameArray = array();
    $imageArray = array();
    $actorIdArray = array();
    $startIndex = $random;
    $lastIndex = $random + 10;                                            //display 5 actors at random
    $sql = "SELECT * FROM actors WHERE actorId >= $random and actorId < $lastIndex;";
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        $columnCounter = 0;
        while ($row = $result->fetch()) {
            ///////////////////////////////////////////////////////////////////////////
            //Set Variables
            $firstName = $row['firstName'];                               //first name 
            $lastName = $row['lastName'];                                 //last name
            $actorId = $row['actorId'];                                  // actor Id
            $displayName = $row['firstName'] . " " .  $row['lastName']; //display name
            $image = "images/" . $firstName . "_" . $lastName . ".jpg";   //image name
            $displayImage = "<img src = $image class='acimg' />"; //image path
            array_push($nameArray, $displayName); //add first and last name to array
            array_push($imageArray, $displayImage);//add image url to array
            array_push($actorIdArray, $actorId);  //add actor Id to array
            ///////////////////////////////////////////////////////////////////////////
        }
    } else {
        echo "Error connected to database. Check connection.";
    }
    //echo "<BR>" . $nameArray[1];
} catch (exception $e){
    echo "Problem connecting to DeathMatch database. Will now self destruct. <br>";
    echo $e;
}
?>
