<?php
    if(empty($_SESSION['user_id'])){
        header("Location: sign-in");
        die();
    }
?>