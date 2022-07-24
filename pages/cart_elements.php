<?php 
    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
    
        include '../database/db.php';
        $cust_id = $user_id;
                 
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
 
 include '../database/db.php';
 ?>
 <!-- Header Section -->
<?php 
    include 'header.php';
?>
<!-- Profile Section -->
<section class="cart_elements">
    <h2>Cart Elements</h2>
    
    <table class="cust_details">     
       
        </tr>
       

    </table>
    
</section>
<!-- Footer Section -->
<?php 
    include 'footer.php';
?>
</body>
</html>

<?php } ?>