<?php  


$email = $_POST['email'];
$password = $_POST['pass'];





$sql = "SELECT * FROM customer WHERE email='$email' AND password='$password' ";

$result = $conn->query($sql);

  // die(var_dump($sql));
  if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {
       $id = $row['id'];
       $email_show = $row['email'];
       $pass_show = $row['password'];
       header("location: login.php?id=".$id."&email=".$email_show."&pass=".$pass_show);
    }
  } else {
    echo "0 results";
  }
// }

?>