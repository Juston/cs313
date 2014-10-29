<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";	
	include "model.php";

	if($_POST['action'] == "Join") {
		$userName = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		if($password1 != $password2) {
			$errors['passwordMatch'] = "<p style='color:red;'>Sorry, but the passwords did not match. I bring this up, because it is your fault.</p>";
		}
		if(checkUser($userName)) {
			$errors['userName'] = "<p style='color:red;'>Sorry, but this Username already exists. Pitty, I know.</p>";
		}

		if(!empty($errors)) {
			include 'view.php';
			exit;
		} else {
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
	}

	include "view.php";
	exit;	