<?php
	include 'database/mysqli.php';
	session_start();
	date_default_timezone_set('Europe/Sofia');

	unset($_SESSION['user_id']);
	header('Location: sign-in');
?>
