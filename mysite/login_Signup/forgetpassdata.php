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
           <h2 class="active"> Forget Password? </h2>
            <!-- Login Form -->
            <form action="forgetpass.php" method="POST">
              <input type="text"  class="fadeIn second" name="username" placeholder="Enter Username" autofocus required>
               <input type="email"  class="fadeIn second" name="email" placeholder="Enter Email" required>
              <input type="submit" class="fadeIn fourth" value="Sent">
            </form>
        
        
          </div>
        </div>

	<?php require_once("../shoping/php/footer.php"); ?>
  
    </body>
</html>
