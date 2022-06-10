<?php

if(isset($_POST['signup'])){


      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $caddress = $_POST['caddress'];
      $paddress = $_POST['paddress'];
      $oadress = $_POST['oaddress'];
      $phoneno = $_POST['phoneno'];
      $dphoneno = $_POST['dphoneno'];
      // $photo = $_POST['photo'];
      $photo = "ghfgh";
      $preferred_payment = 0;


      include '../database/db.php';

      $sql= "INSERT INTO `customer` (`username`,  `email`,`password`, `phone_number`, `current_address`, `permanent_address`, `office_addresss`, `delivery_phone_no`, `pro_pic`, `prefered_payment`)
      VALUES('$username','$email','$password','$phoneno','$caddress','$paddress','$oadress','$dphoneno','$photo','$preferred_payment') ";

      
      $result = $conn->query($sql);

      // var_dump($result);
      // die();

        if ($result) {

          // header('location : ./login.php');
          header("location: ./login.php");
        } 
        else {
          echo "0 results";
        }
}
else{



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


     <!-- Login Form Container -->
     <div class="login-form-container">

        <!-- <i class="fas fa-times" id="form-close"></i> -->
        
        <form action="" method="post">

            <h3>Sign Up </h3>
            <input type="text" name="username" id="" class="box" placeholder="Enter your username">
            <input type="email" name="email" id="" class="box" placeholder="Enter your email">
            <input type="password" name="pass" id="" class="box" placeholder="Enter your password">           
            <input type="text" name="caddress" id="" class="box" placeholder="Enter your current address">
            <input type="text" name="paddress" id="" class="box" placeholder="Enter your permanent address">
            <input type="text" name="oaddress" id="" class="box" placeholder="Enter your office address">
            <input type="text" name="phoneno" id="" class="box" placeholder="Enter your phone number">
            <input type="text" name="dphoneno" id="" class="box" placeholder="Enter your delivery phone number">
            <label for="file">Upload Your  Photo</label>
            <input type="file" name="photo" id="">
            <input type="submit" value="Signup now" class="btn" name="signup">
            <span class="lgaddress">Click Here To <a href="login.php">Login</a></span>
           
            
            
          
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