<?php

require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);
$sql_cart = "SELECT * FROM cart";
$result = $conn->query($sql_cart);
$totalprice=0;
  while($row=$result->fetch_assoc()){
	$totalprice+=$row['product_price'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/cartnew.css">
    <title>In cart products</title>
</head>
<body>
    

    <main>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
        <hr>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM product WHERE product_id=".$row_cart["product_id"];
              $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="Product-image/<?php echo $row["product_image"]; ?>" alt="">
            </div>

            <div class="caption">
                <p class="rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                <p class="product_name"><?php echo $row["product_name"]; ?></p>
                <p class="price"><b><?php echo $row["price"]; ?>&nbsp;birr</b></p>
                <p class="discount"><b><?php echo $row["color"]; ?></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove from Cart</button>
            </div>
        </div>
        <?php

          }
        }
       ?>
       <div><h2 style="margin-bottom:30px;background-color:yellow; width:fit-content; font-size:20px;float:right;">Total Price: &nbsp<?php echo $totalprice; ?>&nbsp birr</h2></div>
       <div><a href="home.php" style="background-color: rgba(54, 167, 101, 1); text-decoration: none;border-radius: 10px;color: #ffffff; font-size:30px; ">Back  To Store</a></div>
       <div><a href="checkout.php" style="float:right; background-color:tomato; text-decoration: none;border-radius: 10px;color: #ffffff; font-size:30px; margin-top:-40px;">Checkout</a></div>
        
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","connection.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
</body>
</html>