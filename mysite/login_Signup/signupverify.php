<?php
     require_once('../shoping/php/CreateDb.php');
        $data=new CreateDb("id10821837_demo","test");
	    $username=$_POST["email"];
        $password=$_POST["p2"];
        
        $result=$data->registeruser($username,$password);
	   
		if ($result) 
		{
            header("location:logindata.php");
		}
		else 
		{
		    echo '<script type="text/javascript">'; 
            echo 'alert("Credentials Already Exist!!!!");'; 
            echo 'window.location.href = "signup.php";';
            echo '</script>';
		 
		}
 
?>