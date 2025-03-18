<?php

$user="root";
$password="";
$db='bshop';
$conn=new mysqli("localhost", $user,$password,$db);

  $id="";
  if(isset($_GET["id"]))
  {
    $id=$_GET["id"];
  }
  $sql = "SELECT * FROM product where product_id=$id";
  $all_product = $conn->query($sql);
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/product-ditail.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" >
    <style>
                /************ Start Footer *****************/
                .footer{ width:100%; float:left; margin-top:40px; background:rgb(6, 206, 206); height: fit-content; }
                .footer-parts{ width:300px; float:left; padding:0px 10px; }
                .footer-parts-h4{ font-size:18px; padding:15px 10px 0px; color:#d10707; }
                .footer-parts ul{list-style:none; padding:0px;}
                .footer-parts ul li{list-style:none; font-size:12px; padding:5px; margin:5px 0px; font-weight:bold;}
                .footer-parts ul li a{padding:8px 10px; margin:2px 0px; text-decoration:none; color:#FFF;}
                .footer-parts ul li a:hover{color:#000;}
                .copyrights{ width:100%; font-size:12px; background:#09527c; float:left; padding:15px 30px 15px 30px; color:#FFF; }
                .copyrights-left{ width:940px; float:left;}
                .copyrights-right{ width:300px; float:right; text-align:right; height: 10px; }
                .fa{ color:#FFF;}
                .about-footer{ padding:10px 10px; width:280px; color:#FFF; float:left; text-align:justify;}
                .form-2{ height:35px; width:200px; padding:0px 10px; float:left; border:1px solid #df001a; border-radius:2px 0px 0px 0px;}
                /*************** End Footer ***********/
</style>
  </head>
  <body>
          
          <div class = "card-wrapper" style="width: 100%; height:100%; display:block; " >
         <div  style="margin-left:-130px; margin-top:10px; background-color:rgb(6, 206, 206); text-align:center; width:1355px; "> <h1 >Product Detail</h1></div>
          <?php
          if($all_product->num_rows > 0)
          {
            while($row = $all_product->fetch_assoc())
          {
          ?>
    
       
              <div  style=" position:relative;border-radius:10px; margin-left:-90px;margin-top:50px; width:500px; box-shadow:0 6px 10px 0 rgba(0, 0, 0, 0.336), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.3) !important;">
                  <img height="400px" width="100%" style="padding:20px;"  src="Product-image/<?php echo $row["product_image"]; ?>">
              </div>
              
                      
              <h2>
              <div class="dit" style="float:right; margin-top:-400px; margin-right:200px;">
                    <h2>About This Product: </h2>
                   <div class="title">Product Name:&nbsp; &nbsp;<?php echo $row["product_name"]; ?></div>
                   <div class="product-rating"style=" color:yellow;"  >
                     <label  style="color:black; "> Reting:</label>
                          <i style=" color:yellow;"  class = "fa fa-star"></i>
                          <i style=" color:yellow;"  class = "fa fa-star"></i>
                          <i style=" color:yellow;"  class = "fa fa-star"></i>
                          <i style=" color:yellow;"  class = "fa fa-star"></i>
                          <i style=" color:yellow;"  class = "fa fa-star"></i>
                     </div>
                     <div class = "product-detail">
                          <ul>
                            <li>Detail: <span><?php echo $row["description"]; ?></span></li>
                            <li>Color: <span><?php echo $row["color"]; ?></span></li>
                            <li>Shipping Area: <span>All over the world</span></li>
                            <li>Shipping Fee: <span>Free</span></li>
                          </ul>
                      </div>
                      <div class = "social-links" >
                        <p>Share At: </p>
                        <a href = "#">
                          <i style=" color:red;"  class = "fa fa-facebook-f"></i>
                        </a>
                        <a href = "#">
                          <i style=" color:red;"  class = "fa fa-twitter"></i>
                        </a>
                        <a href = "#">
                          <i style=" color:red;"  class = "fa fa-instagram"></i>
                        </a>
                        <a href = "#">
                          <i style=" color:red;"  class = "fa fa-whatsapp"></i>
                        </a>
                        <a href = "#">
                          <i style=" color:red;"  class = "fa fa-pinterest"></i>
                        </a>
                      </div>
                      <div><a href="index.php" style="background-color: rgba(54, 167, 101, 1); text-decoration: none;border-radius: 10px;color: #ffffff;">Back  To Store</a></div>
              </div>
              </h2>
              <?php
          }
        }
          ?>
          </div>
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
                            <a href="https://www.facebook.com/BSHOP/" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp; &nbsp;
                            <a href="https://www.linkedin.com/in/BSHOP/" target="_blank"><i class="fa fa-linkedin"></i></a> &nbsp; &nbsp;
                            <a href="https://twitter.com/BSHOP" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; &nbsp;
                            <a href="https://plus.google.com/BSHOP" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    
                    </div>
                   
<!------ End Footer ------->
  </body>
</html>