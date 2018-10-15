
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Celebrity Death Match</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>
    <header>
      <div class="nav">
       <h1><a href="./"><img src="images/logo.png"></a></h1>
        <div class="leftnav">
           <ul>
            <li><a href="index.php#howto">HOW TO PLAY</a></li>
            <li><a href="stats.php">STATS</a></li>
            <li><a href="matchup.php">MATCH UP</a></li>
            </ul>
        </div>
        <div class="rightnav">
            <ul>
                <?php
                
                if(!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)) { 
                   echo "<li><a href='signup.php'><img src='images/register.png'></a></li>";
                }
                
                if(!(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)) { 
                   echo "<li><a href='login.php'><img src='images/login.png'></a></li>";
                } else {
                   echo "<li class='showuser'>Hi, " . $_SESSION['firstName'] . "</li>";
                   echo "<li><a href='logout.php'><img src='images/logout.png'></a></li>";
                }
                
                ?>
                <li class="coinbtn"><a href="shoppingcoin.php"><img src="images/coin.png">Buy Coin</a></li>
                
             </ul>
        </div>
    </div>
</header>
    <div id="container">