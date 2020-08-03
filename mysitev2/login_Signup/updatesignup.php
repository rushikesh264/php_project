<?php

//to avoid webbrowser error
// header('Cache-Control: no cache'); //no cache
// session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
 session_start();
                    
?>
<html>
    <head>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
           <link rel="stylesheet" href="../shoping/php/footer.css" type="text/css">
           
           <script language='javascript' type='text/javascript'>
                function check(input)
                {
                        if (input.value != document.getElementById('pwd1').value)
                        {
                            input.setCustomValidity('Password Must be Matching.');
                        }
                         else
                         {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                }
                if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) 
                {
                    window.location.href = "backerror.php";
                    
                }
    </script>

     
    </head>
    <body>
       <?php require_once ('../shoping/php/login_signup_header.php');
       ?>

        
       
       <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <a href="logindata.php"><h2 class="inactive underlineHover"> Sign In </h2></a>
            <a href="signup.php"><h2 class="active">Sign Up </h2></a>
            
            <?php
                   
                    if( !isset($_SESSION['email']) and !isset($_POST['email']) and !isset($_POST['submit']))
                    {
                        //executes  first
            ?>
                        <form action="signup.php" method="POST">
                          <input type="email" name="email" placeholder="Email_ID" required/>
                          <input type="submit"  value="Sent OTP">
                        </form>            
            <?php
                    }
                    else
                    {
                        //executes  second
                        
                        
                        
                        
                        //verify the otp from email
                        if(!isset($_SESSION['userOTP']) and !isset($_POST['userOTP']) and !isset($_POST['submit']))
                        {
                            //executes  second
                            if(!isset($_SESSION['email']))
                            {
                             $_SESSION['email']=$_POST['email'];   
                            }
                               
                             //sent otp to mail
                        
                             $otp=rand(100000,999999);
                             $_SESSION['verificationOTP']=$otp;
                             $subject = "QuickShop OTP";
                             $message = "User below OTP to verify your mail on Quickshop.com<br>OTP: $otp";
                          
                             $header = "From:QuickShop.com\r\n";
                             
                             //$retval = mail ($_SESSION['email'],$subject,$message,$header);
                             echo $otp;
                               
            ?>
                            <form action="signup.php" method="POST">
                              <input type="text" name="userOTP" placeholder="Enter OTP" required/>
                              <input type="submit"  value="Verify">
                            </form> 
            <?php
            
                        }
                        else
                        {   
                            //executes  third
                            $_SESSION['userOTP']=$_POST['userOTP'];
                            if( $_SESSION['verificationOTP']== $_SESSION['userOTP'])
                            {
                                unset($_POST['email']);
                                unset($_SESSION['userOTP']);  ?>
                                <form action="signupverify.php" method="POST">
                                  <input type="password" id='pwd1' name='p' placeholder="Password" required/></li>
                                  <input type="password" id='pwd2' name='p2' placeholder="Password Again" oninput="check(this)" />
                                  <input type="submit"  value="Register">
                                </form>
                            
            <?php               
                            }
                            else
                            {
                               // remove all session variables
                                    session_unset();
                                    
                                    // destroy the session
                                    session_destroy();
                                echo '<script type="text/javascript">'; 
                                echo 'alert("Invalid OTP   ");'; 
                                echo 'window.location.href = "signup.php";';
                                echo '</script>';
                                
                            }
                        }
                    }
                           
            ?>

                           
        
         
        
          </div>
       </div>
    <?php require_once("../shoping/php/footer.php"); ?>
    </body>
</html>
