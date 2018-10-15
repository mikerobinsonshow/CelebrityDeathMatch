<?php include_once 'functions/verifylogin.php'; ?>

  
<?php include('header.php'); ?>

        <div class="login" id="mainmenu">

            <h2>USER LOGIN</h2>
        
            <div class="regisFrm">

            <form action="" method="POST">

                <input type="text" name="email" PlaceHolder = "email" required>

                <input type="password" name="password" PlaceHolder = "password" required>

                <div class="send-button">

                <input type="submit" name="submit" value="Login">

                </div>
            </form>
            </div>
            <p class="rbtn"><a href="signup.php">New User?</a></p>
        </div>


<?php include('footer.php'); ?>