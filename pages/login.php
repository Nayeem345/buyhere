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

            <h3>Login</h3>
            <input type="email" name="" id="" class="box" placeholder="enter your email">
            <input type="password" name="" id="" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" name="" id="remember" >
            <label for="remember">remember me</label>
            
            <p>forget password <a href="#">click here </a></p>
            <p>don't have a account <a href="#"> register now</a></p>
        </form>
    </div>
     
     <!-- Footer Section -->
     <?php 
        include 'footer.php';
     ?>
    <script src="..js/script.js"></script>
</body>
</html>