<?php


if(isset($_POST['add'])) 
{
   $conn=mysqli_connect("localhost","id10821837_demo1","Rushikesh@195","id10821837_demo");

   if (mysqli_connect_errno($conn)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else
   {
	   $folder ="../Item_Images/";	
	   $itemname = $_POST['itemname'];
	   $itemprice = $_POST['itemprice'];
	   $filename = $_FILES['itempath']['name'];
	   $filename=$folder.$filename;
	   $sql = "INSERT INTO itemdata (itemname,itempath,itemprice) VALUES ('$itemname', '$filename','$itemprice')";
       $qry = mysqli_query($conn, $sql);

		
	    if ($qry) 
		{
		    $filetmpname = $_FILES['itempath']['tmp_name'];
    	    move_uploaded_file($filetmpname, $folder.$filename);
		    echo '<script type="text/javascript">'; 
            echo 'alert("Item added Successfully!!!!");'; 
            echo 'window.location.href = "add_item.html";';
            echo '</script>';
		}
		else 
		{
		   echo '<script type="text/javascript">'; 
            echo 'alert("Plz try again!!!!");'; 
            echo 'window.location.href = "add_item.html";';
            echo '</script>';
		 
		}

	

		$conn->close();
   }
} 
?>
