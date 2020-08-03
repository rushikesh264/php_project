<?php
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
       <?php require_once ('../shoping/php/login_signup_header.php');?>

       <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
           <h2 class="active"> Forget Password? </h2>
           
           
            <!-- Login Form -->
            <?php
                   
                if(!isset($_POST['email']) and !isset($_SESSION['email']))
                {
                    //executes  first
            ?>
                    <form action="forgetpassdata.php" method="POST">
                       <input type="email"  class="fadeIn second" name="email" placeholder="Enter Email" required>
                      <input type="submit" class="fadeIn fourth" value="Sent OTP">
                    </form>
                    
            <?php
                }
                else
                {
                    //executes  second
                    if(isset($_POST['email']) or isset($_SESSION['email']))
                    {
                        require_once('../shoping/php/CreateDb.php');
                        $data=new CreateDb("id10821837_demo","test");
                        if(!isset($_SESSION['email']))
                        {
                            $_SESSION['email']=$_POST['email'];
                            $result=$data->checkemail($_SESSION['email']);
                            if($result)
                            {
                                       
                                $otp=rand(100000,999999);
                                $to=$_SESSION['email'];
                                $_SESSION['verificationOTP']=$otp;
                                $subject = "QuickShop OTP";
                                $message = "Use below OTP to change your password on Quickshop.com OTP: $otp";
                                $header = "From:QuickShop.com\r\n";
                                $retval = mail ($to,$subject,$message,$header);
                                if($retval==true)
                                {
                        ?>
                                <input type="email" value=<?php echo $_POST['email'] ?> placeholder="Email_ID" readonly/>
                                <form action="forgetpassdata.php" method="POST">
                                 <input type="text" name="userOTP" placeholder="Enter OTP" required/>
                                 <input type="submit"  value="Verify">
                                </form> 
                          <?php 
                                
                                }
                                else
                                {
                                    session_destroy();
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Check Your INTERNET connection? or Something Went Wrong!!!!");'; 
                                    echo 'window.location.href = "forgetpassdata.php";';
                                    echo '</script>';
                                }
                
                                       
                            }
                            else
                            {
                                    session_destroy();
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Invalid Email!!!!");'; 
                                    echo 'window.location.href = "forgetpassdata.php";';
                                    echo '</script>';
                                            
                            }
                        }
                        if(isset($_POST['userOTP']) or isset($_SESSION['userOTP']))
                        {
                                 
                            if(!isset($_SESSION['userOTP']))
                            {
                                $_SESSION['userOTP']=$_POST['userOTP'];  
                                if($_SESSION['userOTP']==$_SESSION['verificationOTP'])
                                {
                                 ?>
                                   <form action="forgetpass.php" method="POST">
                                    <input type="password" id='pwd1' name='p' placeholder="New Password" required/></li>
                                    <input type="password" id='pwd2' name='p2' placeholder="New Password Again" oninput="check(this)" />
                                    <input type="submit"  value="Register">
                                   </form>

                         <?php
                                       
                                }
                                else
                                {
                                    session_destroy();
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Invalid OTP,Try again!!!!");'; 
                                    echo 'window.location.href = "forgetpassdata.php";';
                                    echo '</script>';
                                            
                                }
                            }
                            else
                            {
                                 unset($_SESSION['userOTP']);
                            }
                                    
                        }
                        else
                        {
                                unset($_SESSION['userOTP']);
                        }
                    }
                    else
                    {
                        session_destroy();
                    }
                }
            ?>
        
  
          </div>
        </div>

	<?php require_once("../shoping/php/footer.php"); ?>
  
    </body>
</html>
