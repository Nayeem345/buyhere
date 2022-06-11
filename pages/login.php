
   
<?php 
    include './cookie_checker.php';
    check_login();
    if(isset($_POST['login'])){

        $email = $_POST['email']; 
        $password = $_POST['pass'];
        
        
        include '../database/db.php';
        
        
        $sql = "SELECT * FROM customer WHERE email='$email' AND password='$password' ";
        
        $result = $conn->query($sql);
        
          // die(var_dump($sql));
          if ($result->num_rows > 0) {
        
            // output data of each row
        
            while($row = $result->fetch_assoc()) {
              $id = $row['id'];
            }

            cookie_make($id);
            header("location: ../index.php");

          } else {
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
                include 'header.php'
        ?>

     <!-- Login Form Container -->
     <div class="login-form-container">

        <!-- <i class="fas fa-times" id="form-close"></i> -->
        <form action="" method="post">

            <h3>Login</h3>
            <input type="email" name="email" id="" class="box" placeholder="enter your email">
            <input type="password" name="pass" id="" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn" name="login">
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

      <?php
            } 
      ?>
