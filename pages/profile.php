<?php 

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];

    include '../database/db.php';
    $cust_id = $user_id; 
    

    // Latest Product finding
    $sql = "SELECT * FROM customer WHERE id='$cust_id'";
    $result = $conn->query($sql);
    // $products = array();

    // var_dump($result);
    // die();

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $cust_username = $row['username'];
            $cust_email = $row['email'];
            $cust_password = $row['password'];
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
<?php 
 
 include '../database/db.php';
 ?>
 <!-- Header Section -->
<?php 
    include 'header.php';
?>
<!-- Profile Section -->
<section class="cust_profile">
    <h2>Customer Profile <?php echo $user_id; ?></h2>
    
    <table class="cust_details">     
        <tr class="th-heading">
        <th>Username</th>   <td><?php echo $cust_username; ?></td> 
        </tr> 
        <tr class="th-heading">
            <th>Email</th>  <td><?php echo  $cust_email; ?></td>
        </tr>  
        <tr class="th-heading">
            <th>Password</th>  <td><?php echo  $cust_password; ?></td>
        </tr> 
        <tr class="th-heading">
            <th>Phone Number</th>  <td><?php echo  $cust_phone_number; ?></td>

        </tr> 
        <tr class="th-heading">
        <th>Current Address</th>  <td><?php echo  $cust_caddress; ?>.</td>
        </tr> 
        <tr class="th-heading">
         <th>Permanent Address</th> <td><?php echo  $cust_paddress; ?></td>
        </tr> 
        <tr class="th-heading">
            <th>Office Address</th> <td><?php echo  $cust_oaddress; ?></td>
        </tr> 
        <tr class="th-heading">
            <th>Delivery Phone Number</th>  <td><?php echo  $cust_delivery_phoneno; ?></td>
        </tr>   
        <tr class="th-heading">
            <th>Profile Pic</th> <td><?php echo  $cust_pro_pic; ?></td>
        </tr>
       

    </table>
    <a href="profile_update.php" class="btn">Update Profile</a>
</section>
<!-- Footer Section -->
<?php 
    include 'footer.php';
?>
</body>
</html>
<?php 

}
else{
    header("location: ./login.php");
}