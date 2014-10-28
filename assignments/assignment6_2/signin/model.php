<?php

function checkUser($userName) {
	$db = connect();
	$sql = "SELECT userName FROM users WHERE userName = '$userName'";
	$result = $db->query($sql);
	$result = $result->fetchAll();
	
	return $result;
}
function checkPassword($username, $password) {
	$db = connect();
    $sql = 'SELECT userPassword FROM users WHERE userEmail = :email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $hashed = $stmt->fetch();
    $hashedPassword = $hashed['userPassword'];
    return crypt($password, $hashedPassword) == $hashedPassword;
	
	return $result;
}