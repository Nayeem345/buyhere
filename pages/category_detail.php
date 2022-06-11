<?php 

    include '../database/db.php';
    $category_id = $_GET['id']; 
    

    // Latest Product finding
    $sql = "SELECT * FROM product WHERE category_id='$category_id'";
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
    else {
        echo "0 results";
    }

    // Category finding
    $sql = "SELECT * FROM categories WHERE id='$category_id'";
    $result = $conn->query($sql);
    $categories = array();

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($categories,$row);
        }
    } 
    else {
        echo "0 results";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
        <?php 

        include 'header.php';

        ?>

   
   
    <!-- Product Section -->
    <section class="product" id="product">
        <h1 class="heading"><?php echo $categories[0]['name'];?></h1>

        <div class="box-container">
            <?php 

                for($i=0; $i<count($products);$i++){


            ?>
            <div class="box">
                <span class="discount">-33%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="../<?php echo $products[$i]['product_photo'];?>" alt="">
                <h3><?php echo $products[$i]['name']; ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price"><?php echo $products[$i]['special_price'];?>TK<span><?php echo $products[$i]['price'];?>TK</span></div>
                <div class="quantity">
                    <!-- <span>quantity </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span>/kg</span> -->
                </div>
                <a class="btn cartadd" data-prid="<?php echo $products[$i]['id'];?>">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>
            <?php } ?>
           

        </div>
</section>

   
    
    <!-- Footer Section -->
        <?php 
            include 'footer.php';
        ?>



    <!-- Custom Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="../js/script.js"></script> -->
    <script src="../js/cartadd.js"></script>

</body>
</html>
