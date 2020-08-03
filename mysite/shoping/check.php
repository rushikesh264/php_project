<html>
    <head>
       
        <STYLE>
                    .slideshow-container {
                        margin:auto;
                        margin-top:5px;
                      max-width: 1400px;
                      box-shadow:1px 2px 5px 1px rgba(60,80,255,0.6);
                      position: relative;
                     
                    }
                    
                    /* Hide the images by default */
                    .mySlides {
                      display: none;
                    }
                    
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
                    
                    
                    
                    /* Number text (1/3 etc) */
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
                    
                    .active, .dot:hover {
                      background-color: #717171;
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
        
        </STYLE>
        <script language="javascript">
        
            var slideIndex = 1;
            var timer = null;
            showSlides(slideIndex);
            
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
                  dots[i].className = dots[i].className.replace(" active", "");
              }

             dots[slideIndex-1].className += " active";
              slides[slideIndex-1].style.display = "block";
              timer = setTimeout(showSlides, 3000);
            }
        </script>
       
   
    
    </head>
    <body onload="showSlides()">
        
        <div class="slideshow-container">
            
              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="https://wallpapercave.com/wp/wp1866271.jpg" style="width:100%;height:300px;">
                 <div class="text">Exciting Offers on Clothes</div>
               
              </div>
            
              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="https://www.gizbot.com/images/2020-03/samsung-galaxy-m31_158315189530.jpg" style="width:100%;height:300px;">
                <div class="text">Samsung M31 Sell on 25th DEC</div>
              </div>
            
              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="https://www.gizbot.com/images/2020-03/samsung-galaxy-m31_158315189680.jpg" style="width:100%;height:300px;">
                 <div class="text">Samsung M31 Sell on 25th DEC</div>
              </div>
            
              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            
          <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
          </div>

        
    </body>
    
</html>