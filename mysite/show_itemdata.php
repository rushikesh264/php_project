
 <?php
 require_once ('shoping/index.php');
     $con=mysqli_connect("localhost","id10821837_demo1","Rushikesh@195","id10821837_demo");
?>
<html>
    <head>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <style>
       *{
           font-family:"Titillium web" ,sans-serif;
       }
       .product{
           border:1px solid #eaeaec;
           margin:-1px 19px,3px,-1px;padding:10px;
           text-align:center;
           background-color:#efefef;
       }
          

       </style>
    </head>
    <body>

        
         <?php
         /*
         
         $con=mysqli_connect("localhost","id10821837_demo1","Rushikesh@195","id10821837_demo");

           if (mysqli_connect_errno($con)) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
           else
           {
	
            	   $result = mysqli_query($con,"SELECT id,itemname,itempath,itemprice FROM itemdata" );*/
                /*$row = mysqli_fetch_array($result);
            	   $data = $row[0];
                   $sql="select id,name,cost,include,description from packages";
                   $result=$con->query($sql);*/
                /*if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $img=strval(substr($row["itempath"],3));
                        echo "<table>";
                        echo "<tr><img src=$img></tr>";
                        echo"<tr><table><tr><td>ID</td><td>".$row["id"]."</td></tr>
                            <tr><td>NAME</td><td>".$row["itemname"]."</td></tr>
                            <tr><td>COST</td><td>".$row["itemprice"]."</td></tr>
                            </table></tr>";
                        echo"</table>";
                    }
                }
                else{
                    echo"0 result found";
                }
           }*/
        ?>
        <div class="container">
            <?php
             $result = mysqli_query($con,"SELECT id,itemname,itempath,itemprice FROM itemdata" );
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                             $img=strval(substr($row["itempath"],3));
                                                                        ?>
                         <div class="col-md-3">
                            <div class="product">
                                
                                <img src="<?php echo $img;?>"/>
                                <h5 class="text-info"><?php echo $row["itemname"] ?></h5>
                                <h5 class="text-danger"><?php echo $row["itemprice"] ?></h5>
                            </div>
                         </div>
                           
                            
        </div>
        <?php
        }}
        ?>
    </body>
</html>