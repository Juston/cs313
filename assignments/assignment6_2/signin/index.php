<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";	
	include "model.php";

	if($_POST['action'] == "Sign In") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(checkPassword($username, $password)) {
			$_SESSION['userName'] = $username;
			header("Location: /assignments/assignment6_2/home_page/");
			exit;
		}
		else {
			echo "poop!";
		}
	}

	include 'view.php';
	exit;