<?php
   
	    session_start();
        require_once('../shoping/php/CreateDb.php');
        $data=new CreateDb("id10821837_demo","test");
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   
        
        $result=$data->checkuser($username,$password);
	   if($result)
	   {
	        $row = mysqli_fetch_array($result);
	 	    $_SESSION['login']=$row[1];
	 	    header("location:../shoping/index.php");
          
	   }
		else{
		     echo '<script type="text/javascript">'; 
            echo 'alert("Invalid Credentials!!!!");'; 
            echo 'window.location.href = "logindata.php";';
            echo '</script>';
		}
?>