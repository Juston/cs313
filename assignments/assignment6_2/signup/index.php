<?php
$session_start();
	
	// include "model.php";

	if($_POST['action'] == "Join") {
		$userName = $_POST['userName'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		if($password1 != $password2) {
			$error['passwordMatch'] = "Sorry, but the passwords did not match. I bring this up, because it is your fault.";
		}
		if(checkUser($userName)) {
			$error['userName'] = "Sorry, but this Username already exists. Pitty, I know.";
		}

		if(!empty($errors)) {
			include 'view.php';
			exit;
		} else {
			$inserted = insertNewUser($userName, $password1);
			if($inserted) {
				header("Location: /assignments/assignment6_2/signin/");
			}
			else {
				include "view.php";
				exit;
			}
		}
	} else {
		include "view.php";
		exit;
	}