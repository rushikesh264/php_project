<?php
    session_start();
     require_once('../shoping/php/CreateDb.php');
        $data=new CreateDb("id10821837_demo","test");
	    $username=$_SESSION['email'];
        $password=$_POST["p2"];
        
        $result=$data->registeruser($username,$password);
	    session_destroy();
		if ($result) 
		{
     	    echo '<script type="text/javascript">'; 
            echo 'alert("Regristration Done Successfully");'; 
            echo 'window.location.href = "logindata.php";';
            echo '</script>';

		}
		else 
		{
		   
		    echo '<script type="text/javascript">'; 
            echo 'alert("Credentials Already Exist!!!!");'; 
            echo 'window.location.href = "signup.php";';
            echo '</script>';
		 
		}
 
?>