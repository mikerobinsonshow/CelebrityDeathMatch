<?php include_once 'functions/db_config.php'; ?>

<?php
try{
    $nameArray = array();
    $winsArray = array();
    $deathsArray = array();                                           //display 5 actors at random
    $sql = "SELECT * FROM actors;";
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            ///////////////////////////////////////////////////////////////////////////
            //Set Variables
            $firstName = $row['firstName'];                               //first name 
            $lastName = $row['lastName'];                                 //last name
            (int)$actorId = $row['actorId'];                                  // actor Id
            $displayName = $row['firstName'] . " " .  $row['lastName']; //display name
            //$image = "images/" . $firstName . "_" . $lastName . ".jpg";   //image name
            //$displayImage = "<img src = $image width = '200' height = '200' alt = 'logo.png'/>"; //image path
            array_push($nameArray, $displayName); //add first and last name to array
            //////////////////////////////////////////////////////////////////////////////////////
            $query = "SELECT * FROM actorstats WHERE actorId = " . (int)$actorId . " ;";
            $rst = $db->query($query);
            if ($rst->rowCount() == 1) {
                while ($row = $rst->fetch()) {
                    array_push($winsArray, $row['wins']);//add wins to array
                    array_push($deathsArray, $row['deaths']);  //add deaths to array
                }
            }
            //////////////////////////////////////////////////////////////////////////////
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