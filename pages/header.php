<?php 

    
    
    $sql = "SELECT * FROM cart WHERE user_id='$user_id'";
    $result = $conn->query($sql);
    
    $total_in_cart = $result->num_rows;
    // $total_in_cart = 0;
    


?>
<header>
       <div class="header-1">
       <a href="../index.php" class="logo"><i class="fas fa-shopping-basket"></i>Buyhere</a>
            <form class="search-box-container">
                <input type="search" id="search-box" placeholder="search here....">
                <label for="search-box" class="fas fa-search"></label>
            </form>
       </div>

       <div class="header-2">
           <div id="menu-bar" class="fas fa-bars"></div>
           
        <nav class="navbar">
       
            <a href="index.php">home</a>
            <!-- <a href="pages/category_detail.php">category</a>
            <a href="pages/product.php">product</a> -->
            <!-- <a href="pages/deal.php">deal</a>
            <a href="pages/contact">contact</a> -->
            <!-- <a href="pages/login.php">Logout</a> -->
        </nav>  
        <div class="icons">
            <a href="" class="fas fa-shopping-cart"></a>
            
            <a href="" > 
                <span class="fas fa-heart icon"></span>
                <span class="badge_icon cartbadge" style='<?php 

                    if($total_in_cart>0){
                        echo "display:flex;";
                    }
                    else{
                        echo "display:none;";
                    }
                
                
                ?>'> <?php echo $total_in_cart; ?></span> 
            </a>
            
            <a href=""  class="fas fa-user-circle"></a>
        </div>  
            
       </div>
    </header>
    <div class="profilemenu">
        <div class="profile">
            <ul>
                <li><a href="">See Profile</a></li>
                <li><a href="">See Orders</a></li>
                <li><a href="">logout</a></li>
            </ul>
        </div>
    </div>
    <div class="cartmenu">
        <div class="cartdiv">
            <ul>
                <li><a href="">First one</a></li>
                <li><a href="">See Orders</a></li>
            </ul>
        </div>
    </div>