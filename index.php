<?php 

    include 'database/db.php';
    $user_id = 1;


?>
<!-- hello there -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- header h -->
    <?php 

        include 'pages/header.php';

    ?>

   
    <!-- Banner Section -->
    
    <?php 
        include 'pages/banner.php';
    ?>
    
    <!-- Category Section -->
    <?php 
        include 'pages/category.php';
    ?>
    <!-- Product Section -->
    <?php 
        include 'pages/product.php';
    ?>

    <!-- Deal Section -->
    <?php 
        include 'pages/deal.php';
    ?>
    <!-- Contact Section -->
    <?php 
        include 'pages/contact.php';
    ?>
    <!-- NewsLetter Section -->
    <?php 
        include 'pages/newsletter.php';
    ?>
    <!-- Footer Section -->
    
    <?php 
        include 'pages/footer.php';
    ?>


    <!-- Custom Js -->
    <!-- Custom Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="../js/script.js"></script> -->
    <script src="./js/cartadd_index.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
