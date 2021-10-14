<?php
    session_start();
    include 'mysqli.php';
    //COMMON
    $SelectUser = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `user_id` = ".$_SESSION['user_id']."");
    $viewUser = mysqli_fetch_array($SelectUser);
    $IndexCountClients = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM clients WHERE client_deleted = '0'"));

    //CLIENTS
    $SelectClients = mysqli_query($mysqli,"SELECT * FROM clients c, users u WHERE c.client_account_manager = u.user_id AND c.client_deleted = '0' ORDER BY c.client_id DESC");
    $SelectAccountManagers = mysqli_query($mysqli,"SELECT * FROM users ORDER BY user_firstname ASC");

    $ViewClientSelect = mysqli_query($mysqli,"SELECT * FROM clients c, users u WHERE c.client_id = ".$_GET['id']." AND c.client_account_manager = u.user_id");
    $viewClientSelectArray = mysqli_fetch_array($ViewClientSelect);
?>