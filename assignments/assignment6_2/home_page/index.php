<?php
session_start();
	if(!$_SESSION['userName']) {
		header('Location: ');
	}

	include "view.php";
