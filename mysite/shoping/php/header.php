


<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #56baed;box-shadow:0 2px 3px -1px black;">
        <a href="index.php" class="navbar-brand" >
                    <h3 class="px-5" style="font-family:century gothic;font-size:32px;font-weight:bold">
                        <img src="supermarket.png" width="30" height="30"> Quick<span style="color:red;">shop</span>
                    </h3>
        </a>
         <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
             <div class="navbar-nav">
                 
                <form action="..\login_Signup\logindata.php" method="POST" style="margin-top:7px">
                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo"<button type=\"submit\" class=\"btn btn-success\" name=\"login\">roshan</button>";
        echo"<button type=\"button\" class=\"btn btn-warning\" name=\"logout\" onclick = \"Redirect();\" style=\"margin-left:5px;\">logout</button >";
                       
                    }
                    else
                    {
                        echo"<button type=\"submit\" class=\"btn btn-light\"name=\"login\">Login</button>";
                    }
                ?>

              </form>
             
           
             
                <a href="cart.php" class="nav-item nav-link active" >
                    <h5 class="px-5 cart">
                        <img src="cart.png" width="28" height="28"> Cart
                        <?php
                                if (isset($_SESSION['cart']))
                                {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\" >$count</span>";
                                }
                                else
                                {
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }
                        ?>
                    </h5>
                </a>
            </div>
        
           
        </div>
    </nav>
    
</header>






