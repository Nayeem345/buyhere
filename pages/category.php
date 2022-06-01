<?php 

 
    // Category finding
    $sql = "SELECT * FROM categories";
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

    //  echo $categories[1]['name'];
    // die();


?>

<section class="category" id="category">
        <h1 class="heading">shop by <span>category</span></h1>
        <div class="box-container">
            <?php 

                for($i=0; $i<count($categories);$i++){

               
            ?>
            <div class="box">
                <h3><?php echo $categories[$i]['name'];?></h3>
                <p>up to 50% off</p>
                <img src="<?php echo $categories[$i]['category_img']  ?>" alt="">
                <a href="pages/category_detail.php?id=<?php echo $categories[$i]['id'] ?>" class="btn">go to category</a>
            </div>
            <?php 
                 }
            ?>
            <!-- <div class="box">
                <h3>Juice</h3>
                <p>up to 33% off</p>
                <img src="img/category-2.png" alt="">
                <a href="" class="btn">shop now</a>
            </div>
            <div class="box">
                <h3>meat</h3>
                <p>up to 20% off</p>
                <img src="img/category-3.png" alt="">
                <a href="" class="btn">shop now</a>
            </div>
            <div class="box">
                <h3>fruits</h3>
                <p>up to 45% off</p>
                <img src="img/category-4.png" alt="">
                <a href="" class="btn">shop now</a>
            </div> -->
        </div>
    </section>
