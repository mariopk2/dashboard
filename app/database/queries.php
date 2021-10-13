<?php
    session_start();
    include 'mysqli.php';
    $SelectUser = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `user_id` = ".$_SESSION['user_id']."");
    $viewUser = mysqli_fetch_array($SelectUser);
?>