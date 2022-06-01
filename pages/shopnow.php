<?php 
 
 include '../database/db.php';
 $product_id = $_GET['id'];
 

//  // Latest Product finding
 $sql = "SELECT * FROM product WHERE id='$product_id'";
 $result = $conn->query($sql);
 $products = array();

 // var_dump($result);
 // die();

 if ($result->num_rows > 0) {
 // output data of each row
     while($row = $result->fetch_assoc()) {
         array_push($products,$row);
     }
 } 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
</head>
<body>
    <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <?php 

        for($i=0; $i<count($products);$i++){

            $prod_price = $products[$i]['special_price'];
            $shipping_price = 40;
            $quantity = 1;
            $total = ($prod_price*$quantity) + $shipping_price;


    ?>
        <div class="product">
            <div class="product-image">
            <img src="../<?php echo $products[$i]['product_photo'];?>">
            </div>
            <div class="product-details">
            <div class="product-title"><?php echo $products[$i]['name'];?></div>
            <p class="product-description"><?php echo $products[$i]['description'];?></p>
            </div>
            <div class="product-price"><?php echo $prod_price; ?></div>
            <div class="product-quantity">
            <input type="number" value="<?php  echo $quantity; ?>" min="1">
            </div>
            <!-- <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div> -->
            <div class="product-line-price"><?php echo $prod_price; ?></div>
        </div>
    <?php 
        }
    ?>

  <!-- <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
      <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div> -->

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"><?php echo $prod_price; ?></div>
    </div>
   
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping"><?php echo $shipping_price; ?></div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"><?php echo $total; ?></div>
    </div>
  </div>

  <button class="checkout">Checkout</button>

</div>

<!-- js -->
<script src="../js/cart.js"></script>
</body>
</html>