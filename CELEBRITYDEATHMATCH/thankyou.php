<?php include('functions/sessiontracking.php'); ?> 
<?php include_once('functions/matchuphelper.php'); ?>
<?php include('header.php'); ?>
<?php include_once('functions/paymenthelper.php'); ?>
<?php //include('functions/getcoinamount.php'); ?>
<div class="brunchpg">
    <h2> THANK YOU FOR YOUR SUPPORT!!  </h2>
    <p> Every coin you purchase goes to supporting our research into meaningless but funny websites for your entertainment. </p> 
</div>
<div id="howto">
    <center>    
        <?php 
        echo "$imageArray[$random]<BR> " ;
        echo "<h3> $nameArray[$random]" . " thanks you!! <BR> </h3>" ;
        ?>
    </center>
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