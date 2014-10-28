<?php
session_start();
	if(!$_SESSION['userName']) {
		header('Location: /assignments/assignment6_2/signup/');
	}

	include "view.php";
