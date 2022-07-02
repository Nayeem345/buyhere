<?php 

if(isset($_COOKIE['user_id'])){
    
    $user_id = $_COOKIE['user_id'];
    

    include '../database/db.php';
    $cust_id = $user_id; 


    if(isset($_POST['update'])){

            $cust_username = $_POST['username'];
            $cust_email = $_POST['email'];
            $cust_password = $_POST['pass'];
            $cust_phone_number = $_POST['phoneno'];
            $cust_caddress = $_POST['caddress'];
            $cust_paddress= $_POST['paddress'];
            $cust_oaddress = $_POST['oaddress'];
            $cust_delivery_phoneno = $_POST['dphoneno'];
            $cust_pro_pic = $_POST['photo'];
           


        $update_sql= "UPDATE customer SET  username='$cust_username', password='$cust_password', email = '$cust_email',
         phone_number='$cust_phone_number',current_address='$cust_caddress', permanent_address='$cust_paddress', office_addresss='$cust_oaddress', delivery_phone_no='$cust_delivery_phoneno',
         pro_pic='$cust_pro_pic'  WHERE id='$cust_id' " ; 

        $update_status = $conn->query($update_sql);

        if($update_status===TRUE){
           
        }
        else{
            
        }

        //   var_dump($update_sql);
        //   die();
    }






   
    // Latest Product finding
    $sql = "SELECT * FROM customer WHERE id='$cust_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $cust_username = $row['username'];
            $cust_email = $row['email'];
            $cust_password =  $row['password'];
            $cust_phone_number = $row['phone_number'];
            $cust_caddress = $row['current_address'];
            $cust_paddress= $row['permanent_address'];
            $cust_oaddress = $row['office_addresss'];
            $cust_delivery_phoneno = $row['delivery_phone_no'];
            $cust_pro_pic = $row['pro_pic'];
           
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
    <!-- Header Section -->
        <?php 
                include 'header.php';
        ?>
        <!-- Singup Form Container -->
        <div class="login-form-container">

        <!-- <i class="fas fa-times" id="form-close"></i> -->

        <form action="" method="post">

            <h3>Update Your Profile </h3>
            <input type="text" name="username" value="<?php echo  $cust_username; ?>" id="" class="box" placeholder="Enter your username">
            <input type="email" name="email" value="<?php echo  $cust_email; ?>" id="" class="box" placeholder="Enter your email">
            <input type="password" name="pass" value="<?php echo  $cust_password; ?>" id="" class="box" placeholder="Enter your password">           
            <input type="text" name="caddress" value="<?php echo  $cust_caddress;  ?>" id="" class="box" placeholder="Enter your current address">
            <input type="text" name="paddress" value="<?php echo $cust_paddress; ?>" id="" class="box" placeholder="Enter your permanent address">
            <input type="text" name="oaddress" value="<?php echo  $cust_oaddress; ?>" id="" class="box" placeholder="Enter your office address">
            <input type="text" name="phoneno" value="<?php echo  $cust_phone_number; ?>" id="" class="box" placeholder="Enter your phone number">
            <input type="text" name="dphoneno" value="<?php echo  $cust_delivery_phoneno; ?>" id="" class="box" placeholder="Enter your delivery phone number">
            <label for="file">Upload Your  Photo</label>
            <input type="file" name="photo" value="<?php echo  $cust_pro_pic; ?>" id="">
            <input type="submit" value="Update" class="btn" name="update">
              
        </form>
        </div>

         <!-- Footer Section -->
     <?php 
        include 'footer.php';
     ?>
 

    <script src="..js/script.js"></script>
</body>
</html>
<?php 

}

?>
