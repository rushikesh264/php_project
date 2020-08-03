<?php
   $con=mysqli_connect("localhost","id10821837_demo1","Rushikesh@195","id10821837_demo");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else
   {
	   $email=$_POST["email"];
	   $username = $_POST['username'];
	   $result = mysqli_query($con,"SELECT password,email FROM test where 
	   username='$username' and email='$email'");
	   $row = mysqli_fetch_array($result);
	   if($row)
	   {
             $to =$row[1];
             $otp=rand(10000,99999);
             $subject = "QuickShop OTP";
             $message = "your OTP is : $otp";
          
             $header = "From:QuickShop.com\r\n";
             
             $retval = mail ($to,$subject,$message,$header);
             
             if( $retval == true ) {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("OTP sent successfully to your mail., Check your Mail!!");'; 
                    echo 'window.location.href = "logindata.php";';
                    echo '</script>';
             }
	   }
		else{
		     echo '<script type="text/javascript">'; 
            echo 'alert("Invalid Credentials!!!!");'; 
            echo 'window.location.href = "forgetpassdata.php";';
            echo '</script>';
		}
   }
   mysqli_close($con);
?>