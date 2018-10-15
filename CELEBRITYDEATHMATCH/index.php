

<?php
if(!isset($_SESSION)) { 
    session_start(); 
    //echo "STARTING SESSION! <BR> ";
} 
?>
<?php include('header.php'); ?>
    <div id="mainimg">
            <img src="images/mainimg.jpg" alt="" />
    </div>
    <div id="howto" class="clearfix">
        <h2>HOW TO PLAY</h2>
        <div class="hbox">
        <div class="howbox">
        <h3>1.BUY COIN</h3>
        <p> Trade your fiat money for something of real value! <BR> Fake internet coins! Use coins to match up in Celebrity Death Matches. </p>
        </div>
        
        <div class="howbox">
        <h3>2.CHOOSE THE ACTORS</h3>
        <p>Pick two action stars to battle to the death! In our Mactch Up area</p>
        </div>
        
        <div class="howbox">
        <h3>3.PLAY MATCH</h3>
        <p>BATTLE ROYALE! <BR> Players win based on In Movie Kills and get extra points for winning streaks, when the best Actors are selected..</p>
        </div>
        </div>
    </div>    
    <div class="goplay">
        <?php
         if(!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)) { 
        echo "<p><a href='signup.php' class='bigbtn'>REGISTER</a></p>" ;
        }else{
             echo "<p><a href='matchup.php' class='bigbtn'>Match up!</a></p>" ;
         }
        ?>
    </div>    
       
        
<?php include('footer.php'); ?>
