<html>
    <head>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
           <link rel="stylesheet" href="../shoping/php/footer.css" type="text/css">
           
     
    </head>
    <body>
       <?php require_once ('../shoping/php/login_signup_header.php');?>

        
       
       <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
            <a href="logindata.php"><h2 class="active"> Sign In </h2></a>
            <a href="signup.php"><h2 class="inactive underlineHover">Sign Up </h2></a>
        
        
            <!-- Login Form -->
            <form action=loginverify.php method="POST">
              <input type="text" name="username" placeholder="Username" required autofocus />
              <input type="password" name="password" placeholder="Password" required/>
              <input type="submit"  value="Log In">
            </form>
        
            <!-- Remind Passowrd -->
            
            <div id="formFooter">
              <a class="underlineHover" href="forgetpassdata.php">Forgot Password?</a>
            </div>
        
          </div>
       </div>
    <?php require_once("../shoping/php/footer.php"); ?>
    </body>
</html>
