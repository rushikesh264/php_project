<?php
    session_start();
     require_once('../shoping/php/CreateDb.php');
        $data=new CreateDb("id10821837_demo","test");
	    $username=$_SESSION['email'];
        $password=$_POST["p2"];
        
        $result=$data->updatepassword($username,$password);
	    session_destroy();
		if ($result) 
		{
     	    echo '<script type="text/javascript">'; 
            echo 'alert("Password Updated Successfully");'; 
            echo 'window.location.href = "logindata.php";';
            echo '</script>';

		}
		else 
		{
		   
		    echo '<script type="text/javascript">'; 
            echo 'alert("Something Went Wrong,Try Again!!!!");'; 
            echo 'window.location.href = "forgetpassdata.php";';
            echo '</script>';
		 
		}
 
?>