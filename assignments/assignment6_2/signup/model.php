<?php

function checkUser($userName) {
	$db = connect();
	$sql = "SELECT userName FROM users WHERE userName = '$userName'";
	$result = $db->query($sql);
	$result = $result->fetchAll();
	
	return $result;
}
function insertNewUser($userName, $password) {
	$salt = '$5$rounds=25000$'.substr(md5(uniqid(rand(),true)),0,16).'$';
    $hashedPassword = crypt($password, $salt);

    echo $hashedPassword;

	$db = connect();
	$sql = "INSERT INTO users (userName, userPassword) VALUES(:userName, :password)";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':userName', "$userName");
	$stmt->bindValue(':password', "$hashedPassword");
	$stmt->execute();
	$insertResult = $stmt->rowCount();
    $stmt->closeCursor();

    return $insertResult;
}