<?php

    unset($_COOKIE['user_id']); 
    setcookie('user_id', null, -1, '/'); 
    header("location: ../index.php");





?>