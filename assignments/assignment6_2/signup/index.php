<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";	
	include "model.php";

	if($_POST['action'] == "Join") {
		$userName = $_POST['userName'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		if($password1 != $password2) {
			$error['passwordMatch'] = "Sorry, but the passwords did not match. I bring this up, because it is your fault.";
			include 'view.php';
			exit
		}
		if(checkUser($userName)) {
			$error['userName'] = "Sorry, but this Username already exists. Pitty, I know.";
			include 'view.php';
			exit
		}
		$inserted = insertNewUser($userName, $password1);
		if($inserted) {
			header("Location: /assignments/assignment6_2/signin/");
			exit;
		}
		else {
			include "view.php";
			exit;
		}
	}

	include "view.php";
	exit;	