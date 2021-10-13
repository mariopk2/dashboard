<?php
    include 'database/mysqli.php';
    date_default_timezone_set('Europe/Sofia');
	session_start();
    if($_POST['login']){
        $email_address = $_POST['email_address'];
        $password = hash('sha256', $_POST['password']);
        
        $checkExistUser = mysqli_query($mysqli,"SELECT * FROM users WHERE user_email = '".$email_address."' AND user_password = '".$password."' AND user_active = 1");
        $countExistUser = mysqli_num_rows($checkExistUser);
        if($countExistUser > 0){
            session_regenerate_id();
			$member = mysqli_fetch_assoc($checkExistUser);
			$_SESSION['user_id'] = $member['user_id'];
			session_write_close();
			$ip = $_SERVER['REMOTE_ADDR'];
			$date_log = date('Y-m-d H:i:s');
			mysqli_query($mysqli,"UPDATE users SET updated_at = '$date_log'");
			header("location: index");
			exit();
        }else{
            header("location: sign-in?message=error");
			exit();
        }
    }
?> 