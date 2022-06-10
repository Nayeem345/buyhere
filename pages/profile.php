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
    
    <table class="cust_details">     
        <tr class="th-heading">
        <th>Username</th>   <td>Nayeem</td> 
        </tr> 
        <tr class="th-heading">
            <th>Email</th>  <td>nayeem@gmauil.com</td>
        </tr>  
        <tr class="th-heading">
            <th>Password</th>  <td>******</td>
        </tr> 
        <tr class="th-heading">
            <th>Phone Number</th>  <td>0186014547</td>

        </tr> 
        <tr class="th-heading">
        <th>Current Address</th>  <td>Chhagalnaiya,Feni.</td>
        </tr> 
        <tr class="th-heading">
         <th>Permanent Address</th> <td>Fulgazi,Feni.</td>
        </tr> 
        <tr class="th-heading">
            <th>Office Address</th> <td>Feni Sadar,Feni.</td>
        </tr> 
        <tr class="th-heading">
            <th>Delivery Phone Number</th>  <td>01546441313</td>
        </tr>   
        <tr class="th-heading">
            <th>Profile Pic</th> <td>Photo</td>
        </tr>

    </table>
</section>
<!-- Footer Section -->
<?php 
    include 'footer.php';
?>
</body>
</html>