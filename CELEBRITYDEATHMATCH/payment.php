<?php include('functions/sessiontracking.php'); ?> 
<?php include('header.php'); ?>

<div class="brunchpg">
   <h2>CONFIRM PURCHASE</h2>
    <div class="creditCardForm">

     <div class="payment">
            
         <form action="thankyou.php" method="post">
                   <?php
                    $coin = $_POST['buycoin'];
                    switch ($coin) {
                        case 10:
                            $price = 5;
                            break;
                        case 20:
                            $price = 10;
                            break;
                        case 30:
                            $price = 15;
                            break;
                    }
                    if(!$coin){
                        echo "Please select coin button in <a href = 'shoppingcoin.php'>Shopping Page</a>";
                    }else {
                       echo "<table class='pch'>";
                       echo "<tr>";
                       echo "<td>Purchase Coin Amount: ". $coin."</td>";
                       echo "<td>Price: $".$price."</td></tr>";
                       echo "</table>";
                    }
                    ?>
                    <?php echo "<input type='hidden' name='coinAmount' value = $coin> " ;?>
                    <div class="form-group owner">
                        <label for="owner">Name on Card</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="images/visa.jpg" id="visa">
                        <img src="images/mastercard.jpg" id="mastercard">
                        <img src="images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                    </div>
                </form>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>