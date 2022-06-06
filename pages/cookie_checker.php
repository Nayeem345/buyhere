<?php 

// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

function check_login(){
    if(isset($_COOKIE['user_id'])){
        $user_id = $_COOKIE['user_id'];
        header("location: ../index.php?id=".$user_id);
    }
    
}

function cookie_make($cookie_value){
    setcookie('user_id', $cookie_value, time() + (86400 * 30), "/");
}








?>