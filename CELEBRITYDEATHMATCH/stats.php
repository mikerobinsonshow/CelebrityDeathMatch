<?php include('functions/sessiontracking.php'); ?> 
<?php include('header.php'); ?>
<?php include('functions/statshelper.php'); ?> 
<div class="brunchpg">
<h2>STAT</h2>
<table id="stat">
    <tr>
        <th> Actor Name</th>
        <th>Wins</th>
        <th>Deaths</th>
    </tr>
    <?php
    $arrlength = count($nameArray);
    for ($counter = 0; $counter < $arrlength ; $counter ++) { //iterate through each actor in the array. Two at a time.
        echo "<tr>"; //new row
        echo "<td>"; //New column
        echo "$nameArray[$counter]"; //Actors name
        echo "</td>";
        echo "<td>"; // new column
        echo "$winsArray[$counter]"; //Actors wins
        echo "</td>";
        echo "<td>"; // new column
        echo "$deathsArray[$counter]"; //Actors deaths
        echo "</td>";
        echo "</tr>";  //on to next row until all actors are shown (3 x n grid)
    }
    ?>
</table>
</div>
<?php include('footer.php'); ?>