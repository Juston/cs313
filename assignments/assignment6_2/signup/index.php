<?php
session_start();

	include $_SERVER['DOCUMENT_ROOT'] . "library/library.php";	
	include "model.php";

	if($_POST['action'] == "Join") {
		$userName = $_POST['userName'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		if($password1 != $password2) {
			$errors['passwordMatch'] = "Sorry, but the passwords did not match. I bring this up, because it is your fault.";
		}
		if(checkUser($userName)) {
			$errors['userName'] = "Sorry, but this Username already exists. Pitty, I know.";
		}

		if(!empty($errors)) {
			echo 'poop!';
			include 'view.php';
			exit;
		} else {
			$inserted = insertNewUser($userName, $password1);
			if($inserted) {
				echo "Woot woot!";
				// header("Location: /assignments/assignment6_2/signin/");
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