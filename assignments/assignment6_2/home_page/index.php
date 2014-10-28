<?php
session_start();
	if(!$_SESSION['userName']) {
		header('Location: /assignments/assignment6_2/signin/');
	}

	include "view.php";
	exit;
