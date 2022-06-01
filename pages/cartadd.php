<?php 

    include '../database/db.php';
    $product_id = $_POST['prid'];
    $user_id = $_POST['user'];

    $sql2 = "SELECT * FROM cart WHERE user_id='$user_id' AND added_product='$product_id'";
    $result2 = $conn->query($sql2);

    if($result2->num_rows>0){
        echo 0;
        die();
    }

    $sql = "INSERT INTO cart (added_product, user_id) VALUES ('$product_id', '$user_id')";

    if ($conn->query($sql) === TRUE) {

        echo 1;

    } else {

        echo 2;

    }








?>