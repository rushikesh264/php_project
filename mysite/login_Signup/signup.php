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
        
        
            <!-- Login Form -->
            <form action=signupverify.php method="POST">
              <input type="email" name="email" placeholder="Email_ID" required/>
              <input type="password" id='pwd1' name='p' placeholder="Password" required/></li>
              <input type="password" id='pwd2' name='p2' placeholder="Password Again" oninput="check(this)" />
              <input type="submit"  value="Register">
            </form>
        
           
        
          </div>
       </div>
    <?php require_once("../shoping/php/footer.php"); ?>
    </body>
</html>
