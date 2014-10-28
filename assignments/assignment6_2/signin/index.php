<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";	
	include "model.php";

	if($_POST['action'] == "Sign In") {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(checkPassword($username, $password)) {
			$_SESSION['userName'] = $userName;
			header("location: /assingments/assingment6_2/home_page/");
		}
	}

	include 'view.php';