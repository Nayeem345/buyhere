<?php 

// include '../database/db.php';
    
    
    $latest_date_identifier = '2022-05-16 16:16:00';
   



    // Latest Product finding
    $sql = "SELECT * FROM product WHERE timistamp>'$latest_date_identifier' LIMIT 50";
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

    


?>

<section class="product" id="product">
        <h1 class="heading">latest <span>products</span></h1>

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
                <img src="<?php echo $products[$i]['product_photo'];?>" alt="">
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
                <a class=" cartadd btn" data-prid="<?php echo $products[$i]['id'];?>">add to cart</a>
                <a href="pages/shopnow.php?id=<?php echo $products[$i]['id'] ?>" class="btn">shop now</a>
            </div>
            <?php } ?>
            <!-- <div class="box">
                <span class="discount">-37%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-2.png" alt="">
                <h3>organic tomato</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-20%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-3.png" alt="">
                <h3>organic orange</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>
            <div class="box">
                <span class="discount">-13%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-4.png" alt="">
                <h3>natural milk</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-33%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-5.png" alt="">
                <h3>organic grapes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    <span>quantity</span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /kg</span>
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-23%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-6.png" alt="">
                <h3>natural almonts</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    <span>quantity</span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /kg</span>
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-17%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-7.png" alt="">
                <h3>organic apple</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    <span>quantity</span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /kg</span>
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-39%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-8.png" alt="">
                <h3>natural butter</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    <span>quantity</span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /kg</span>
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-eye"></a>
                </div>
                <img src="img/product-9.png" alt="">
                <h3>organic carrot</h3>
                <div class="stars">
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star-half-alt"></i> 
                </div>
                <div class="price">$10.50 <span>13.20</span></div>
                <div class="quantity">
                    <span>quantity</span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /kg</span>
                </div>
                <a href="" class="btn">add to cart</a>
                <a href="" class="btn">shop now</a>
            </div> -->

        </div>
</section>
