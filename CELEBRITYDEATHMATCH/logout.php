<?php include('functions/sessiontracking.php'); ?> 
<?php include('header.php'); ?>

<div class="pv">
<?php
// remove all session variables
session_unset(); 
// destroy the session 
//session_destroy(); 
echo "<p>You have been logged out.</p>";
echo "<p><a href='index.php'>Return to home</a></p>";
?>
</div>
<?php include('footer.php'); ?>
