
<?php include('header.php'); ?>
<?php include_once 'functions/addnewuser.php'; ?>
               <div class="login" id="body">
            
                 <h2>CREATE A NEW ACCOUNT</h2>
        
                <div class="regisFrm" id="content">
                    <form method="POST">
                       
                            <input type="text" name="firstName" placeholder="First Name" required />
                            
                            <input type="text" name="lastName" placeholder="Last Name" required />
                           
                            <input type="text" name="email" placeholder="Email" required />
                            
                            <input type="password" name="passwd" placeholder="Password" required />
                           
                            <input type="password" name="passwd2" placeholder="Verify Password" required />
                            
                            <input type="text" name="city" placeholder="City" required />
                        
                            <input type="text" name="state" placeholder="State" required />
                        
                            <div class="send-button">

                            <input type="submit" name="saveUser" value="CREATE ACCOUNT" style="background-color: red;">

                            </div>
                        
                    </form>
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div> 
            </div>
<?php include('footer.php'); ?>