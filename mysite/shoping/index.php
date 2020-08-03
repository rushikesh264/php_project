<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb();

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if (isset($_SESSION['login']))
    {
        if(isset($_SESSION['cart']))
        {

            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
    			
            }
    
        }
        else
        {
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
            echo $item_array['product_id'];
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            
        }  
    }
    else{
        
            echo '<script type="text/javascript">'; 
            echo 'alert("Please Login First");'; 
            echo 'window.location.href = "../login_Signup/logindata.php";';
            echo '</script>';
    }
    
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="php/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <STYLE>
                    .slideshow-container {
                        margin:auto;
                        margin-top:5px;
                      max-width: 1400px;
                      box-shadow:1px 2px 5px 1px rgba(60,80,255,0.6);
                      position: relative;
                     
                    }
                    
                    /* Hide the images by default */
                   
                    
                    /* Next & previous buttons */
                    .prev, .next {
                        background:white;
                      cursor: pointer;
                      position: absolute;
                      top: 50%;
                      width: auto;
                      margin-top: -22px;
                      padding: 16px;
                      color:black;
                      font-weight: bold;
                      font-size: 18px;
                      transition: 0.6s ease;
                      border-radius: 0 4px 4px 0;
                      user-select: none;
                      box-shadow:1px 1px 1px 1px black;
                    }
                    
                    /* Position the "next button" to the right */
                    .next {
                      right: 0;
                      border-radius: 3px 0 0 3px;
                    }
                    
                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover, .next:hover {
                        color:white;
                      background-color: rgba(0,0,0,0.4);
                    }
                    
                                        .numbertext {
                      color: #f2f2f2;
                      font-size: 12px;
                      padding: 8px 12px;
                      position: absolute;
                      top: 0;
                    }
                    
                    
                    /* Caption text */
                    .text {
                      color:white;
                      background:rgba(0,0,0,0.4);
                      font-size: 19px;
                      padding: 8px 12px;
                      position: absolute;
                      bottom: 8px;
                      font-style:italic;
                      width: 100%;
                      text-align: center;
                      font-style:font: normal 36px 'Cookie', cursive;;
                    }
                    
                    /* Number text (1/3 etc) */
                    .numbertext {
                      color: #f2f2f2;
                      font-size: 12px;
                      padding: 8px 12px;
                      position: absolute;
                      top: 0;
                    }
                    
                    /* The dots/bullets/indicators */
                    .dot {
                      cursor: pointer;
                      height: 15px;
                      width: 15px;
                      margin: 0 2px;
                      background-color: #bbb;
                      border-radius: 50%;
                      display: inline-block;
                      transition: background-color 0.6s ease;
                    }
                    
                    
                    
                    /* Fading animation */
                    .fade {
                      /*-webkit-animation-name: fade;
                      -webkit-animation-duration: 0.5s;
                      animation-name: fade;
                      animation-duration: 2.5s;*/
                      -webkit-animation: slide 0.5s forwards;
                        -webkit-animation-delay: 2s;
                        animation: slide 0.5s forwards;
                        animation-delay: 2s;
                    }
                    
                    @-webkit-keyframes fade {
                      /*from {opacity: .4}
                      to {opacity: 1}*/
                      100% { left: 0; }
                    }
                    
                    @keyframes fade {
                        /*
                      from {opacity: .4}
                      to {opacity: 1}*/
                      100% { left: 0; }
                    }
        
                    .active1, .dot:hover {
                      background-color: #717171;
                    }
                    
                    
        
        </STYLE>
        <script language="javascript">
        
        
            var slideIndex = 1;
            var timer = null;
            showSlides(slideIndex);
            function Redirect() {
               window.location = "../login_Signup/logout.php";
            }
        
            // Next/previous controls
            function plusSlides(n) {
                clearTimeout(timer);
              showSlides(slideIndex += n);
            }
            
            // Thumbnail image controls
            function currentSlide(n) {
                clearTimeout(timer);
                
              showSlides(slideIndex = n);
            }
          
            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
               var dots = document.getElementsByClassName("dot");
               if (n==undefined){n = ++slideIndex}
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++)
            {
                  slides[i].style.display = "none";
              }
             for (i = 0; i < dots.length; i++)
              {
                  dots[i].className = dots[i].className.replace(" active1", "");
              }

             dots[slideIndex-1].className += " active1";
              slides[slideIndex-1].style.display = "block";
              timer = setTimeout(showSlides, 3000);
            }
        </script>
       
   
    
</head>
<body onload="showSlides()">


<?php require_once ("php/header.php"); require_once("php/subheader.php"); ?>
<br>
        <div class="slideshow-container" id="img">
            <div class="mySlides">
                 <div class="numbertext">1 / 3</div>
                <img src="https://wallpapercave.com/wp/wp1866271.jpg" style="width:100%;height:300px;"> 
                 <div class="text">Exciting Offers on Clothes</div>
            </div>
            <div class="mySlides">
                 <div class="numbertext">2 / 3</div>
                <img src="https://wallpapercave.com/wp/wp1866271.jpg" style="width:100%;height:300px;">
                 <div class="text">Exciting Offers on Clothes</div>
            </div>
            <div class="mySlides">
                 <div class="numbertext">3 / 3</div>
                <img src="http://pngimg.com/uploads/laptop/laptop_PNG5930.png"  style="width:30%;height:300px;">
                 <div class="text">Exciting Offers on Clothes</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
              
             
        </div>
        <br>  
        <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
        </div>
   

<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result))
				{
				
                     component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>
        </div>
</div>

<?php
    require_once("php/footer.php");
 ?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
