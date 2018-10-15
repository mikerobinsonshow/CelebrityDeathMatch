<?php include('functions/sessiontracking.php'); ?> 
<?php include('header.php'); ?>
<?php include_once('functions/stagehelper.php'); ?> 
<?php include_once('functions/subtractcoins.php'); ?> 
<?php include('functions/getcoinamount.php'); ?>

<div id="matchup">
   <div class="stage">
    <table cellspacing="5" cellpadding="5">
        <tbody> 
            <tr>
                <td class="acStname"><?php echo $actorOneName; ?></td> <!-- NAMES -->
                <td></td>
                <td class="acStname"><?php echo $actorTwoName; ?></td>
            </tr>
            <tr>
                <td><?php echo "<img src = '$actorOneImagePath' width = '300' height = '300' alt = 'ActorOne'/" ;?> </td> <!-- IMAGES -->
                <td> VS </td>
                <td><?php echo "<img src = '$actorTwoImagePath' width = '300' height = '300' alt = 'ActorTwo'/" ;?></td>
            </tr>
            <tr>
                <td class="acdata acresult"><?php echo $isActorOneWinner; ?></td>
                <td></td>
                <td class="acdata acresult"><?php echo $isActorTwoWinner; ?></td>
            </tr>
        
            <tr>   
                <td class="acdata">On Screen Movie Kills: <?php echo $actorOneKills ;?></td>
                <td></td>
                <td class="acdata">On Screen Movie Kills: <?php echo $actorTwoKills ;?></td>
            </tr>
            <tr>
                <td class="acdata">On Screen Movie Death: <?php echo $actorOneDeaths ;?></td>
                <td></td>
                <td class="acdata">On Screen Movie Death: <?php echo $actorTwoDeaths ;?></td>
            </tr>
            <tr>
                <td class="acdata">Winning Streak Multiplier: +<?php echo $actorOneMultiplier; ?> % </td>
                <td></td>
                <td class="acdata">Winning Streak Multiplier: +<?php echo $actorTwoMultiplier; ?> % </td>
            </tr>
            <tr>
                <td class="acdata"><?php echo $actorOneName . " XP = " . $actorOneScore  ?></td>
                <td></td>
                <td class="acdata"><?php echo $actorTwoName . " XP = " . $actorTwoScore  ?></td>
            </tr>
        
        </tbody>
    </table>
      <form action="matchup.php">
       <p><input type="submit" value="Try again?" class ="bigbtn" /></p>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>