<?php include('functions/sessiontracking.php'); ?> 
<?php include('header.php'); ?>
<div class="brunchpg">
<!-- start cording here -->
  <div class="shopmain">
   <h2>BUY COIN</h2>
   <p>Click the buy button.</p>
   <form action="payment.php" method="post">
    <table id="stat">
        <tr>
        <td>10 COIN</td>
        <td><img src="images/coin.png"></td>
        <td>PRICE: $5</td>
        <td><button name="buycoin" value="10">BUY 10 COIN</button></td>
        </tr>
        <tr>
        <td>20 COIN</td>
        <td><img src="images/coin.png"></td>
        <td>PRICE: $10</td>
        <td><button name="buycoin" value="20">BUY 20 COIN</button></td>
        </tr>
        <tr>
        <td>30 COIN</td>
        <td><img src="images/coin.png"></td>
        <td>PRICE: $15</td>
        <td><button name="buycoin" value="30">BUY 30 COIN</button></td>
        </tr>
    </table>
    </form>
    </div>
<!-- end cording here -->    
</div>
<?php include('footer.php'); ?>