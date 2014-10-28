<?php
session_start();
	if(!$_SESSION['userName']) {
		header('Location: /assignments/assignment6_2/signin/');
		exit;
	}
	if($_POST['action'] = "Sign Out") {
		session_destroy();
		header('Location: /assignments/assignment6_2/signin/');
		exit;
	}

	include "view.php";
	exit;
