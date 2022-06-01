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
                include 'header.php'
        ?>


     <!-- Login Form Container -->
     <div class="login-form-container">

        <!-- <i class="fas fa-times" id="form-close"></i> -->
        <form action="" method="">

            <h3>Sign Up </h3>
            <input type="email" name="" id="" class="box" placeholder="Enter your email">
            <input type="password" name="" id="" class="box" placeholder="Enter your password">
            <input type="text" name="" id="" class="box" placeholder="Enter your username">
            
            <input type="text" name="" id="" class="box" placeholder="Enter your current address">
            <input type="text" name="" id="" class="box" placeholder="Enter your permanent address">
            <input type="text" name="" id="" class="box" placeholder="Enter your office address">
            <input type="text" name="" id="" class="box" placeholder="Enter your phone number">
            <input type="text" name="" id="" class="box" placeholder="Enter your delivery phone number">
            <label for="file">Upload Your  Photo</label>
            <input type="file" name="" id="">
            <input type="submit" value="Signup now" class="btn">
           
            
            
          
        </form>
    </div>
     
     <!-- Footer Section -->
     <?php 
        include 'footer.php';
     ?>
 

    <script src="..js/script.js"></script>
</body>
</html>