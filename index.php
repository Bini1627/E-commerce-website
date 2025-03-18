<?php
require_once 'connection.php';
  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);
  $sql_cart = "SELECT * FROM cart";
  $all_cart = $conn->query($sql_cart);
?>

<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bshop Ecommerce System</title>
    <link type="text/css" rel="stylesheet" href="CSS/home-style.css">
    <link type="text/css" rel="stylesheet" href="CSS/cart.css">
    <link type="text/css" rel="stylesheet" href="CSS/style1.css">
    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" >
    <link rel="shortcut icon" type="image/png" href="Resource-image/icon/Bshop.jpg">
 </head>
 <body>
 
     <!----- start work space ------>
     <div class="work-space">
     
     <!----- start navbar ------>
         <div class="navbar">
              <div class="logo">
                  <a href=""> <img src="Resource-image/logo/Bshop.jpg" height="40" alt=""></a>
              </div>
                <div class="search-cart">
                 <div class="shopping">
                  <span class="cart" ><a href="login.php"><img src="Resource-image/icon/cart.png" height="25"></a></span>
                  <span id="cartd" >0</span>
                  </div>
                 
              </div>
            </div>
         <!----- End navbar ------>
         <!--start menu bar-->
         <nav class="nav">
      <li  class=" navOpenBtn" >&#9776</li>
      <ul class="nav-links">
        <li class=" navCloseBtn">&#215</i>
                  <li><a href="index.php">Home</a></li>     
                  <li><a href="About.html">About us</a></li> 
                  <li><a href="Contact.html">Contact</a></li> 
                  <li><a href="Login.php">LOGIN</a>
      </ul>
      <i  id="searchIcon"></i>
      <div class="search-box">
        
      </div>
    </nav>
         <!----- End menu bar ------>
         
         <!----- start slider ------>
         <div class="slider">
             <div class="slider-left"> 
                 <b>GET UP TO 30% - OFF</b>
                  <p id="new"><b> NEW ARRIVAL</b></p>
                 <a href="#na"  id="shop">Shop Now</a>
             </div>
            </div>
            <!--end slider-->
            <!--start content-->
            <div class="content">
                <div class="right-img">
                 <div class="arrive"><h1>BEST FASIONS FOR YOU</h1>
                    <h2>NEW ARRIVAL </h2>
                 </div>
                    <img src="Product-image/right-side-banner-3.jpg" height="700" width="530">
                 <div class="img-none">
                    <img src="Product-image/right-side-banner-2.jpg"  height="700" width="530" >
                 </div>
                </div>
                
                <div class="all-catagories"><h2>All CATAGORIES</h2></div>
                <div class="listcontent">
                     <div class="list">
                        
                  
                     <?php
                      while($row = mysqli_fetch_assoc($all_product)){
                     ?>
                
                       <div class="item">
          
                        <img src="Product-image/<?php echo $row["product_image"]; ?>">
            <div class="title"><?php echo $row["product_name"]; ?></div>
            <div class="descrip"><?php echo $row["brand"]; ?></div>
            <div class="price">Price:&nbsp<?php echo $row["price"]; ?>&nbsp birr</div>
            <div style=" margin-left: 170px" class="detail"><a href="product-detail.php?id=<?php echo $row["product_id"]; ?>"><i style="font-size:20px; color:orange;" class="fa fa-eye"></i></a></div>
            <a id="addc" href="login.php">Add To Card</a>
                        </div>
                        <?php
                        }
                        ?>
                        </div>
                        </div>
                
               
               <div class="newariv">
                 <!--NEW ARRIVAL--> 
                     
                 <div class="newpic">
                    <img id="na" src="Product-image/new-arrival/new-arrival-men.jpg" style="width:100%;" >
                    <img class="newres" src="Product-image/new-arrival/new-arrival-women.jpg" >
                    <img class="newres" src="Product-image/new-arrival/future-men.jpg" height="790" width="600" style="float: right;">
                 </div>
                      </div>
                      <!--end Arival-->
                       <!------ Start Footer ------->
                <div class="footer">
                    <div class="footer-parts">
                        <div class="footer-parts-h4">About Us</div>
                        <div class="about-footer">Welcome to BSHOP E-commerce System! We are a dedicated team of ecommerce enthusiasts passionate about providing high-quality products and exceptional customer service. We believe in creating an enjoyable and seamless online shopping experience for all our customers.

                        </div>
                    </div>
                    <div class="footer-parts">
                        <div class="footer-parts-h4">Extra Links</div>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="footer-parts">
                        <div class="footer-parts-h4">Extra Links</div>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-parts">
                        <div class="footer-parts-h4">Social Links</div><br />
                        <div style="padding-left:20px; font-size:22px;">
                            <a href="https://www.facebook.com/BSHOP/" target="_blank"><i class="fa fa-facebook"></i></a> 
                            <a href="https://www.linkedin.com/in/BSHOP/" target="_blank"><i class="fa fa-linkedin"></i></a> 
                            <a href="https://twitter.com/BSHOP" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/BSHOP" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    
                    </div>
                    
<!------ End Footer ------->  
            </div>
            <!--end content-->
 </div> 
                            
        <script src="Javascript/script1.js"></script>
 
 </body>
</html>