<?php 



include '../database/db.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
$caddress = $_POST['caddress'];
$paddress = $_POST['paddress'];
$oadress = $_POST['oadress'];
$phoneno = $_POST['phoneno'];
$dphoneno = $_POST['dphoneno'];
$photo = $_POST['photo'];
// else{
  
  $sql = "INSERT INTO  customer(username,password,email,phone_number,current_address,permanent_address,office_addresss,delivery_phone_no,pro_pic,prefered_payment) 
  VALUES('$username','$email','$password','$caddress','$paddress','$oadress','$phoneno','$dphoneno','$photo') ";
  $result = $conn->query($sql);

//   die(var_dump($sql));

 
  if ($result) {

    header("location: signup.php");
  } else {
    echo "0 results";
  }



// }

?>